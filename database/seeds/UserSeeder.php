<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name'      => 'Felipe Balloni Ferreira',
            'email'     => 'felipe.balloni@hotmail.com',
            'password'  => bcrypt('password'),
        ]);

        factory(User::class, 10 )->create();
    }
}
