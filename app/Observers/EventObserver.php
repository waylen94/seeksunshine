<?php

namespace App\Observers;

use App\Models\Event;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class EventObserver
{
    public function creating(Event $event)
    {
        $event->body = clean($event->body, 'user_event_body');
    }

    public function updating(Event $event)
    {
        //
    }
}