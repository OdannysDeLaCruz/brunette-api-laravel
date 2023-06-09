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
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'code' => $this->faker->word(),
            'description' => $this->faker->paragraph(2),
            'conditions' => $this->faker->paragraph(2),
            'manufacturer_id' => rand(1, 10),
            'category_id' => rand(1, 10)
        ];
    }
}
