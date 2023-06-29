<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dish>
 */
class DishFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'picture' => $this->newImage(rand(1, 73)),
            'price' => rand(100, 3000),
            'name' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'type_id' => rand(1, 5),
        ];
    }

    private function newImage(int $imageNumber = 1): string
    {
        $image = new UploadedFile(
            storage_path() . "/seed_pictures/dishes/" . $imageNumber . ".png",
            $imageNumber . '.jpg'
        );
        $filename = 'pictures/' . md5($image) . '.jpg';

        Storage::disk('public')->put($filename, file_get_contents($image->getRealPath()));
        return $filename;
    }
}
