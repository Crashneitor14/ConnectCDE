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

        //enviar consulta al correo especifico (ver conflicto entre correos de CEE estudiantes y CEE unico)
        //Mail::send();




        $newConsult -> save();
        return to_route('cons.create')->with('status','la consulta ha sido creada!');

    }
    public function update(Consult $consult){ //almacenar los cambios del post a la base de datos

        $consult->update(); //filtra los datos aqui mismo

        //return to_route('cons.index',$consult)->with('status','la consulta ha sido actualizada!');
        dd($consult -> all());
    }

    public function destroy(Consult $consult){
        $consult->delete();
        return to_route('cons.index')->with('status','La consulta ha sido eliminada!');
    }


}
