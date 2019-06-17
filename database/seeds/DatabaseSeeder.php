<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(BooksTableSeeder::class);
    }
}
// write on terminal
/*php artisan make:seeder DatabaseSeeder
 * php artisan db:seed --class=DatabaseSeeder
 */

 /*
EJECUTAR EN TERMINAL db:seed
para realizar las migraciones de los seeders
  *   */
