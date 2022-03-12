<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;


class AuthController extends Controller
{
    public function login(Request $request)
    {
        // ambil credential
        $credential = $request->all();

        $user = User::where('email', $request->email)->first();

        $customClaim['username'] = $user->name;
        $token = JWTAuth::claims($customClaim)->attempt($credential);

        if(!$token) {
            return response()->json(['message'=>"Unauthorized"], 401);
        }

        return $this->responseWithToken($token);
    
        // return token
    }

    public function logout()
    {
        // menghapus jwt
        auth()->logout();
        return response()->json(['message'=>'successfully logout']);
    }

    public function profile()
    {
        // lihat user
        $token = JWTAuth::parseToken();
        return response()->json(JWTAuth::getPayload($token));
    }

    private function responseWithToken($token)
    {
        return response()->json([
            'access_token'=>$token,
            'token_type'=>'bearer',
            'expires_in'=>JWTAuth::factory()->getTTL()*60
        ]);

    }
}
