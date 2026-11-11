<?php

namespace Database\Factories;

use App\Models\Subjects;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Subjects>
 */
class SubjectsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => fake()->unique()->randomNumber(5, true),
            'name' => fake()->unique()->randomElement([
                'Game Dev',
                'KIK',
                'Bahasa Inggris',
                'KIK dan Database',
                'IoT',
                'PPKN',
                'Web Dev',
                'Mobile Dev',
                'PAI',
                'Bahasa Indonesia',
                'Matematika',
                'Bahasa Jepang',
                'BK',
                'PJOK',
                'Sejarah',
                'BTQ',
                'Bahasa Jawa',
            ])
            ];
    }
}
