<?php

namespace App\Http\Controllers;

use App\Models\Cee;
use Illuminate\Http\Request;


class CeeController extends Controller
{
    public function index()
    {
        $cee = Cee::get();
        return view('contacto', ['cees' => $cee]);
    }

}
