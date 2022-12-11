<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;


class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'page_heading' => $this->faker->sentence(4),
            'short_description' => $this->faker->paragraph(),
            'long_description' => $this->faker->paragraph(),
            'meta_keywords' => $this->faker->paragraph(),
            'meta_description' => $this->faker->paragraph(),
            'SKU' => $this->faker->ean13(),
            'amazon_link' => $this->faker->url(),
            'price' => $this->faker->randomFloat(1, 20, 30),
            'length' => $this->faker->numberBetween(100,999),
            'height' => $this->faker->numberBetween(100,999),
            'width' => $this->faker->numberBetween(100,999),
            'weight' => $this->faker->numberBetween(100,999),
            'main_image' => $this->faker->word(),
            'small_image' => $this->faker->word(),
            'status' => $this->faker->boolean,
            'alias' => $this->faker->word(),
            'weight_unit_id' => $this->faker->numberBetween(1,10),
            'category_id' => $this->faker->numberBetween(1,10),
            'manufacturer_id' => $this->faker->numberBetween(1,10)
        ];
    }
}
