<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Psy\Util\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->name,
            'content'=>$this->faker->text(50),
            'image'=>$this->faker->word(3),
            'link'=>'assets/images/blog_'. random_int(1,10) .'.jpg',

        ];
    }
}
