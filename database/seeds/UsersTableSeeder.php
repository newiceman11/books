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
               'name'=>'Diego',
               'email'=>'admin1@admin1.com',
               'password'=>  bcrypt('123456'), 
               //password=123456           
         ]);
        
        DB::table('users')->insert([
               'name'=>'Matias',
               'email'=>'admin3@admin3.com',
               'password'=>  bcrypt('123456'), 
               //password=123456           
         ]);
        
        DB::table('users')->insert([
               'name'=>'juan',
               'email'=>'admin2@admin2.com',
               'password'=>  bcrypt('123456'), 
               //password=123456           
         ]);
    }
}

//php artisan db:seed --class=UsersTableSeeder