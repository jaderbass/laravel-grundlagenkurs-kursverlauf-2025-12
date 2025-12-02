<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use Illuminate\Support\Str;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title'             => 'Der Herr der Ringe, die Gefährten',
            'author'            => 'J.R.R. Tolkien',
            'isbn'              => '978-3608939811',
            'published_year'    => 2012,
            'category'          => 'Fantasy',
        ]);

        Book::create([
            'title'             => 'Systemversagen: Aufstieg und Fall einer großartigen Wirtschaftsnation',
            'author'            => 'Gabor Steingart',
            'isbn'              => '978-3328604228',
            'published_year'    => 2025,
            'category'          => 'Sachbuch',
        ]);

        Book::factory()->count(10)->create();
    }
}
