<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\Motels;
use Illuminate\Support\Str;

class MotelsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Motels::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text(20),
            'address' => $this->faker->text(50),
            'area' => $this->faker->numberBetween(100,250),
            'min_price' => $this->faker->numberBetween(300000,5000000),
            'max_price' => $this->faker->numberBetween(1000000,2000000),
            'room_quantity' => $this->faker->numberBetween(1,20),
            'views' => $this->faker->numberBetween(1,20),
            'descreption' => $this->faker->text(100),
            'status' => $this->faker->text(20),
            'idUser' => 1,
        ];
    }
}
