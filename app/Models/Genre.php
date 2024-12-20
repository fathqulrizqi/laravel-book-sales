<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Genre extends Model{
    protected $genres = [
        [
            "id" => 1,
            "name" => "Fiction",
            "description" => "A literary genre that involves narrative works created from the imagination, not based strictly on real events. It includes various subgenres such as historical fiction, mystery, and]fantasy."
        ],
        [
            "id" => 2,
            "name" => "Classic",
            "description" => "Works that are considered to have lasting artistic value and have stood the test of time. These books often tackle universal themes and showcase exceptional literary qualities."
        ],
        [
            "id" => 3,
            "name" => "Historical Fiction",
            "description" => "A genre that combines fictional stories with real historical events or periods, allowing readers to experience history through the eyes of the characters."
        ],
        [
            "id" => 4,
            "name" => "Drama",
            "description" => "A genre that presents stories through dialogue and action, often in the form of a play or screenplay. It focuses on emotional and social conflicts."
        ],
        [
            "id" => 5,
            "name" => "Dystopian",
            "description" => "A genre that explores imagined societies characterized by oppression, environmental ruin, or other negative conditions. These societies often contrast with utopias, which]are idealized worlds."
        ],
        [
            "id" => 6,
            "name" => "Romance",
            "description" => "A genre focused on the theme of love, usually between two characters who must overcome obstacles to be together. Romantic novels often emphasize emotions and relationships."
        ],
        [
            "id" => 7,
            "name" => "Fantasy",
            "description" => "A genre that involves magical elements, mythical creatures, and supernatural events. The setting is often in an entirely fictional world or universe."
        ],
        [
            "id" => 8,
            "name" => "Science Fiction",
            "description" => "A genre that explores speculative and futuristic concepts, often involving advanced technology, space exploration, time travel, or extraterrestrial life."
        ],
        [
            "id" => 9,
            "name" => "Thriller",
            "description" => "A genre designed to evoke excitement and suspense. Thrillers often involve high-stakes situations, crime, danger, and fast-paced action."
        ],
        [
            "id" => 10,
            "name" => "Adventure",
            "description" => "A genre that centers around a protagonist’s journey or quest, often involving physical danger, exploration, and the discovery of new places or ideas."
        ]
    ];

        public function getAllGenres(){
            return $this->genres;
        }
}

?>

