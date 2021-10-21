<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

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
            'category_id' => $this->faker->numberBetween(1,10),
            'name' => $this->faker->name,
	        'price' => $this->faker->numberBetween(100000,300000),
            'discount' => $this->faker->numberBetween(100000,300000),
	        'description' => $this->faker->text,
	        'image' => 'default.png',
            'status' => Product::IS_ACTIVE,
	        'created_at' => now(),
	        'updated_at' => now()
        ];
    }
}
