<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'name' => 'test',
            'email' => 'test7@gmail.com',
            'password' => bcrypt('password'),
            'contact_number' => '9873737',
            'address'=>'KTM'
        ]); 
        DB::table('users')->insert([
            'name' => 'est',
            'email' => 't2est@gmail.com',
            'password' => bcrypt('password'),
            'contact_number' => '9873737',
            'address'=>'KTM'
        ]);
         DB::table('users')->insert([
            'name' => 'test',
            'email' => 'te13st@gmail.com',
            'password' => bcrypt('password'),
            'contact_number' => '9873737',
            'address'=>'KTM'
        ]);
          DB::table('users')->insert([
            'name' => 'test',
            'email' => 'test2@gmail.com',
            'password' => bcrypt('password'),
            'contact_number' => '9873737',
            'address'=>'KTM'
        ]);

    }
}
