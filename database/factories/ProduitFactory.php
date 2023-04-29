<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'libelle' => $this->faker->name(),
            'prix' => $this->faker->numberBetween(0,9999),
            'qte' => $this->faker->numberBetween(0,20),


        ];
    }
}
