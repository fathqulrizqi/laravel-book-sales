<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResource;
use App\Models\Book;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::all();
        return new OrderResource(true, "Get All Resource", $orders);
    }

    public function store(Request $request){
        // validator 
        $validator = Validator::make($request->all(), [
            "book_id" => "required|exists:books,id",
            "quantity" => "required|integer|min:1"
        ]);

        // cek validator
        if($validator->fails()){
            return response()->json([
                "success" => false,
                "message" => $validator->errors()
            ], 422); // validasi create error
        }

        // ambil data user yang sedang login
        $user = auth('api')->user();

        // cek login user
        if(!$user){
            return response()->json([
                'status'=> false,
                'message' => "Silahkan login terlebih dahulu"
            ], 401);
        }

        // ambil satu data buku 
        $book = Book::find($request->book_id);

        // cek stok barang
        if($book->stock < $request->quantity) {
            return response()->json([
                "status" => false,
                "message" => "stok barang tidak cukup"
            ], 400);
        }

        // buat order number unik
        $order_number = "ORD-" . strtoupper(uniqid());

        // hitung total harga 
        $totalAmount = $book->price * $request->quantity;

        // kurangi buku 
        $book->stock -= $request->quantity;
        $book->save();

        // insert data
        $order = Order::create([
            "order_number" => $order_number,
            "customer_id" => $user->id,
            "book_id" => $request->book_id,
            "total_amount" => $totalAmount,
            "status" => 'pending'
        ]);

        // return response 
        return new OrderResource(true, 'Order Created Successfully', $order);
    }
}
