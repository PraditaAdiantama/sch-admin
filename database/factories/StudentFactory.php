<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nis' => $this->faker->randomNumber(5,true),
            'name' => $this->faker->name(),
            'gender' => $this->faker->randomElement(['Pria','Wanita']),
            'address' => $this->faker->city(),
            'birth_place' => $this->faker->city(),
            'birth_date' => $this->faker->dateTime(),
            'class' => $this->faker->numberBetween(10,12)
        ];
    }
}
