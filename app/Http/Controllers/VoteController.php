<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VoteController extends Controller
{
    public function index()
    {
        $vote = Vote::get();
        return view('votacion.index', ['vote' => $vote]);
    }
    public function create(){ // devolver el formulario para crear post
        return view('votacion.create',['vote' => new Vote()]);

    }
    public function store(Request $request){
        $newVote = new Vote();
        $newVote ->name = $request->name;
        $newVote ->detalle = $request->detalle;
        $newVote ->total = $request->total;
        $newVote ->observation = $request->observation;

        //sacar info de usuario que subio
        $usuario = Auth::user();
        $newVote->user_charge = $usuario->name;
        $newVote->carrera_user = $usuario->carrera;


        //dd($request -> all());
        $newVote ->save();
        return to_route('vot.index')->with('status','Se ha creado el registro de votacion!');

    }
    public function edit(Vote $vote){ // formulario de editar el post
        //dd($vote -> all());
        return view('votacion.edit', ['vote' => $vote]);

    }
    public function destroy(Vote $vote){ //destruir el post en la base de datos

        $vote->delete();


        return to_route('vot.index')->with('status','El registro ha sido eliminado!');
    }


}
