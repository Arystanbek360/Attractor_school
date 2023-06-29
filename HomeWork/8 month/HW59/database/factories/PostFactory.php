<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'body' => $this->faker->paragraph(
                $nbSentences = 20, $variableNbSentences = true
            ),
            'options' => json_encode(
                [
                    "key" => $this->faker->paragraph(
                        $nbSentences = 20, $variableNbSentences = true
                    )
                ]
            ),
        ];
    }
}
