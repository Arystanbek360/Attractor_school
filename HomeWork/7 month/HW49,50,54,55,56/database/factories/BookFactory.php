<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => 'Название книги',
            'description' => fake()->text(500),
            'price' => rand(10, 800),
            'sales' => rand(0, 10),
            'picture' => $this->getImage(rand(1, 10)),
            'author_id' => rand(1, 5)
        ];
    }

    private function getImage(int $imageNumber = 1): string
    {
        $path = storage_path() . "/seed_pictures/books/" . $imageNumber . ".jpg";
        $imageName = md5($path) . '.jpg';
        $resize = Image::make($path)->encode('jpg');
        Storage::disk('public')->put('pictures/' . $imageName, $resize->__toString());
        return 'pictures/' . $imageName;
    }
}
