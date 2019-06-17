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
               'name'=>'Diego',
               'email'=>'admin@admin.com',
               'password'=>  bcrypt('123456'),
               'role'=>1,
               //password=123456
         ]);

        DB::table('users')->insert([
               'name'=>'Matias',
               'email'=>'user3@auser3.com',
               'password'=>  bcrypt('123456'),
               'role'=>0,
               //password=123456
         ]);

        DB::table('users')->insert([
               'name'=>'Juan',
               'email'=>'user@user.com',
               'password'=>  bcrypt('123456'),
               'role'=>0,
               //password=123456
         ]);

    }
}

//php artisan db:seed --class=UsersTableSeeder
