<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index(){
        $genres = Genre::all();
        // $books = DB::select('SELECT * FROM books'); 

        return response()->json($genres);
    }
}
