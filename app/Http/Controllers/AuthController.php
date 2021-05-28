<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function indexLogin()
    {
        return view('login');
    }

    public function indexRegistration()
    {
        return view('signin');
    }

    public function register(Request $request) {
        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed'
        ]);

        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password'])
        ]);

        $response = [
            'user' => $user
        ];
        $request->session()->put('userId', $user->id);
        return response(view('contacts'));
    }

    public function login(Request $request) {
        $fields = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        // Check email
        $user = User::where('email', $fields['email'])->first();

        // Check password
        if(!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'message' => 'Incorrect password'
            ], 401);
        }

        $response = [
            'user' => $user
        ];
        $request->session()->put(['userId', $user->id]);
        return response(view('contacts'));
    }

    public function logout(Request $request) {
        $request->session()->flush();
        return [
            'message' => 'Logged out'
        ];
    }
}
