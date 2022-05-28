<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SupplierMotelsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $faker->name,
            'address' => $faker->address,
            'area' => $faker->area,
            'room_quantity' => $faker->number,
            'description' => $faker->description,
            'status' => $faker->status,
            'idUser' => 1,
        ];
    }
}
