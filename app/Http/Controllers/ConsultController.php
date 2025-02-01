<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

}
