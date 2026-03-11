<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ExperienceFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle,
            'company' => $this->faker->company,
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->boolean ? $this->faker->date() : null,
            'employment_type' => $this->faker->randomElement(['Full-time', 'Part-time', 'Contract']),
            'icon' => $this->faker->randomElement(['mdi-database', 'mdi-cloud', 'mdi-code-braces']),
        ];
    }
}