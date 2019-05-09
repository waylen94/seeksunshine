@extends('layouts.app')

@section('title', $event->title)

@section('content')

  <div class="row">

    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs author-info">
      <div class="card ">
        <div class="card-body">
          <div class="text-center">
            Author：{{ $event->user->name }}
          </div>
          <hr>
          <div class="media">
            <div align="center">
              <a href="{{ route('users.show', $event->user->id) }}">
                <img class="thumbnail img-fluid" src="{{ $event->user->avatar }}" width="300px" height="300px">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 event-content">
      <div class="card ">
        <div class="card-body">
          <h1 class="text-center mt-3 mb-3">
            {{ $event->title }}
          </h1>

          <div class="article-meta text-center text-secondary">
            {{ $event->created_at->diffForHumans() }}
            ⋅
            <i class="far fa-comment"></i>
            {{ $event->reply_count }}
          </div>

          <div class="event-body mt-4 mb-4">
            {!! $event->body !!}
          </div>
@can('update', $event)
          <div class="operate">
            <hr>
            <a href="{{ route('events.edit', $event->id) }}" class="btn btn-outline-secondary btn-sm" role="button">
              <i class="far fa-edit"></i> Modify
            </a>
            <form action="{{ route('events.destroy', $event->id) }}" method="post"
                    style="display: inline-block;"
                    onsubmit="return confirm('Do you ensure deleting action？');">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-outline-secondary btn-sm">
                  <i class="far fa-trash-alt"></i> Delete
                </button>
              </form>
          </div>
 @endcan
        </div>
      </div>
    </div>
  </div>
@stop
