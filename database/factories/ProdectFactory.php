<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\prodect>
 */
class ProdectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'titel' => $this->faker->titel(),
            'desc' => $this->faker->paragraph(),
            'prix' => $this->faker->number_format(),
            
            
        ];
    }
}

