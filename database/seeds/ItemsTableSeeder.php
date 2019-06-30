<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    //
    DB::table('items')->insert([
      'item_name' => 'Inicio',
      'url' => '/',
    ]);

    DB::table('items')->insert([
      'item_name' => 'Libros',
      'url' => '/book-list',

    ]);

    DB::table('items')->insert([
      'item_name'=>'About',
      'url' => '/about',

    ]);
  }
}
