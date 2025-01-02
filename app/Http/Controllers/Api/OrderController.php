<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrderResource;
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
            "book_id" => "required|exist:books,id",
            "quantity" => "required|integer|min:1"
        ]);

        // cek validator
        if($validator->fails()){
            return response()->json([
                "success" => false,
                "message" => $validator->errors()
            ], 422); // validasi create error
        }

        // buat order number unik
        $order_number = uniqid();


        // insert data
        $order = Order::create([
            "order_number" => '',
            "customer_id" => '',
            "book_id" => $request->book_id,
            "total_amount" => '',
            "status" => ''
        ]);

        // return response 
    }
}
