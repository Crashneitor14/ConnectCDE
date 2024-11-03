<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$activities = Activity::get();
        //return view('activity.index', ['activities' => $activities]);
    }

    public function create(){ // devolver el formulario para crear post
        return view('activity.create',['activity' => new Activity()]);

    }


}
