<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller{
    public function index(){
        $genre = new Genre;
        $genres = $genre->getAllGenres();

        return response()->json($genres);
    }
};

?>