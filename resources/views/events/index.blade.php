@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>
          Event
          <a class="btn btn-success float-xs-right" href="{{ route('events.create') }}">Create</a>
        </h1>
      </div>

      <div class="card-body">
        @if($events->count())
          <table class="table table-sm table-striped">
            <thead>
              <tr>
                <th class="text-xs-center">#</th>
                <th>Title</th> <th>Body</th> <th>User_id</th> <th>Category_id</th> <th>Reply_count</th> <th>View_count</th> <th>Last_reply_user_id</th> <th>Order</th> <th>Excerpt</th> <th>Slug</th>
                <th class="text-xs-right">OPTIONS</th>
              </tr>
            </thead>

            <tbody>
              @foreach($events as $event)
              <tr>
                <td class="text-xs-center"><strong>{{$event->id}}</strong></td>

                <td>{{$event->title}}</td> <td>{{$event->body}}</td> <td>{{$event->user_id}}</td> <td>{{$event->category_id}}</td> <td>{{$event->reply_count}}</td> <td>{{$event->view_count}}</td> <td>{{$event->last_reply_user_id}}</td> <td>{{$event->order}}</td> <td>{{$event->excerpt}}</td> <td>{{$event->slug}}</td>

                <td class="text-xs-right">
                  <a class="btn btn-sm btn-primary" href="{{ route('events.show', $event->id) }}">
                    V
                  </a>

                  <a class="btn btn-sm btn-warning" href="{{ route('events.edit', $event->id) }}">
                    E
                  </a>

                  <form action="{{ route('events.destroy', $event->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">

                    <button type="submit" class="btn btn-sm btn-danger">D </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {!! $events->render() !!}
        @else
          <h3 class="text-xs-center alert alert-info">Empty!</h3>
        @endif
      </div>
    </div>
  </div>
</div>

@endsection
