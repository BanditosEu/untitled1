<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ThreadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(5,true),
            'description'=> $this->faker->paragraphs(1,true),
            'user_id' => $this->faker->numberBetween(1,5)
        ];
    }
}
