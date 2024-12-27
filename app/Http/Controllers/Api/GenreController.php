<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GenreController extends Controller
{
    public function index(){
        $genres = Genre::all();
        // $books = DB::select('SELECT * FROM books'); 

        if($genres->isEmpty()){
            return response()->json([
                "status" => true,
                "message" => "Resource data not found!",
            ], 200); //response gagal
        }

        return response()->json([
            "status" => true,
            "message" => "Get All Resource",
            "data" => $genres
        ], 200); //response berhasil
    }

        public function store(Request $request)
        {
            Validator::make($request->all(),[
                "name" => "required string",
                "description" => "required string"
            ]);
        }
}
