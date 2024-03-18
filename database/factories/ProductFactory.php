<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Product;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'number' => 'NO-' . $this->faker->unique()->randomNumber(6),
            'price' => $this->faker->randomNumber(6),
            'remaining_stock' => $this->faker->randomNumber(2),
        ];
    }
}
