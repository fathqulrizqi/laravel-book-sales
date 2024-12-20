<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Movie extends Model{
    protected $movies = [
        [
            "id" => 1,
            "title" => "Guardians of The Galaxy",
            "genre" => "Action, Adventure, Sci-Fi",
            "release_year" => 2014,
            "country" => "USA"
        ],
        [
            "id" => 2,
            "title" => "La La Land",
            "genre" => "Musical, Romance",
            "release_year" => 2016,
            "country" => "USA"
        ],
        [
            "id" => 3,
            "title" => "Get Out",
            "genre" => "Horror, Thriller",
            "release_year" => 2017,
            "country" => "USA"
        ],
        [
            "id" => 4,
            "title" => "Avengers: Infinity War",
            "genre" => "Action, Adventure, Sci-Fi",
            "release_year" => 2018,
            "country" => "USA"
        ],
        [
            "id" => 5,
            "title" => "Parasite",
            "genre" => "Drama, Thriller",
            "release_year" => 2019,
            "country" => "South Korea"
        ],
        [
            "id" => 6,
            "title" => "Joker",
            "genre" => "Drama, Thriller",
            "release_year" => 2019,
            "country" => "USA"
        ], 
        [
            "id" => 7,
            "title" => "The Revenant",
            "genre" => "Adventure, Drama",
            "release_year" => 2018,
            "country" => "USA"
        ],
        [
            "id" => 8,
            "title" => "Annabelle",
            "genre" => "Horror, Thriller",
            "release_year" => 2014,
            "country" => "USA"
        ],
        [
            "id" => 9,
            "title" => "Spiderman: No Way Home",
            "genre" => "Action, Adventure, Sci-Fi",
            "release_year" => 2021,
            "country" => "USA"
        ],
        [
            "id" => 10,
            "title" => "Dune",
            "genre" => "Adventure, Sci-Fi",
            "release_year" => 2021,
            "country" => "Canada"
        ]
        ];

        public function getAllMovies(){
            return $this->movies;
        }
}

?>