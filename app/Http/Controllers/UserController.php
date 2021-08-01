<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Schema;

class UserController extends Controller
{

    public function register(Request $request) {

        $this->validator($request->all())->validate();
        $user = $this->create($request->all());
        $this->guard()->login($user);
        return response()->json([
            'user'  => $user,
            'message' => trans('auth.registration_successfully')
        ], 200);
    }


    protected function validator(array $data){

        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
        ]);
    }


    protected function create(array $data){

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    protected function guard(){
        return Auth::guard();
    }

    public function login(Request $request) {
        //chech if the user exist
        if (!Schema::hasTable('users')) {
            return response()->json([
                'message' => 'La entidad de datos aun no ha sido creada',
                'status' => 422
            ], 200);
        }

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json([
                'message' => 'El usuario solicitado no existe',
                'status' => 422               
            ], 422);
        } else {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                return response()->json([
                    'name' => Auth::User()->name,
                    'id' => Auth::User()->id,
                    'email' => Auth::User()->email,
                    'message' => trans('auth.login_successfully')
                ], 200);
            } else {
               return response()->json([
                    'message' => 'Credenciales de accesso no coinciden',
                    'status' => 401   
                ], 401);
            }
        }
    }

    

    public function logout()
    {
        Auth::logout();
        return response()->json(['message' => trans('auth.logout')], 200);
    }
}
