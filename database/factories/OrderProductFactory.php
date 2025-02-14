<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'quantity' => $this->faker->numberBetween(1, 10),
            'order_id' => $this->faker->randomElement(Order::pluck('id')),
            'product_id' => $this->faker->randomElement(Product::pluck('id'))
        ];
    }
}