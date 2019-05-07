@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>Event / Show #{{ $event->id }}</h1>
      </div>

      <div class="card-body">
        <div class="card-block bg-light">
          <div class="row">
            <div class="col-md-6">
              <a class="btn btn-link" href="{{ route('events.index') }}"><- Back</a>
            </div>
            <div class="col-md-6">
              <a class="btn btn-sm btn-warning float-right mt-1" href="{{ route('events.edit', $event->id) }}">
                Edit
              </a>
            </div>
          </div>
        </div>
        <br>

        <label>Title</label>
<p>
	{{ $event->title }}
</p> <label>Body</label>
<p>
	{{ $event->body }}
</p> <label>User_id</label>
<p>
	{{ $event->user_id }}
</p> <label>Category_id</label>
<p>
	{{ $event->category_id }}
</p> <label>Reply_count</label>
<p>
	{{ $event->reply_count }}
</p> <label>View_count</label>
<p>
	{{ $event->view_count }}
</p> <label>Last_reply_user_id</label>
<p>
	{{ $event->last_reply_user_id }}
</p> <label>Order</label>
<p>
	{{ $event->order }}
</p> <label>Excerpt</label>
<p>
	{{ $event->excerpt }}
</p> <label>Slug</label>
<p>
	{{ $event->slug }}
</p>
      </div>
    </div>
  </div>
</div>

@endsection
