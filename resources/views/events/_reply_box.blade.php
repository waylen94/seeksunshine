@include('shared._error')

<div class="reply-box">
  <form action="{{ route('replies.store') }}" method="POST" accept-charset="UTF-8">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="event_id" value="{{ $event->id }}">
    <div class="form-group">
      <textarea class="form-control" rows="3" placeholder="Share your opinion" name="content"></textarea>
    </div>
    <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-share mr-1"></i> Reply</button>
  </form>
</div>
<hr>