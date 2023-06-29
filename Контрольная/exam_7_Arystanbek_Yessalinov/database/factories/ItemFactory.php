<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $items = [
            [],
            ['Стол', 'Стул', 'Шкаф'],
            ['Компьютер', 'Ноутбук'],
            ['Свитч', 'Хаб'],
            ['Кондиционер', 'Холодильник', 'Проектор']
        ];
        $rand = rand(1, 4);
        return [
            'name' => fake()->randomElement($items[$rand]),
            'description' => fake()->text(500),
            'picture' => $this->getImage(rand(1, 10)),

            'cabinet_id' => rand(1, 3),
            'type_id' => $rand,
        ];
    }

    private function getImage(int $imageNumber = 1): string
    {
        $path = storage_path() . "/seed_pictures/" . $imageNumber . ".jpg";
        $imageName = md5($path) . '.jpg';
        $resize = Image::make($path)->encode('jpg');
        Storage::disk('public')->put('pictures/' . $imageName, $resize->__toString());
        return 'pictures/' . $imageName;
    }
}
