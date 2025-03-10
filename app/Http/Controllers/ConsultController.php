<?php

namespace App\Http\Controllers;

use App\Models\Consult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
    public function create(){
        return view('consults.create');

    }
    public function store(Request $request)
    {
        $newConsult = new Consult();
        $validar = $request->validate([
            'name' =>['required','min:6'],
            'status' =>['required'],
            'message'   =>['required','min:6'],
        ]);

        $newConsult -> name = $request->name;
        $newConsult -> status = $request->status;
        $newConsult -> message = $request->message;

        //sacar info de usuario que subio
        //$correo_user = Auth::user()->email;
        if (Auth::check() && Auth::user()->email) {
            $newConsult->Correo_est = Auth::user()->email;
        } else {
            $newConsult->Correo_est = 'Correo del Estudiante';
        }

        $newConsult -> save($validar);
        return to_route('cons.create')->with('status','La consulta ha sido creada!');

    }
    public function update(Consult $consult,Request $request){ //almacenar  a la base de datos
        //alternativa en caso de falla de request.php
        $validar = $request->validate([
            'name' =>['required'],
            'status' =>['required'],
            'message'   =>['required'],
        ]);
        $consult->update($validar);

        return to_route('cons.index',$consult)->with('status','Consulta actualizada!');

    }

    public function destroy(Consult $consult){
        $consult->delete();
        return to_route('cons.index')->with('status','Consulta eliminada!');
    }


}
