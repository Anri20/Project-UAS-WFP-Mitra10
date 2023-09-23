<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    public function definition()
    {
        $isMale = $this->faker->boolean();

        return [
            'nama_depan' => $isMale ? $this->faker->firstNameMale : $this->faker->firstNameFemale,
            'nama_belakang' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'nomor_whatsapp' => $this->faker->unique()->e164PhoneNumber,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'tanggal_lahir' => $this->faker->dateTimeBetween('-50 years', '-20 years'),
            'jenis_kelamin' => $isMale ? 'L' : 'P',
            'alamat' => $this->faker->address,
        ];
    }
}
