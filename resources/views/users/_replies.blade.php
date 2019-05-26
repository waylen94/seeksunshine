@if (count($replies))

  <ul class="list-group mt-4 border-0">
    @foreach ($replies as $reply)
      <li class="list-group-item pl-2 pr-2 border-right-0 border-left-0 @if($loop->first) border-top-0 @endif">
        <a href="{{ $reply->event->link(['#reply' . $reply->id]) }}">
          {{ $reply->event->title }}
        </a>

        <div class="reply-content text-secondary mt-2 mb-2">
          {!! $reply->content !!}
        </div>

        <div class="text-secondary" style="font-size:0.9em;">
          <i class="far fa-clock"></i> replied at {{ $reply->created_at->diffForHumans() }}
        </div>
      </li>
    @endforeach
  </ul>

@else
  <div class="empty-block">sorry no statistics </div>
@endif

<!-- page -->
<div class="mt-4 pt-1">
  {!! $replies->appends(Request::except('page'))->render() !!}
</div>