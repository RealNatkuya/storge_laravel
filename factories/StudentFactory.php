<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class StudentFactory extends Factory
{
    protected $model = Student::class;


    public function definition(): array
    {
        return [
            'std_sid' => fake()->numerify("671######"),
            'std_fname' => fake()->firstname(),
            'std_lname' => fake()->lastname(),
            'std_ttl_id' => fake()->numberBetween(5,7),
            'std_pgm_id' => fake()->numberBetween(1,5),
        ];
    }
}