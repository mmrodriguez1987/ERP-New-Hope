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
            'name' => $this->fake->name,
            'page_heading' => $this->fake->text,
            'short_description' => $this->fake->text,
            'long_description' => $this->fake->text,
            'meta_keywords' => $this->fake->text,
            'meta_description' => $this->fake->textword,
            'SKU' => $this->fake->word,
            'amazon_link' => $this->fake->word,
            'price' => $this->fake->number,
            'length' => $this->fake->numberBetween(100,999),
            'height' => $this->fake->numberBetween(100,999),
            'width' => $this->fake->numberBetween(100,999),
            'weight' => $this->fake->numberBetween(100,999),
            'main_image' => $this->fake->word,
            'small_image' => $this->fake->word,
            'status' => $this->fake->boolean,
            'alias' => $this->fake->word,
            'weight_unit_id' => $this->fake->numberBetween(1,10),
            'category_id' => $this->fake->numberBetween(1,10),
            'manufacturer_id' => $this->fake->numberBetween(1,10)
        ];
    }
}
