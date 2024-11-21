<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use App\Http\Requests\SavePostRequest;
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
    public function store(SavePostRequest $request){

        //return $request -> all();


    }



}
