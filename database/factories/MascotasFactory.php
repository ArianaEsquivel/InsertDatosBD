<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MascotasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'edad' => random_int(1, 10),
            'persona_id' => random_int(1, 100000),
        ];
    }
}
