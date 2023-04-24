<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TopicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(5, true),
            'content' => $this->faker->paragraphs(1, true),
            'thread_id' => $this->faker->numberBetween(1, 10),
            'user_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
