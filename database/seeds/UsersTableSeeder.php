<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = app(Faker\Generator::class);
        
        $users = factory(User::class)->times(10)->make();
        
        $user_array = $users->makeVisible(['password', 'remember_token'])->toArray();
        
        User::insert($user_array);

        $user = User::find(1);
        $user->name = 'Waylen94';
        $user->email = 'administor@qq.com';
        $user->save();
        
    }
}
