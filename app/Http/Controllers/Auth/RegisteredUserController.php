<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Validation\Rules;
use Faker\Guesser\Name;
use App\Models\User;
use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{
    public function store(Request $request){


        //ver validaciones
        $request->validate([
            'name' =>['required','string','max:255'],
            'email' =>['required','string','email','max:255','unique:users'],
            'password'=>['required','confirmed', Rules\Password::defaults()],
        ]);

        //Creacion de Usuario
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);


    }
}
