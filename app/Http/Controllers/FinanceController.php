<?php

namespace App\Http\Controllers;
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
        //imagen rendicion
        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $destinationPath = 'images/rendiciones/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('imagen')->move($destinationPath,$filename);
            $newActivity->imagen = $destinationPath . $filename;
        };
        //rendiciones
        $newActivity ->name_rend = $request->name_rend;
        $newActivity ->tipo_rend = $request->tipo_rend;
        $newActivity ->monto = $request->monto;

        //sacar info de usuario que subio
        $usuario = Auth::user();
        $newActivity->user_charge = $usuario->name;
        $newActivity->carrera_user = $usuario->carrera;

        $newActivity ->save();
        return to_route('act.index')->with('status','la actividad se ha creado!');

        //dd($request -> all()); ver lo que imprime el formulario


    }
    public function destroy(Activity $activities){
        $imagePath = $activities->imagen;
        $activities->delete();
        if ($imagePath && file_exists(public_path($imagePath))) {
            unlink(public_path($imagePath));
        }

        return to_route('act.index')->with('status','La actividad se ha eliminado!');

    }


}
