<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller{
    public function index(){
        $movie = new Movie; //object
        $movies = $movie->getAllMovies(); //akses method dari objek movie

        return response()->json($movies);
    }
};

?>