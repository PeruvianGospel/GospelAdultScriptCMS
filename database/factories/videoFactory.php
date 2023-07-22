<?php

namespace Database\Factories;
use App\Models\video;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class videoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = video::class;
    public function definition(): array
    {
        return [
           'title'=> fake()->sentence(),
           'description'=> fake()->paragraph(),
           'embed'=> fake()->paragraph(),
           'img'=> 'https://source.unsplash.com/200x200/?love?'.fake()->unique()->randomNumber,
           'category'=> fake()->sentence(),
           'tags'=> fake()->sentence(),
        ];
    }
}
