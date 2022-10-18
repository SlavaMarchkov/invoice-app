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
            'item_code' => 'IC-1000' . rand(10, 500),
            'description' => 'Name of Product' . rand(10, 500),
            'unit_price' => mt_rand(100, 1000),
		];
	}
}
