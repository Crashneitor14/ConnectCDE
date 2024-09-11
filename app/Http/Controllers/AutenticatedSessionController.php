<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AutenticatedSessionController extends Controller
{
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required','string','email'],
            'password' => ['required','string'],
        ]);
        //verifica si existe el usuario
        if( ! Auth::attempt($credentials, $request->boolean('remember'))){
            throw ValidationException::withMessages([
                'email' => __('auth.failed')
            ]);
        }

        $request-> session()-> regenerate();

        return redirect()->intended()->with('status','Bienvenido a ConnectCDE');

    }
    public function destroy(Request $request){

        Auth::logout();

        $request-> session()-> invalidate();
        $request-> session()-> regenerateToken();

        return to_route('menu')->with('status','Cerraste sesion con exito');

    }

}
