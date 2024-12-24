<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Fiction',
            'description' => 'A literary genre that involves narrative works created from the imagination, not based strictly on real events. It includes various subgenres such as historical fiction, mystery, andfantasy.'
        ]);
        Genre::create([
            'name' => 'Classic',
            'description' => 'Works that are considered to have lasting artistic value and have stood the test of time. These books often tackle universal themes and showcase exceptional literary qualities.'
        ]);
        Genre::create([
            'name' => 'Historical Fiction',
            'description' => 'A genre that combines fictional stories with real historical events or periods, allowing readers to experience history through the eyes of the characters.'
        ]);
        Genre::create([
            'name' => 'Drama',
            'description' => 'A genre that presents stories through dialogue and action, often in the form of a play or screenplay. It focuses on emotional and social conflicts.'
        ]);
        Genre::create([
            'name' => 'Dystopian',
            'description' => 'A genre that explores imagined societies characterized by oppression, environmental ruin, or other negative conditions. These societies often contrast with utopias, which]are idealized worlds.'
        ]);
    }
}
