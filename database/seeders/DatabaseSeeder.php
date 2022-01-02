<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //create user with name Parth and use dummy data for rest of the properties
        $user = User::factory()->create([
            'name' => 'Parth'
        ]);

        Post::factory(5)->create([
            'user_id' => $user->id,
        ]);
    }
}
