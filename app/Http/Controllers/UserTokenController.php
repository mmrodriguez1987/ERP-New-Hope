<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\ValidationException;

class UserTokenController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'device_name' => 'required'
        ]);

        $user = User::where('email', $request->get('email'))->first();

        if (!$user || !Hash::check($request->password, $user->password) {
            // throw  ValidationException::withMessages([
            //     'email' => 'El Email no existe o no conicide con nuestra base de datos']
            // );
        }
        return response()->json([
            'token' =>$user->createToken($request->device_name)->plainTextToken
        ]);
    }
}
