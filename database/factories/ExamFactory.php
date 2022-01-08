<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ExamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->word,
            "semester" => $this->faker->numberBetween(1, 8),
            "espb" => $this->faker->numberBetween(3, 7),
            "department_id" => $this->faker->numberBetween(1, 4)
        ];
    }
}
