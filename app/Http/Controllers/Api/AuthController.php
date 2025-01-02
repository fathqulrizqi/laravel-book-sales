<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request){
        // Setup validator
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:users',
            'password' => 'required|string|max:8'
        ]);

        // Check Validator
        if ($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        // Create user 
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        // Return response json useris created 
        if ($user){
            return response()->json([
                'success' => true,
                'message' => 'User created succesfully',
            ], 201);
        }

        // Return response if process failed
        return response()->json([
            'success' => false,
            'message' => 'User creation failed'
        ], 409);

    }


    public function login(Request $request){
        // setup validator
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string'
        ]);
    //    check validator
        if ($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        // get credentials from request
        $credentials = $request->only('email', 'password');

        if(!$token = auth()->guard('api')->attempt($credentials)){
            return response()->json([
                'success' => false,
                'message' => 'Email atau Password Anda Salah!'
            ], 401);
        }

        return response()->json([
            'success' => true,
            'message' => 'Login Succesfullly',
            'data' => [
                'success' => true,
                'user' => auth()->guard('api')->user(),
                'token' => $token
            ]
            ], 200);
    }
    
}
