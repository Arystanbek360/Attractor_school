<?php
namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->name,
            'description' => $this->faker->text,
            'price' => $this->faker->randomFloat(min: 200, max: 999),
            'category_id' => rand(1, 3),
            'picture' => $this->getImage(rand(1,5)),
        ];
    }

    /**
     * @param int $imageNumber
     * @return string
     */
    private function getImage(int $imageNumber = 1): string
    {
        $path      = storage_path() . "/seed_pictures/" . $imageNumber . ".jpg";
        $imageName = md5($path) . '.jpg';
        $image     = 'pictures/' . $imageName;
        $resize    = Image::make($path)->fit(300)->encode('jpg');
        Storage::disk('public')->put($image, $resize->__toString());

        return $image;
    }
}
