<?php

namespace Database\Seeders;

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

        if (empty(\App\Models\Brand::count())) {
            \App\Models\Brand::factory()->count(10)->create();
        }

        if (empty(\App\Models\CarModel::count())) {
            \App\Models\CarModel::factory()->count(10)->create();
        }

        if (empty(\App\Models\User::count())) {
            \App\Models\User::factory()->count(10)->create();
        }

        if (!empty(\App\Models\Brand::count()) && !empty(\App\Models\CarModel::count()) && !empty(\App\Models\User::count())) {

            if (empty(\App\Models\Car::count()))
                \App\Models\Car::factory()->count(30)->create();
        }

        //try php artisan db:seed
    }
}
