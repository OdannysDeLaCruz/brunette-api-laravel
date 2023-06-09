<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ammount' => $this->faker->randomNumber(5),
            'shipping_address' => $this->faker->streetAddress(),
            'status' => $this->faker->boolean(),
            'user_id' => rand(1, 10),
        ];
    }
}
