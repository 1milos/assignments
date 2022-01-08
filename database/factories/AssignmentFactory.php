<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AssignmentFactory extends Factory
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
            'description' => $this->faker->realText(),
            'required' => $this->faker->boolean(65),
            'points' => $this->faker->numberBetween(5, 100),
            'exam_id' => $this->faker->numberBetween(1, 9)
        ];
    }
}
