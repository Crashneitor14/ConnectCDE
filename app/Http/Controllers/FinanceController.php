<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function show(Activity $activities){   //mostrar el detalle de un post
        //dd($activities -> all());
        return view('activity.show',['activity' => $activities]);
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
        $newActivity ->status = $request->status;
        //$newActivity ->
        //sacar info de usuario que subio
        $usuario = Auth::user();
        $newActivity->user_charge = $usuario->name;
        $newActivity->carrera_user = $usuario->carrera;

        $newActivity ->save();
        return to_route('act.index')->with('status','la actividad se ha creado!');

        //dd($request -> all()); ver lo que imprime el formulario


    }
    public function destroy(Activity $activities){

        $activities->delete();

        return to_route('act.index')->with('status','La actividad se ha eliminado!');

    }


}
