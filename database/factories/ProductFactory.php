<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
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
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(3, true),
            'description' => $this->faker->sentence(),
            'price' => $this->faker->randomFloat(2, 10, 500),

        ];
    }

    public function configure()
    {
        return $this->sequence(
            ['image_url' => 'images/image_test_1.jpg'],
            ['image_url' => 'images/image_test_2.jpg'],
            ['image_url' => 'images/image_test_3.jpg'],
            ['image_url' => 'images/image_test_4.jpg'],
            ['image_url' => 'images/image_test_5.jpg'],
            ['image_url' => 'images/image_test_6.jpg']
        );
    }
}
