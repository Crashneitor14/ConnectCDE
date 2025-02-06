<?php

namespace App\Http\Controllers;

use App\Models\Consult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConsultController extends Controller
{
    public function index()
    {
        $consult = Consult::get();
        return view('consults.index', ['consult' => $consult]);
    }
    public function edit(Consult $consult)
    {
        return view('consults.edit',['consult' => $consult]);
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
        $newConsult->Correo_est = $usuario->email;

        $newConsult -> save();
        return to_route('cons.create')->with('status','la consulta ha sido creada!');

    }
    public function destroy(Consult $consult){
        $consult->delete();
        return to_route('cons.index')->with('status','La consulta ha sido eliminada!');
    }


}
