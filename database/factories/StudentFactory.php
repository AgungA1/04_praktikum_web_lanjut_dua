<?php

namespace Database\Factories;
// use Faker\Factory as faker;
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
        // $faker = faker::create();
        return [
            'name' => fake()->name(),
            'birthplace' => fake()->city(),
            'birthday' => fake()->date($format = 'd-m-y', $max = '2022',$min = '1980'),
            'address' =>fake()->city(),
            'education' =>fake()->company(),
            'location' =>fake()->streetAddress(),
            'skills' =>fake()->words(2),
            'slug' =>fake()->slug(),
        ];
    }
}
