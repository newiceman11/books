<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('menus')->insert([
             'name' => 'Main',
             'created_at' => now(),
             'updated_at' => now(),
       ]);
    }
}
