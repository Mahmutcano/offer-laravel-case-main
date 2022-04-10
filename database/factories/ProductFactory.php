<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'product_name' => $this->faker->sentence(3, false),
            'is_offerable' => $this->faker->boolean,
        ];
    }
}
