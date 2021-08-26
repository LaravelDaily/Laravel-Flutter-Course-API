<?php

namespace Database\Factories;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaction::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description'      => $this->faker->realText(80),
            'amount'           => $this->faker->randomFloat($nbMaxDecimals = 2, $min = -200, $max = 200),
            'transaction_date' => $this->faker->dateTimeBetween('-3 months', '+3 months')->format('m/d/Y'),
        ];
    }
}
