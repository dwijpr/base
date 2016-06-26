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
        DB::table('users')->insert([
            'name' => 'Dwi Prabowo',
            'email' => 'dwijpr@gmail.com',
            'password' => bcrypt('asdfasdf'),
        ]);
        DB::table('users')->insert([
            'name' => 'Owl Prestige',
            'email' => 'owlpre@gmail.com',
            'password' => bcrypt('asdfasdf'),
        ]);
    }
}
