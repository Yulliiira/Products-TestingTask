<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    public function definition()
    {
        $product = Product::inRandomOrder()->first();

        return [
            'customer_name' => fake()->name(),
            'created_data' => fake()->date(),
            'product_id' => Product::inRandomOrder()->first()->id,
            'total_price' => $product->price,
            'status' => fake()->boolean(),
            'comment' => fake()->sentence(2),
        ];
    }
}
