<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function update(Request $request){
        $fields = $request->validate([
            'id' => 'required',
            'name' => 'string',
            'email' => 'string',
            'password' => 'required|string',
            'flag_email' => 'string',
        ]);

        $user = User::where('id', $fields['id'])->first();
        // Check password
        if (!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'message' => 'Bad creds'
            ], 401);
        }

        //Change email
        if($fields['flag_email'] == '1') {
            $user = User::where('email', $fields['email'])->first();
            //Check email
            if ($user !== null) {
                return response([
                    'message' => 'email was exists'
                ], 401);
            }
            else{
                User::where(['id' => $fields['id']])->update([
                    'email' => $fields['email'],
                ]);
            }
        }

        User::where(['id' => $fields['id']])->update([
            'name' => $fields['name'],
        ]);

        $user = User::where(['id' => $fields['id']])->first();

        $response = [
            'user' => $user,
        ];

        return response($response, 201);
    }

    public function resetPassword(Request $request){
        $fields = $request->validate([
            'id' => 'required',
            'password' => 'required|string',
            'new_password' => 'required|string|confirmed'
        ]);

        $user = User::where('id', $fields['id'])->first();
        // Check password
        if (!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'message' => 'Bad creds'
            ], 401);
        }

        User::where(['id' => $fields['id']])->update([
            'password' => bcrypt($fields['new_password']),
        ]);

        $user = User::where(['id' => $fields['id']])->first();

        $response = [
            'user' => $user,
            'message' => 'Password changed!'
        ];

        return response($response, 201);
    }
}
