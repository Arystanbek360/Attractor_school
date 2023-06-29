<?php

namespace Database\Seeders;

use App\Models\Phone;
use App\Models\User;
use Database\Factories\PhoneFactory;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = FakerFactory::create();

        User::all()
            ->each(function (User $user) use ($faker): void {
                $phone = new Phone();
                $phone->number = $faker->phoneNumber();
                $phone->user()->associate($user);
                $phone->save();
            });
    }
}
