<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use Illuminate\Http\Request;

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
        $newVote ->total = $request->total;


        dd($request -> all());


    }



}
