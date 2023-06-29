<?php

namespace Database\Seeders;

use App\Models\Photograph;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotographSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = DB::table('role_user')
            ->where('role_id', 2)
            ->get();
        $faker = FakerFactory::create();


        foreach ($users as $user) {
            $people = DB::table('users')
                ->where('id', $user->id)
                ->get();

            $faker = FakerFactory::create();
            Photograph::factory()->create([
                'user_id' => $user->id,
                'name' => $people[0]->name,
                'about' => $faker->text(),
                'picture' => $this->getImage(rand(1, 10)),
                'experience' => $faker->text(),
                'address' => $faker->address(),
                'number' => $faker->phoneNumber(),
                'email' => $people[0]->email,
            ]);
        }
    }

    private function getImage(int $imageNumber = 1): string
    {
        $path = storage_path() . "/seed_pictures/photographs/" . $imageNumber . ".jpeg";
        $imageName = md5($path) . '.jpg';
        $resize = Image::make($path)->encode('jpg');
        Storage::disk('public')->put('pictures/' . $imageName, $resize->__toString());
        return 'pictures/' . $imageName;
    }
}
