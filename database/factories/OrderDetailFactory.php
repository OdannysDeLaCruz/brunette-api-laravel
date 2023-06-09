<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'price' => $this->faker->randomNumber(5),
            'sku' => $this->faker->word(),
            'quantity' => $this->faker->randomDigitNot(0),
            'order_id' => rand(1, 10),
            'product_id' => rand(1, 10),
        ];
    }
}
