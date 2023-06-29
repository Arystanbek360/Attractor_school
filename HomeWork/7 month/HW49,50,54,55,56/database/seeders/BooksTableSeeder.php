<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Genre;
use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = Book::factory(20)->create();

        foreach ($books as $book) {
            $genres = Genre::inRandomOrder()->limit(rand(1, 5))->get();
            $book->genres()->attach($genres);
        }
    }
}
