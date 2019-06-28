<?php

use Illuminate\Database\Seeder;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('about-site')->insert([
            'title' => '¿ Quienes somos?',
            'description_site' => 'Somos una empresa exitosa sin fines de lucro. ',
            'firm'=>'Jaun Pablo Foos',
            'created_at' => now(),
            'updated_at' => now(),
      ]);
    }
}
