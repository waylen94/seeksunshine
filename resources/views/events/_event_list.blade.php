@if (count($events))
  <ul class="list-unstyled">
    @foreach ($events as $event)
      <li class="media">
        <div class="media-left">
          <a href="{{ route('users.show', [$event->user_id]) }}">
            <!--              <img class="thumbnail img-fluid" src="{{ $event->user->avatar }}" width="52px" height="52px"> -->
            <img class="media-object img-thumbnail mr-3" style="width: 52px; height: 52px;" src="{{ $event->user->avatar }}" title="{{ $event->user->name }}">
         </a>
          
        </div>

        <div class="media-body">

          <div class="media-heading mt-0 mb-1">
            <a href="{{ route('events.show', [$event->id]) }}" title="{{ $event->title }}">
              {{ $event->title }}
            </a>
            <a class="float-right" href="{{ route('events.show', [$event->id]) }}">
              <span class="badge badge-secondary badge-pill"> {{ $event->reply_count }} </span>
            </a>
          </div>

          <small class="media-body meta text-secondary">

            <span> • </span>
            <a class="text-secondary" href="{{ route('users.show', [$event->user_id]) }}" title="{{ $event->user->name }}">
              <i class="far fa-user"></i>
              {{ $event->user->name }}
            </a>
            <span> • </span>
            <i class="far fa-clock"></i>
            <span class="timeago" title="Last modified by：{{ $event->updated_at }}">{{ $event->updated_at->diffForHumans() }}</span>
          </small>

        </div>
      </li>

      @if ( ! $loop->last)
        <hr>
      @endif

    @endforeach
  </ul>

@else
  <div class="empty-block">There is no data ~_~ </div>
@endif