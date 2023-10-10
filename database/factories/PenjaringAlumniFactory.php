<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PenjaringAlumni>
 */
class PenjaringAlumniFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'nim' => $this->faker->name(),
            'fakultas' => $this->faker->name(),
            'program_studi' => $this->faker->name(),
            'tahun_masuk' => $this->faker->name(),
            'tahun_lulus' => $this->faker->name(),
            'jenis_kelamin' => $this->faker->name(),
            'phone_number' => $this->faker->name(),
            'email' => $this->faker->name(),
            'alamat' => $this->faker->name(),
            'tempat_kerja' => $this->faker->name(),
            'alamat_kerja' => $this->faker->name(),
            'posisi' => $this->faker->name(),
        ];
    }
}