<?php

namespace Database\Factories;

use App\Models\Student;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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

    protected $model = Student::class;
    public function definition()
    {
        // $faker = faker::create();
        $name = $this->faker->name;
        $slug = Str::slug($name);
        return [
            'name' => $name,
            'birthplace' => $this->faker->city,
            'birthday' => $this->faker->date,
            'address' =>$this->faker->city,
            'education' =>$this->faker->company,
            'location' =>$this->faker->streetAddress,
            'skills' =>$this->faker->word,
            'slug' =>$slug
        ];
    }
}
