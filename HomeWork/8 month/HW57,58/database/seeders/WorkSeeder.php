<?php

namespace Database\Seeders;

use App\Models\Photograph;
use App\Models\Work;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $photographs = Photograph::all();
        $faker = FakerFactory::create();

        foreach ($photographs as $photograph) {
            for ($i = 0; $i < rand(8, 15); $i++) {
                Work::factory()->create([
                    'photograph_id' => $photograph->id,
                    'description' => $faker->text(),
                    'picture' => $this->getImage(rand(1, 10)),
                    'rating' => rand(1, 5)
                ]);
            }
        }
    }

    private function getImage(int $imageNumber = 1): string
    {
        $path = storage_path() . "/seed_pictures/works/" . $imageNumber . ".jpg";
        $imageName = md5($path) . '.jpg';
        $resize = Image::make($path)->encode('jpg');
        Storage::disk('public')->put('pictures/' . $imageName, $resize->__toString());
        return 'pictures/' . $imageName;
    }
}
