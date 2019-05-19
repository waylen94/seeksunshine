<?php

use Illuminate\Database\Seeder;
use App\Models\Event;

use App\Models\User;

class EventsTableSeeder extends Seeder
{
    public function run()
    {
        
        $user_ids = User::all()->pluck('id')->toArray();
        
        $faker = app(Faker\Generator::class);
        
        $event = factory(Event::class)
        ->times(100)
        ->make()
        ->each(function ($event, $index)
            use ($user_ids, $faker)
            {
                $event->user_id = $faker->randomElement($user_ids);
                
                $event->category_id = 1;
        });
        Event::insert($event->toArray());
    }
    
}

