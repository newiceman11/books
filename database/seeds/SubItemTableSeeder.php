<?php

use Illuminate\Database\Seeder;

class SubItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('sub_items')->insert([
             'subitem_name' => 'Post',
             'url' => '/blog',
             'item_id' => 3,
             'created_at' => now(),
             'updated_at' => now(),
       ]);
    }
}
