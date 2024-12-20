<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller{
    public function index(){
        $movie = new Movie;
        $movies = $movie->getAllMovies();

        return response()->json($movies);
    }
};

?>