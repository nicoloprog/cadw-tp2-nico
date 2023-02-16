<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FaitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fact' => $this->faker->longText(),
            'length' => $this->faker->string(),
        ];
    }
}
