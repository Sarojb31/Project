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
         DB::table('admin')->insert([
            'name' => 'test',
            'email' => 'test@gmail.com',
            'password' => bcrypt('password'),
            'contact_number' => 9873737
        ]);
    }
}
