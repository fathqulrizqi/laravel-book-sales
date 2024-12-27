<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GenreController extends Controller
{
    public function index(){

        // read genre
        $genres = Genre::all();

        if($genres->isEmpty()){
            return response()->json([
                "status" => true,
                "message" => "Resource data not found!",
            ], 200); //validasi read gagal
        }

        return response()->json([
            "status" => true,
            "message" => "Get All Resource",
            "data" => $genres
        ], 200); //validasi read berhasil
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            "name" => "required|string",
            "description" => "required|string"
        ]);

        if($validator->fails()){
            return response()->json([
                "success" => false,
                "message" => $validator->errors()
            ], 422); // validasi create error
        }

        // create genre
        $genre = Genre::create([
            "name" => $request->name,
            "description" => $request->description
        ]);

        return response()->json([
            "success" => true,
            "message" => "Resource added succesfully",
            "data" => $genre
        ], 201); // validasi create success
    }
}
