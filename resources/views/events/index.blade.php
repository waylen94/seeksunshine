@extends('layouts.app')

@section('title', 'EventList')

@section('content')

<div class="row mb-5">
  <div class="col-lg-9 col-md-9">
    <div class="card ">

      <div class="card-header bg-transparent">
        <ul class="nav nav-pills">
          <li class="nav-item"><a class="nav-link {{ active_class( ! if_query('order', 'recent')) }}" href="{{ Request::url() }}?order=default">Last modified</a></li>
          <li class="nav-item"><a class="nav-link {{ active_class(if_query('order', 'recent')) }}" href="{{ Request::url() }}?order=recent">Last issued</a></li>
        </ul>
        
      </div>

      <div class="card-body">

        @include('events._event_list', ['events' => $events])
        <div class="mt-5">
          {!! $events->appends(Request::except('page'))->render() !!}
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-3 sidebar">
    @include('events._sidebar')
  </div>
</div>

@endsection
