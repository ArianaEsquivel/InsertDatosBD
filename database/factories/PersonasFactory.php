<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PersonasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->firstName(),
            'apellido' => $this->faker->lastName(),
            'edad' => random_int(18, 50),
            'correo' => $this->faker->unique()->safeEmail(),
            'telefono' => $this->faker->unique()->phoneNumber(),
        ];
    }
}
