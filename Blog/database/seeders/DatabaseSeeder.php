<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        User::truncate();
//        Category::truncate();
//        Post::truncate();


        $user = User::factory()->create([
           'name' => 'John Doe'
        ]);
        Post::factory(5)->create([
            'user_id' => $user->id
        ]);
//
//        $personal = Category::create([
//            'name' => 'Personal',
//            'slug' => 'personal'
//        ]);
//
//        $family = Category::create([
//            'name' => 'Family',
//            'slug' => 'family'
//        ]);
//
//        $work = Category::create([
//            'name' => 'Work',
//            'slug' => 'work'
//        ]);
//
//        Post::create([
//            'user_id'       => $user->id,
//            'category_id'   => $family->id,
//            'title'         => 'My Family Post',
//            'slug'          => 'my-family-post',
//            'excerpt'       => 'Lorem ipsum doalr sit amet.',
//            'body'          => 'Lorem ipsum dolar sit amet, consectetur adminsidas elit. Mosrhi aviuer as sdis asd asd asdweq asd wdas'
//        ]);
//
//        Post::create([
//            'user_id'       => $user->id,
//            'category_id'   => $work->id,
//            'title'         => 'My Work Post',
//            'slug'          => 'my-work-post',
//            'excerpt'       => 'Lorem ipsum doalr sit amet.',
//            'body'          => 'Lorem ipsum dolar sit amet, consectetur adminsidas elit. Mosrhi aviuer as sdis asd asd asdweq asd wdas'
//        ]);
    }
}
