<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'short' => $this->faker->sentence($nbWords = 17, $variableNbWords = true),
            'desc' => $this->faker->text,
            'img' => '',
        ];
    }
}
