<?php

namespace Database\Factories;

use App\Models\Classroom;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Classroom>
 */
class ClassroomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
{
    return [
        'name' => fake()->unique()->randomElement(['11 PPLG 1', '11 PPLG 2', '11 PPLG 3', '11 DKV 1', '11 DKV 2','11 DKV 3','11 DKV 4','11 DKV 5','11 ANIMASI 1', '11 ANIMASI 2', '11 ANIMASI 3', '11 ANIMASI 4', '11 ANIMASI 5']),
        'major' => fake()->randomElement(['PPLG', 'DKV', 'ANIMASI']),
    ];
}
}
