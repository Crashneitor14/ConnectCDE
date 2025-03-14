<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveVoteRequest;
use App\Models\Vote;
use Illuminate\Http\JsonResponse;
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
    public function showApi(Vote $vote){   //mostrar el detalle de un post
        return response()->json($vote);
    }

    public function showApiall(): JsonResponse
    {
        $votos = Vote::all();
        return response()->json($votos);
    }


    public function store(SaveVoteRequest $request){
        $newVote = new Vote();
        $newVote ->name = $request->name;
        $newVote ->detalle = $request->detalle;
        $newVote ->total = $request->total;
        $newVote ->observation = $request->observation;
        //imagen
        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $destinationPath = 'images/votacion/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('imagen')->move($destinationPath,$filename);
            $newVote->imagen = $destinationPath . $filename;
        };

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
    public function update(SaveVoteRequest $request, Vote $vote){ //almacenar los cambios del post a la base de datos

        $vote->update($request->validated()); //filtra los datos aqui mismo

        return to_route('vot.index',$vote)->with('status','El registro ha sido actualizado!');

    }
    public function destroy(Vote $vote){ //destruir el post en la base de datos
        $verVote = Vote::count();

        if ($verVote <= 1) {
            return to_route('vot.index')->with('status','No se puede eliminar el unico registro de votacion');

        }else{
            $imagendelete = $vote->imagen;
            $vote->delete();
            if ($imagendelete && file_exists(public_path($imagendelete))) {
                unlink(public_path($imagendelete));
        }
        }
        return to_route('vot.index')->with('status','El registro ha sido eliminado!');
    }


}
