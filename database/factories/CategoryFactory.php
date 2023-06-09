<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
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
            'image_background' => $this->faker->imageUrl(1200, 500),
            'status' => $this->faker->boolean(),
            'image' => $this->faker->imageUrl(200, 200),
            'parent_category_id' => $this->faker->randomDigitNot(0)
        ];
    }
}
