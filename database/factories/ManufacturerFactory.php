<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ManufacturerFactory extends Factory
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
            'image' => $this->faker->imageUrl(100, 100),
            'banner_image' => $this->faker->imageUrl(1200, 500),
            'description' => $this->faker->paragraph(),
            'status' => $this->faker->boolean(),
            'provider_id' => rand(1, 10)
        ];
    }
}
