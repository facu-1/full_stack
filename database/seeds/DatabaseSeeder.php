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
        factory(App\categoria::class, 10)->create();
        factory(App\marca::class, 10)->create();
        factory(App\producto::class, 20)->create();
    }
}
