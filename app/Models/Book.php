<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Book extends Model{
    protected $books = [
        [
            "id" => 1,
            "title" => "To Kill a Mockingbird",
            "description" => "A classic novel about racial injustice and moral growth in the Deep South.",
            "price" => 150000.50,
            "stock" => 120,
            "cover_photo" => "https://example.com/covers/to-kill-a-mockingbird.jpg"
        ],
        [
            "id" => 2,
            "title" => "1984",
            "description" => "A dystopian tale of a totalitarian regime and the struggle for individuality.",
            "price" => 124500.00,
            "stock" => 85,
            "cover_photo" => "https://example.com/covers/1984.jpg"
        ],
        [
            "id" => 3,
            "title" => "Pride and Prejudice",
            "description" => "A romantic novel about love, class, and societal expectations in 19th-century England.",
            "price" => 109900.75,
            "stock" => 200,
            "cover_photo" => "https://example.com/covers/pride-and-prejudice.jpg"
        ],
        [
            "id" => 4,
            "title" => "The Great Gatsby",
            "description" => "A story of wealth, ambition, and love in the Jazz Age of 1920s America.",
            "price" => 149900.99,
            "stock" => 90,
            "cover_photo" => "https://example.com/covers/the-great-gatsby.jpg"
        ],
        [
            "id" => 5,
            "title" => "The Catcher in the Rye",
            "description" => "A coming-of-age story about teenage rebellion and disillusionment.",
            "price" => 134500.50,
            "stock" => 75,
            "cover_photo" => "https://example.com/covers/the-catcher-in-the-rye.jpg"
        ],
        [
            "id" => 6,
            "title" => "Moby-Dick",
            "description" => "An epic tale of obsession and revenge set on the high seas.",
            "price" => 189999.99,
            "stock" => 50,
            "cover_photo" => "https://example.com/covers/moby-dick.jpg"
        ],
        [
            "id" => 7,
            "title" => "Harry Potter and the Sorcerer’s Stone",
            "description" => "The first adventure in the magical world of Harry Potter and Hogwarts School of Witchcraft.",
            "price" => 114500.00,
            "stock" => 300,
            "cover_photo" => "https://example.com/covers/harry-potter-1.jpg"
        ],
        [
            "id" => 8,
            "title" => "The Hobbit",
            "description" => "A fantasy journey following Bilbo Baggins as he embarks on a quest with dwarves and a wizard.",
            "price" => 142500.25,
            "stock" => 150,
            "cover_photo" => "https://example.com/covers/the-hobbit.jpg"
        ],
        [
            "id" => 9,
            "title" => "War and Peace",
            "description" => "A sweeping novel of history, war, and peace during Napoleonic-era Russia.",
            "price" => 229999.99,
            "stock" => 40,
            "cover_photo" => "https://example.com/covers/war-and-peace.jpg"
        ],
        [
            "id" => 10,
            "title" => "The Alchemist",
            "description" => "A philosophical novel about a shepherd’s quest to fulfill his dreams.",
            "price" => 97500.00,
            "stock" => 110,
            "cover_photo" => "https://example.com/covers/the-alchemist.jpg"
        ]
    ];
    

        public function getAllBooks(){
            return $this->books;
        }
}

?>