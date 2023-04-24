<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReplyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'content' => $this->faker->paragraphs(5,true),
            'user_id' => $this->faker->numberBetween(1,5),
            'topic_id' => $this->faker->numberBetween(1,20)
        ];
    }
}
