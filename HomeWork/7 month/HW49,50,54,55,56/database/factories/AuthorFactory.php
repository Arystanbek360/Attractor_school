<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class AuthorFactory extends Factory
{
    protected $model = Author::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'description' => fake()->text(500),
            'picture' => $this->getImage(rand(1, 5))
        ];
    }

    private function getImage(int $imageNumber = 1): string
    {
        $path = storage_path() . "/seed_pictures/authors/" . $imageNumber . ".jpg";
        $imageName = md5($path) . '.jpg';
        $image = 'pictures/' . $imageName;
        $resize = Image::make($path)->fit(300)->encode('jpg');
        Storage::disk('public')->put($image, $resize->__toString());

        return $image;
    }
}
