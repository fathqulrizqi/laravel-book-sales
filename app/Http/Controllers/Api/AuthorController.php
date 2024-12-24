<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(){
        $authors = Author::all();
        // $books = DB::select('SELECT * FROM books'); 

        return response()->json($authors);
    }
}
