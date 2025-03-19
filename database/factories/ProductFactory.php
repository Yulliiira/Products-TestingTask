<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

class ProductFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => fake()->word(),
            'description' => fake()->sentence(3),
            'price' => fake()->randomFloat(2, 10, 1000),
            'category_id' => Category::inRandomOrder()->first()->id,
        ];
    }
}
