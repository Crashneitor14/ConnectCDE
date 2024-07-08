<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Faker\Guesser\Name;
use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{
    public function store(Request $request){


        //ver validaciones
        $request->validate([
            'name' =>['required','string','max:255'],
            'email' =>['required','string','email','max:255','unique:users'],
            'password'=>['required','confirmed',]

        ]);



    }
}
