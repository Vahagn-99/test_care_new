<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Car;
use App\Models\CarModel;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string Car
     */
    protected $model = Car::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'car_number' => rand(10, 99) . '-VH-' . rand(100, 999),
            'car_make_year' => rand(1850, 2022),
            'model_id' => CarModel::getInRondomOrder()->id,
            'brand_id' => Brand::getInRondomOrder()->id,
            'user_id' => User::getInRondomOrder()->id,
        ];
    }
}
