<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Event;

class EventPolicy extends Policy
{
    public function update(User $user, Event $event)
    {
        return $user->isAuthorOf($event);
    }

    public function destroy(User $user, Event $event)
    {
        return $user->isAuthorOf($event);
    }
}
