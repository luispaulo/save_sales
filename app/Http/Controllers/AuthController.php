<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
   /**
    * Register new user
    */
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|user|unique:users, email',
            'password' => 'required|string|confirmed'
         ]);

         $user =  User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
         ]);

         $token = $user->createToken('primeiroToken')->plainTextToken;

         $response = [
            'user' => $user,
            'token' => $token,

         ];

         return response($response, 201);
    }

   /**
    * Login  user
    */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
         ]);

         $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response([
                'message' => 'Credenciais Invalidas'
            ], 401);
        }

        $token = $user->createToken('JWT')->plainTextToken;

         $response = [
            'user' => $user,
            'token' => $token
         ];

         return response($response, 201);
    }

    /**
    * Logout  user
    */
    public function logout(Request $request)
    {

        auth()->user()->tokens()->delete();

        return [
                'message' => 'Logout efetuado com sucesso e exclusao dos tokens.'
            ];
    }


}
