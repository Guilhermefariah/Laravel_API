<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::attempt(["email" => $request->email, "password" => $request->password])) {

            $user = Auth::user();

            $token = $request->user()->createToken("api-token")->plainTextToken;

            return response()->json([
                "status" => true,
                "token" => $token,
                "user" => $user
            ], 200);

        } else {
            return response()->json([
                "status" => false,
                "message" => "Usuário ou senha inválidos"
            ], 401);
        }
    }
}
