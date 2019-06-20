<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

      public function run()
      {
        DB::table('authors')->insert([
              'id'=>1,
              'name'=>'alguien 1',
              'last name'=>'algun apellido',

               //password=123456
         ]);

        DB::table('authors')->insert([
                'id'=>2,
               'name'=>'alguien 2',
               'last name'=>'algun apellido',
               //password=123456
         ]);

        DB::table('authors')->insert([
                'id'=>3,
               'name'=>'alguien 3',
               'last name'=>'algun apellido',
               //password=123456
         ]);
      }
    }
