<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Validation\Rules;
use Faker\Guesser\Name;
use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{
    public function store(Request $request){


        //Ver Validaciones
        $request->validate([
            'name' =>['required','string','max:255'],
            'email' =>['required','string','email','max:255','unique:users'],
            'carrera'   =>['required'],
            'password'=>['required','confirmed', Rules\Password::defaults()],
        ]);

        //crea al usuario
        User::create([
            'name' =>  $request->name,
            'email' => $request->email,
            'carrera'=>$request->carrera,
            'password'=> bcrypt($request->password),
        ]);

        return to_route('menu')->with('status', 'Usuario Registrado');




    }
}
