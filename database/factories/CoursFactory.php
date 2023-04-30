<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CoursFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

                'titre' => $this->faker->name(),
                'description' => $this->faker->name(),
                'theme' => $this->faker->unique()->name()


            ];
        }
    }
