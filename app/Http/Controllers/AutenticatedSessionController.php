<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AutenticatedSessionController extends Controller
{
    public function store(Request $request)
    {

        //validaciones de usuario
        $credentials = $request->validate([
            'email' => ['required','string','email'],
            'password' => ['required','string'],
        ]);
        //asegura que la sesion siga
        if( ! Auth::attempt($credentials, $request->boolean('remember'))){

            throw ValidationException::withMessages([
                //mensaje en caso de error de login
                'email' => __('auth.failed')
            ]);

        }
        //crea la sesion del usuario
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
