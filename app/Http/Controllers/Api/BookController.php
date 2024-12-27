<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    public function index(){ 
        $books = Book::all();

        if($books->isEmpty()){
            return response()->json([
                "status" => true,
                "message" => "Resource data not found!",
            ], 200); //validasi read gagal
        }

        return response()->json([
            "status" => true,
            "message" => "Get All Resource",
            "data" => $books
        ], 200); //validasi read berhasil
}

public function store(Request $request)
    {
        // tipe data
        $validator = Validator::make($request->all(),[
            "title" => "required|string|max: 255",
            "description" => "required|string",
            "price" => "required|numeric",
            "stock" => "required|integer",
            "cover_photo" => "required|image|mimes:jpeg, jpg, png, svg, heic|max:2048",
            "genre_id" => "required|exists:genres,id",
            "author_id" => "required|exists:authors,id"
        ]);

        // validasi error
        if($validator->fails()){
            return response()->json([
                "success" => false,
                "message" => $validator->errors()
            ], 422); 
        };

        //upload image
        $image = $request->file('cover_photo');
        $image->store('books', 'public');

        // insert data
        $book = Book::create([
            "title" => $request->title,
            "description" => $request->description,
            "price" => $request->price,
            "stock" => $request->stock,
            "cover_photo" => $image->hashName(),
            "genre_id" => $request->genre_id,
            "author_id" => $request->author_id
        ]);

        return response()->json([
            "success" => true,
            "message" => "Resource added succesfully",
            "data" => $book
        ], 201); // validasi create success
    }

    public function show(string $id){
        $book = Book::find($id);

        return response()->json([
            "success" => true,
            "message" => "Get detail resource",
            "data" => $book
        ], 200); // validasi create success
    }
}