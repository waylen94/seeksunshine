<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequest;

class EventsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
// 		$events = Event::paginate();
	    $events = Event::with('user')->paginate(30);
		return view('events.index', compact('events'));
	}

    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

	public function create(Event $event)
	{
		return view('events.create_and_edit', compact('event'));
	}

	public function store(EventRequest $request)
	{
		$event = Event::create($request->all());
		return redirect()->route('events.show', $event->id)->with('message', 'Created successfully.');
	}

	public function edit(Event $event)
	{
        $this->authorize('update', $event);
		return view('events.create_and_edit', compact('event'));
	}

	public function update(EventRequest $request, Event $event)
	{
		$this->authorize('update', $event);
		$event->update($request->all());

		return redirect()->route('events.show', $event->id)->with('message', 'Updated successfully.');
	}

	public function destroy(Event $event)
	{
		$this->authorize('destroy', $event);
		$event->delete();

		return redirect()->route('events.index')->with('message', 'Deleted successfully.');
	}
}