<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Grade>
 */
class GradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'grade' => $this->faker->name(),
            'trimester' => $this->faker->year(),
            'subject' => $this->faker->name(),
            'exam' => $this->faker->year(),
            'schoolTerm' => $this->faker->dayOfMonth($max = 'now'),
            'year' => $this->faker->year(),
        ];
    }
}
