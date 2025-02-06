<?php

namespace App\Http\Controllers;

use App\Models\Consult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConsultController extends Controller
{
    public function index()
    {
        return view('consults.index');
    }
    public function create(){ // devolver el formulario para crear post
        return view('consults.create'
        //,['vote' => new Vote()]
        );

    }
    public function store(Request $request)
    {
        $newConsult = new Consult();
        $newConsult -> name = $request->name;
        $newConsult -> status = $request->status;
        $newConsult -> message = $request->message;

        //sacar info de usuario que subio
        $usuario = Auth::user();
        $newConsult->user_charge = $usuario->email;

        dd($request -> all());




    }

}
