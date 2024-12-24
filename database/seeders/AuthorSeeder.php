<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'name' => 'Harper Lee',
            'photo' => 'https://upload.wikimedia.org/wikipedia/commons/8/89/Harper_Lee.jpg',
            'bio' => "Harper Lee was an American novelist best known for her 1960 novel 'To Kill a Mockingbird', a classic of modern American literature."
        ]);
        Author::create([
            'name' => 'George Orwell',
            'photo' => 'https://upload.wikimedia.org/wikipedia/commons/c/c3/George_Orwell_press_photo.jpg',
            'bio' => "George Orwell was an English novelist, essayist, and critic, famous for his novels '1984' and 'Animal Farm', exploring themes of oppression and dystopia."
        ]);
        Author::create([
            'name' => 'Jane Austen',
            'photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c5/Jane_Austen_coloured_version.jpg/800px-Jane_Austen_coloured_version.jpg',
            'bio' => "Jane Austen was an English novelist known for her witty and romantic stories that depict English society, including her renowned work 'Pride and Prejudice'."
        ]);
        Author::create([
            'name' => 'F. Scott Fitzgerald',
            'photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/47/F_Scott_Fitzgerald_1921.jpg/800px-F_Scott_Fitzgerald_1921.jpg',
            'bio' => "F. Scott Fitzgerald was an American novelist, widely regarded as one of the greatest writers of the 20th century, best known for 'The Great Gatsby'."
        ]);
        Author::create([
            'name' => 'J.D. Salinger',
            'photo' => 'https://upload.wikimedia.org/wikipedia/commons/9/94/JD_Salinger.jpg',
            'bio' => "J.D. Salinger was an American writer famous for his novel 'The Catcher in the Rye', a story about teenage rebellion and self-discovery."
        ]);
    }
}
