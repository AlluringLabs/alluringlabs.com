<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 1)->create()->each(function($u) {
            $u->posts()->save(factory(App\Post::class)->make());
            $u->posts()->save(factory(App\Post::class)->make());
            $u->posts()->save(factory(App\Post::class)->make());
            $u->posts()->save(factory(App\Post::class)->make());
            $u->posts()->save(factory(App\Post::class)->make());
            $u->posts()->save(factory(App\Post::class)->make());
        });
    }
}
