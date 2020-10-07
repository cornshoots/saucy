<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

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
     *
     * @return array
     */
    public function definition()
    {
        return [
            'productname' => $this->faker->unique()->jobTitle." "."Sauce",
            'supplier_id' => $this->faker->randomDigitNotNull,
            'created_at' => $this->faker->dateTimeThisMonth($max = 'now', $timezone = null),
            'updated_at' => now(),
            'price' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 20),
            'productimage' => $this->faker->imageUrl(500, 500, 'food')
            
        ];
    }
}
