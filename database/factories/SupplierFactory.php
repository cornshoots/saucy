<?php

namespace Database\Factories;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

class SupplierFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Supplier::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'supplier_name' => $this->faker->unique()->company,
            'created_at' => $this->faker->dateTimeThisMonth($max = 'now', $timezone = null),
            'updated_at' => now(),
        ];
    }
}
