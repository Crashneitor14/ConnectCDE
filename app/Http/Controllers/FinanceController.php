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

        $validar = $request->validate([
            'name' =>['required','min:6'],
            'status' =>['required'],
            'name_rend'   =>['required'],
            'monto'   =>['required','numeric'],
            'tipo_rend'   =>['required'],
            'imagen'   =>['required','mimes:jpeg,png,jpg,pdf,doc,docx','max:16384'],
            'date_start'   =>['required'],
            'date_end'   =>['required'],
        ]);
        $newActivity ->name = $request->name;
        $newActivity ->status = $request->status;
        //rendiciones
        $newActivity ->name_rend = $request->name_rend;
        $newActivity ->tipo_rend = $request->tipo_rend;
        $newActivity ->monto = $request->monto;
        $newActivity ->observation = $request->observation;
        $newActivity ->date_start = $request->date_start;
        $newActivity ->date_end = $request->date_end;
        //imagen rendicion
        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $destinationPath = 'images/actividad/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('imagen')->move($destinationPath,$filename);
            $newActivity->imagen = $destinationPath . $filename;
        };
        //sacar info de usuario que subio
        $usuario = Auth::user();
        $newActivity->user_charge = $usuario->name;
        $newActivity->carrera_user = $usuario->carrera;

        $newActivity ->save($validar);
        return to_route('act.index')->with('status','la actividad se ha creado!');

        //dd($request -> all()); ver lo que imprime el formulario


    }
    public function edit(Activity $activities){ // formulario de editar el post


        return view('activity.edit', ['activity' => $activities]);

    }
    public function update(Activity $activity,Request $request){ //almacenar a la base de datos
        //alternativa en caso de falla de request.php

        $validar = $request->validate([
            'name' =>['required'],
            'status' =>['required'],
            'name_rend'   =>['required'],
            'monto'   =>['required','numeric'],
            'observation'   =>['required'],
        ]);

        $activity->update($validar);

        return to_route('act.index',$activity)->with('status','Actividad actualizada!');

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
