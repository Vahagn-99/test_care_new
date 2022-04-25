<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

class BrandFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string Brand
     */
    protected $model = Brand::class;

    /**
     * The name of the factory's corresponding model.
     *
     * @var array BRANDS
     */
    protected $brands = [
        'BNW', 'Opel', 'MersCedes', 'Audi', 'Toyota', 'Nissan', 'Infinity', 'Honday', 'Ford'
    ];

    /**
     * The name of the factory's corresponding model.
     *
     * @var array COUNTRIES
     */
    protected $countries = [
        'Japan', 'America', 'Italia', 'France', 'Germania', 'China', 'Moldova'
    ];
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->brands[rand(0, count($this->brands) - 1)],
            'maker' => $this->faker->name(),
            'country' => $this->countries[rand(0, count($this->countries) - 1)],
        ];
    }
}
