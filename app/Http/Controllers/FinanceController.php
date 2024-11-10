<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Activity;
use Illuminate\Http\Request;

class FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities = Activity::get();
        return view('activity.index', ['activities' => $activities]);
    }

    public function create(){ // devolver el formulario para crear post
        return view('activity.create',['activity' => new Activity()]);

    }
    public function store(Request $request){
        $newActivity = new Activity();
        $newActivity ->name = $request->name;
        $newActivity ->observation = $request->observation;
        $newActivity ->date_start = $request->date_start;
        $newActivity ->date_end = $request->date_end;
        $newActivity ->status;
        //$newActivity ->
        $newActivity ->save();
        return to_route('act.index')->with('status','la actividad se ha creado!');

        //dd($request -> all()); ver lo que imprime el formulario


    }
    public function destroy(Activity $activities){

        dd($activities -> all());

        return to_route('act.index')->with('status','la actividad se ha eliminado!');

    }


}
