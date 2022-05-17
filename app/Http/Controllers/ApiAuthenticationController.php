<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use JWTAuth;

class ApiAuthenticationController extends Controller
{
    public function login()
    {
        $user = User::where('email', request('email'))->first();
        $credentials = ['email' => $user->email, 'password' => request('password')];
        if (!$token = JWTAuth::attempt($credentials)) {
            $status = 'ERR';
            $message = 'Password yang anda masukkan tidak valid';
            return response()->json(compact('status', 'message'), 401);
        } else {
            $status = 'OK';
            $message = 'Berhasil login';
            return response()->json(compact('status', 'message', 'user', 'token'), 200);
        }
    }
}
