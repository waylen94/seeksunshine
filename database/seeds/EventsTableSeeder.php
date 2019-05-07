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
        
        $topics = factory(Event::class)
        ->times(100)
        ->make()
        ->each(function ($topic, $index)
            use ($user_ids, $faker)
            {
                $topic->user_id = $faker->randomElement($user_ids);
                
                $topic->category_id = 1;
        });
        
        Event::insert($topics->toArray());
    }
    
}

