<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthorController extends Controller
{
    public function index(){
        $authors = Author::all();

        return response()->json($authors);
        // if($authors->isEmpty()){
        //     return response()->json([
        //         "status" => true,
        //         "message" => "Resource data not found!",
        //     ], 200); //validasi read gagal
        // }

        // return response()->json([
        //     "status" => true,
        //     "message" => "Get All Resource",
        //     "data" => $authors
        // ], 200); //validasi read berhasil
    }
    
    public function store(Request $request)
    {
        // tipe data
        $validator = Validator::make($request->all(),[
            "name" => "required|string|max: 255",
            "photo" => "required|image|mimes:jpeg, jpg, png, svg, heic|max:2048",
            "bio" => "nullable|string"
        ]);

        // validasi error
        if($validator->fails()){
            return response()->json([
                "success" => false,
                "message" => $validator->errors()
            ], 422); 
        };

        //upload image
        $image = $request->file('photo');
        $image->store('authors', 'public');

        // insert data
        $author = Author::create([
            "name" => $request->name,
            "photo" => $image->hashName(),
            "bio" => $request->bio
        ]);

        return response()->json([
            "success" => true,
            "message" => "Resource added succesfully",
            "data" => $author
        ], 201); // validasi create success
    }
}