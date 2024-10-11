<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends BaseController
{
    public function registrasi(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'nama' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:3',
            ]);

            // $cek = User::where(['email' => $validated['email']])->first();

            // if ($cek) return $this->sendResponse(500, false, 'User dengan email yang sama sudah ada.');

            User::create($validated);

            return $this->sendResponse(201, true, 'Registrasi berhasil!');
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }


    public function login(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'email' => 'required|email|exists:users',
                'password' => 'required',
            ]);

            if (!Auth::attempt($validated)) {
                return $this->sendResponse(401, false, 'Invalid credentials');
            }

            $user = User::where('email', $request->email)->firstOrFail();
            $token = $user->createToken('auth_token')->plainTextToken;

            session(['user_id' => $user->id]);
            session(['last_activity' => now()]);

            $data = [
                'token' => $token,
                'user' => [
                    'id' => $user->id,
                    'email' => $user->email,
                ]
            ];

            return $this->sendResponse(200, true, $data);
        } catch (\Exception $e) {
            return $this->sendResponse(500, false, $e->getMessage());
        }
    }
}
