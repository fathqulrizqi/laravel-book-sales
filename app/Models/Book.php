<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $books = [
        [
            "id" => 1,
            "title" => "To Kill a Mockingbird",
            "description" => "A classic novel about racial injustice and moral growth in the Deep South.",
            "price" => 150000.50,
            "stock" => 120,
            "cover_photo" => "https://cdn.britannica.com/21/182021-050-666DB6B1/book-cover-To-Kill-a-Mockingbird-many-1961.jpg",
            "genre_id" => 2 // Classic
        ],
        [
            "id" => 2,
            "title" => "1984",
            "description" => "A dystopian tale of a totalitarian regime and the struggle for individuality.",
            "price" => 124500.00,
            "stock" => 85,
            "cover_photo" => "https://images.booksense.com/images/935/524/9780451524935.jpg",
            "genre_id" => 5 // Dystopian
        ],
        [
            "id" => 3,
            "title" => "Pride and Prejudice",
            "description" => "A romantic novel about love, class, and societal expectations in 19th-century England.",
            "price" => 109900.75,
            "stock" => 200,
            "cover_photo" => "https://m.media-amazon.com/images/I/712P0p5cXIL._AC_UF1000,1000_QL80_.jpg",
            "genre_id" => 6 // Romance
        ],
        [
            "id" => 4,
            "title" => "The Great Gatsby",
            "description" => "A story of wealth, ambition, and love in the Jazz Age of 1920s America.",
            "price" => 149900.99,
            "stock" => 90,
            "cover_photo" => "https://assets-a1.kompasiana.com/items/album/2023/08/03/the-great-gatsby-64cb9a054addee3e891561e2.jpg?t=o&v=1200",
            "genre_id" => 2 // Classic
        ],
        [
            "id" => 5,
            "title" => "The Catcher in the Rye",
            "description" => "A coming-of-age story about teenage rebellion and disillusionment.",
            "price" => 134500.50,
            "stock" => 75,
            "cover_photo" => "https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1398034300i/5107.jpg",
            "genre_id" => 4 // Drama
        ],
        [
            "id" => 6,
            "title" => "Moby-Dick",
            "description" => "An epic tale of obsession and revenge set on the high seas.",
            "price" => 189999.99,
            "stock" => 50,
            "cover_photo" => "https://m.media-amazon.com/images/I/51aV053NRjL._AC_UF1000,1000_QL80_.jpg",
            "genre_id" => 10 // Adventure
        ],
        [
            "id" => 7,
            "title" => "Harry Potter and the Sorcerer’s Stone",
            "description" => "The first adventure in the magical world of Harry Potter and Hogwarts School of Witchcraft.",
            "price" => 114500.00,
            "stock" => 300,
            "cover_photo" => "https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1598823299i/42844155.jpg",
            "genre_id" => 7 // Fantasy
        ],
        [
            "id" => 8,
            "title" => "The Hobbit",
            "description" => "A fantasy journey following Bilbo Baggins as he embarks on a quest with dwarves and a wizard.",
            "price" => 142500.25,
            "stock" => 150,
            "cover_photo" => "https://awsimages.detik.net.id/community/media/visual/2024/01/26/novel-grafis-the-hobbit.jpeg?w=700&q=90",
            "genre_id" => 7 // Fantasy
        ],
        [
            "id" => 9,
            "title" => "War and Peace",
            "description" => "A sweeping novel of history, war, and peace during Napoleonic-era Russia.",
            "price" => 229999.99,
            "stock" => 40,
            "cover_photo" => "https://m.media-amazon.com/images/I/81oHM-dzefL._AC_UF1000,1000_QL80_.jpg",
            "genre_id" => 3 // Historical Fiction
        ],
        [
            "id" => 10,
            "title" => "The Alchemist",
            "description" => "A philosophical novel about a shepherd’s quest to fulfill his dreams.",
            "price" => 97500.00,
            "stock" => 110,
            "cover_photo" => "https://ebooks.gramedia.com/ebook-covers/29408/big_covers/ID_HCO2015MTH12TALC.jpeg",
            "genre_id" => 1 // Fiction
        ]
    ];

    public function getAllBooks()
    {
        return $this->books;
    }
}
?>