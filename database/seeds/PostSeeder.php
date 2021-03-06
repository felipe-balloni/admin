<?php


use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::all()->each(function ($user) {
            factory(\App\Post::class, 10)->create([
                'author' => $user->id
            ]);
        });
    }
}
