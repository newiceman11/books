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
      DB::table('about_sites')->insert([
            'title' => '¿ Quienes somos?',
            'description_site' => 'Alejandria.com es una asociación civil sin fines de lucro. Fundada en 2006, es una de las instituciones vituales de promoción de la cultura más antigua de la República Argentina. Ofrece el servicio de biblioteca pública en forma gratuita y constituye un lugar de encuentro para la sociedad civil de Paraná y Entre Ríos: cada año se realizan más de 100 presentaciones artísticas, culturales y educativas; y varias asociaciones civiles con los más diversos intereses tienen sede en su sitio. La sede social de nuestra institución fue declarada "Sitio de promulgación gratuita y fomentación de lectura" en el año 2006 (Ley del Congreso Nacional). ',
            'firm'=>'Juan Pablo Foos',
            'created_at' => now(),
            'updated_at' => now(),
      ]);
    }
}
