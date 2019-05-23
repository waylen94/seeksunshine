<?php

use Illuminate\Database\Seeder;
use App\Models\Event;
use App\Models\Reply;
use App\Models\User;

class ReplysTableSeeder extends Seeder
{
    public function run()
    {
        $user_ids = User::all()->pluck('id')->toArray();
        
        $event_ids = Event::all()->pluck('id')->toArray();
        
        $faker = app(Faker\Generator::class);
        
        $replys = factory(Reply::class)
        ->times(1000)
        ->make()
        ->each(function ($reply, $index)
            use ($user_ids, $event_ids, $faker)
            {

                $reply->user_id = $faker->randomElement($user_ids); 
                $reply->event_id = $faker->randomElement($event_ids);
        });
        
        Reply::insert($replys->toArray());
    }
}
