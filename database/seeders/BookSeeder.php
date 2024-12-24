<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            "title" => "To Kill a Mockingbird",
            "description" => "A classic novel about racial injustice and moral growth in the Deep South.",
            "price" => 150000.50,
            "stock" => 120,
            "cover_photo" => "https://cdn.britannica.com/21/182021-050-666DB6B1/book-cover-To-Kill-a-Mockingbird-many-1961.jpg",
            "genre_id" => 2,
            "author_id" => 1
        ]);
        Book::create([
            "title" => "1984",
            "description" => "A dystopian tale of a totalitarian regime and the struggle for individuality.",
            "price" => 124500.00,
            "stock" => 85,
            "cover_photo" => "https://images.booksense.com/images/935/524/9780451524935.jpg",
            "genre_id" => 5,
            "author_id" => 2
        ]);
        Book::create([
            "title" => "Pride and Prejudice",
            "description" => "A romantic novel about love, class, and societal expectations in 19th-century England.",
            "price" => 109900.75,
            "stock" => 200,
            "cover_photo" => "https://m.media-amazon.com/images/I/712P0p5cXIL._AC_UF1000,1000_QL80_.jpg",
            "genre_id" => 6,
            "author_id" => 3
        ]);
        Book::create([
            "title" => "The Great Gatsby",
            "description" => "A story of wealth, ambition, and love in the Jazz Age of 1920s America.",
            "price" => 149900.99,
            "stock" => 90,
            "cover_photo" => "https://assets-a1.kompasiana.com/items/album/2023/08/03/the-great-gatsby-64cb9a054addee3e891561e2.jpg?t=o&v=1200",
            "genre_id" => 2,
            "author_id" => 4
        ]);
        Book::create([
            "title" => "The Catcher in the Rye",
            "description" => "A coming-of-age story about teenage rebellion and disillusionment.",
            "price" => 134500.50,
            "stock" => 75,
            "cover_photo" => "https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1398034300i/5107.jpg",
            "genre_id" => 4,
            "author_id" => 5
        ]); 
    }
}

