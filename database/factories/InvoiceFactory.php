<?php

namespace Database\Factories;

use App\Models\Invoice;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Invoice>
 */
class InvoiceFactory extends Factory
{

    protected $model = Invoice::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'number'               => $this->faker->numberBetween(10, 1000),
            'customer_id'          => $this->faker->numberBetween(1, 10),
            'date'                 => $this->faker->date,
            'due_date'             => $this->faker->date,
            'reference'            => 'REF-' . rand(10, 500),
            'terms_and_conditions' => $this->faker->paragraph(2),
            'sub_total'            => $this->faker->numberBetween(100, 1000),
            'discount'             => $this->faker->numberBetween(10, 100),
            'total'                => $this->faker->numberBetween(20, 2000),
        ];
    }
}
