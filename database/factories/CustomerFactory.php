<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
	protected $model = Customer::class;

	public function definition()
	{
		return [
			'firstname' => $this->faker->name,
			'lastname' => $this->faker->name,
			'email' => $this->faker->email,
			'address' => $this->faker->address,
		];
	}
}
