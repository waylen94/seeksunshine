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
        
        $avatars = [
            'https://iocaffcdn.phphub.org/uploads/images/201710/14/1/s5ehp11z6s.png',
            'https://iocaffcdn.phphub.org/uploads/images/201710/14/1/Lhd1SHqu86.png',
            'https://iocaffcdn.phphub.org/uploads/images/201710/14/1/LOnMrqbHJn.png',
            'https://iocaffcdn.phphub.org/uploads/images/201710/14/1/xAuDMxteQy.png',
            'https://iocaffcdn.phphub.org/uploads/images/201710/14/1/ZqM7iaP4CR.png',
            'https://iocaffcdn.phphub.org/uploads/images/201710/14/1/NDnzMutoxX.png',
        ];
        
        
        $users = factory(User::class)
        ->times(10)
        ->make()
        ->each(function ($user, $index)
            use ($faker, $avatars)
            {
                $user->avatar = $faker->randomElement($avatars);
        });
        
//         $users = factory(User::class)->times(10)->make();
        
        $user_array = $users->makeVisible(['password', 'remember_token'])->toArray();
        
        User::insert($user_array);

        $user = User::find(1);
        $user->name = 'Waylen94';
        $user->email = 'administor@qq.com';
        $user->save();
        
    }
}
