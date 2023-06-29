<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'number' => $this->faker->e164PhoneNumber(),
            'picture' => $this->getImage(rand(1, 5)),
        ];
    }

    /**
     * @param int $imageNumber
     * @return string
     */
    private function getImage($imageNumber = 1): string
    {
        $path = storage_path() . "/seed_pictures/" . $imageNumber . ".jpg";
        $imageName = md5($path) . '.jpg';
        $resize = Image::make($path)->fit(300)->encode('jpg');
        Storage::disk('public')->put('pictures/' . $imageName, $resize->__toString());
        return 'pictures/' . $imageName;
    }
}
