<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Http\UploadedFile;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Institution>
 */
class InstitutionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company(),
            'picture' => $this->newImage(rand(1, 25)),
            'description' => $this->faker->text,
            'category_id' => rand(1, 7),
            'delivery' => rand(1, 15) * 100
        ];
    }

    private function newImage(int $imageNumber = 1): string
    {
        $image = new UploadedFile(
            storage_path() . "/seed_pictures/institutions/" . $imageNumber . ".jpg",
            $imageNumber . '.jpg'
        );
        $filename = 'pictures/' . md5($image) . '.jpg';

        Storage::disk('public')->put($filename, file_get_contents($image->getRealPath()));
        return $filename;
    }
}
