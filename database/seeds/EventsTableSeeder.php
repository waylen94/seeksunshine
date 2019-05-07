<?php

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventsTableSeeder extends Seeder
{
    public function run()
    {
        $events = factory(Event::class)->times(50)->make()->each(function ($event, $index) {
            if ($index == 0) {
                // $event->field = 'value';
            }
        });

        Event::insert($events->toArray());
    }

}

