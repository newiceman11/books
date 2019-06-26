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
               'subItem' => 1,
               'menu'  => 1,
         ]);

        DB::table('items')->insert([
               'item_name' => 'Libros',
               'url' => '/libros',
               'subItem' => 1,
               'menu' => 1,
         ]);

        DB::table('items')->insert([
               'item_name'=>'About',
               'url' => '/about',
               'subItem' => 1,
               'menu' => 1,
         ]);
    }
}
