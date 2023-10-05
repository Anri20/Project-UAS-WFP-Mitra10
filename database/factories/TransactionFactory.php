<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    public function definition()
    {
        $tanggal = $this->faker->dateTimeBetween('-30 days');
        return [
            'tanggal' => $tanggal,
            'metode_pembayaran' => $this->faker->randomElement(['cash', 'visa', 'mastercard']),
            'tanggal_pembayaran' => $this->faker->boolean(80) ?
                $this->faker->dateTimeBetween($tanggal) :
                null,
        ];
    }
}
