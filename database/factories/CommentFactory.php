<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => random_int(1, 10),
            'post_id'=>1,
            'parent_id' => random_int(1, 3),
            'content' => $this->faker->word(6),
            'file'=>'public/assets/images/blog_2.jpg',
        ];
    }
}
