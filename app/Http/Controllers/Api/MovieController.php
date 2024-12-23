<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    // PHP native, query builder, eloquent ORM
    public function index(){ //index untuk kirim semua data // PHP native 
        // $movies = DB::select('SELECT * FROM movies'); //property, variable

        $movies = Movie::all();
        return response()->json($movies);
        
    }
}
