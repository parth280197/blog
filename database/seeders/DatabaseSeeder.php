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
        User::truncate();
        Category::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        Post::create([
            'title' => 'My first post',
            'slug' => 'My-first-post',
            'category_id' => $personal->id,
            'user_id' => $user->id,
            'excerpt' => 'My first post',
            'body' => '<p>' . 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum a faucibus felis, eget efficitur libero. Praesent mauris ipsum, consectetur id eleifend at, egestas et lectus. Cras elementum, nunc eu fermentum gravida, ante sapien dictum nunc, vel gravida nulla magna et dolor. Donec facilisis blandit elit id gravida. Nam tristique nibh non lorem dapibus elementum. Suspendisse potenti. Vivamus ultricies, libero in interdum hendrerit, leo augue egestas enim, eu accumsan lorem lacus sed purus. Fusce ultricies erat ac leo maximus, at auctor libero varius. Pellentesque sed risus elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Morbi hendrerit nunc nec ex fringilla, et posuere libero suscipit. Curabitur tincidunt neque ac ullamcorper tristique. Vestibulum neque metus, pellentesque eget vulputate sed, rhoncus ac ante. Quisque ipsum nisl, tempor a lacus sit amet, tincidunt maximus justo. Nullam eleifend aliquam nisi, ac tempor ex hendrerit feugiat.' . '</p>'
        ]);

        Post::create([
            'title' => 'My work post',
            'slug' => 'My-work-post',
            'category_id' => $work->id,
            'user_id' => $user->id,
            'excerpt' => 'My work post',
            'body' => '<p>' . 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum a faucibus felis, eget efficitur libero. Praesent mauris ipsum, consectetur id eleifend at, egestas et lectus. Cras elementum, nunc eu fermentum gravida, ante sapien dictum nunc, vel gravida nulla magna et dolor. Donec facilisis blandit elit id gravida. Nam tristique nibh non lorem dapibus elementum. Suspendisse potenti. Vivamus ultricies, libero in interdum hendrerit, leo augue egestas enim, eu accumsan lorem lacus sed purus. Fusce ultricies erat ac leo maximus, at auctor libero varius. Pellentesque sed risus elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Morbi hendrerit nunc nec ex fringilla, et posuere libero suscipit. Curabitur tincidunt neque ac ullamcorper tristique. Vestibulum neque metus, pellentesque eget vulputate sed, rhoncus ac ante. Quisque ipsum nisl, tempor a lacus sit amet, tincidunt maximus justo. Nullam eleifend aliquam nisi, ac tempor ex hendrerit feugiat.' . '</p>'
        ]);

        Post::create([
            'title' => 'My family post',
            'slug' => 'My-family-post',
            'category_id' => $family->id,
            'user_id' => $user->id,
            'excerpt' => 'My family post',
            'body' => '<p>' . 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum a faucibus felis, eget efficitur libero. Praesent mauris ipsum, consectetur id eleifend at, egestas et lectus. Cras elementum, nunc eu fermentum gravida, ante sapien dictum nunc, vel gravida nulla magna et dolor. Donec facilisis blandit elit id gravida. Nam tristique nibh non lorem dapibus elementum. Suspendisse potenti. Vivamus ultricies, libero in interdum hendrerit, leo augue egestas enim, eu accumsan lorem lacus sed purus. Fusce ultricies erat ac leo maximus, at auctor libero varius. Pellentesque sed risus elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Morbi hendrerit nunc nec ex fringilla, et posuere libero suscipit. Curabitur tincidunt neque ac ullamcorper tristique. Vestibulum neque metus, pellentesque eget vulputate sed, rhoncus ac ante. Quisque ipsum nisl, tempor a lacus sit amet, tincidunt maximus justo. Nullam eleifend aliquam nisi, ac tempor ex hendrerit feugiat.' . '</p>'
        ]);
    }
}
