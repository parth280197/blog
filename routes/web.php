<?php

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/posts', function () {
    return view('posts', [
        'posts' => Post::all()
    ]);
});

//here wildcard should be match with variable name in function.
//Route::get('/posts/{post:slug}', function (Post $post) { //give me the post where slug is matching in post.
//    return view('post', [
//        'post' => $post
//    ]);
//});

//an alternative way
Route::get('/posts/{post}', function (Post $post) {
    return view('post', [
        'post' => $post
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'posts' => $category->posts
    ]);
});

/*
 * Note:
 *
 * run for seeing cache
 * php artisan tinker
 *
 * for checking cache
 * cache('posts.all')
 *
 * for forgetting cache
 * cache()->forget('posts.all')
 *
 * php artisan migrate - to create migration
 * php artisan migrate:rollback - to rollback last migration
 * php artisan migrate:fresh - to drop all table and create from scratch. (Should not be used in production)
 *
 * CREATING USER IN DB USING TINKER
 *
 * php artisan tinker
 * Psy Shell v0.10.12 (PHP 8.0.12 — cli) by Justin Hileman
 * >>> $user = new User;
 * [!] Aliasing 'User' to 'App\Models\User' for this Tinker session.
 * => App\Models\User {#3526}
 * >>> $user->name = 'parth';
 * => "parth"
 * >>> $user->email = 'parth@email.com';
 * => "parth@email.com"
 * >>> $user->password = bcrypt('parth!');
 * => "$2y$10$V6ilAIQohP1fW3pwMa5pfuB2N2hNvRRL33xYp2tuGqq.sA0P.z86q"
 * >>> $user->save();
 * => true
 * >>> $user
 * => App\Models\User {#3526
     name: "parth",
     email: "parth@email.com",
     #password: "$2y$10$V6ilAIQohP1fW3pwMa5pfuB2N2hNvRRL33xYp2tuGqq.sA0P.z86q",
     updated_at: "2022-01-01 23:51:55",
     created_at: "2022-01-01 23:51:55",
     id: 1,
   }
 *
 * Make a Post Model and Migration
 *
 * php artisan make:migration create_posts_table
 * php artisan migrate
 * php artisan make:model Post
 *
 * Creating model with migaration
 *
 * php artisan make:model Category -m
 *
 */
