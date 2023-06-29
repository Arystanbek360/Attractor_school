<?php

namespace Database\Seeders;

use App\Models\Phone;
use App\Models\User;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Seeder;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        Phone::factory(5)->create();

        $faker = FakerFactory::create();
        $user = User::all()
            ->map(function (User $user) use ($faker): void {
                $phone = new Phone();
                $phone->number = $faker->phoneNumber();
                $phone->user()->associate($user);
                $phone->save();
            });
    }
}
