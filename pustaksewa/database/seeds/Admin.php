<?php

use Illuminate\Database\Seeder;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('admins')->insert([
            'name' => 'test',
            'email' => 'test1@gmail.com',
            'password' => bcrypt('password'),
            'contact_number' => 9873737
        ]);
         DB::table('admins')->insert([
            'name' => 'test',
            'email' => 'te8st@gmail.com',
            'password' => bcrypt('password'),
            'contact_number' => 9873737
        ]);
         DB::table('admins')->insert([
            'name' => 'test',
            'email' => 'te7st@gmail.com',
            'password' => bcrypt('password'),
            'contact_number' => 9873737
        ]);
    }
}
