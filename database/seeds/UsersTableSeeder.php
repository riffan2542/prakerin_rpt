<?php

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
        \App\User::create([
            'name'  => 'Riffan Pathin Tustiawan',
            'email' =>  'riffan2542@gmail.com',
            'password'  => bcrypt('persib2014')
    ]);
    }
}
