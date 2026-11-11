<?php

namespace Database\Factories;

use App\Models\Teachers;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Subjects;
/**
 * @extends Factory<Teachers>
 */
class TeachersFactory extends Factory
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
            'name' => fake()->name(),
            'niy' => fake()->randomNumber(9, true),
            'subject_id' => subjects::factory(),
            'start_date' => fake()->date(),
        ];
    }
}
