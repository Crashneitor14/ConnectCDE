<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth',['except' => ['index','show']]);

    }
public function index(){ //mostrar listado de posts

        $posts = Post::get();
        return view('posts.index', ['posts' => $posts]);
}

public function show(Post $post){   //mostrar el detalle de un post
        return view('posts.show',['post' => $post]);
}

public function create(){ // devolver el formulario para crear post
    return view('posts.create',['post' => new Post]);

}

public function store(SavePostRequest $request){ // guardar el post en la base de datos
    $newPost = new Post();
    //datos post
    $newPost->title = $request->title;
    $newPost->body = $request->body;
    $newPost->details = $request->details;

    //imagen
    if($request->hasFile('imagen')){
        $file = $request->file('imagen');
        $destinationPath = 'images/imagenes/';
        $filename = time() . '-' . $file->getClientOriginalName();
        $uploadSuccess = $request->file('imagen')->move($destinationPath,$filename);
        $newPost->imagen = $destinationPath . $filename;
    };
    //fecha expiracion
    $expiresAtInput = $request->input('expiracion');
    $expiresAtInput = trim($expiresAtInput);
    list($day, $month, $year) = explode('-', $expiresAtInput);
    $expiresAtFormatted = "$day-$month-$year 00:00";
    $expiresAt = Carbon::parse($expiresAtInput);
    $newPost-> expiracion = $expiresAt;

    //agregar nombre autor al post
    $usuario = Auth::user();
    $newPost->name_user = $usuario->name;



    $newPost->save();   //guarda los datos del newpost



    return to_route('posts.index')->with('status','El post ha sido creado!');
}

public function edit(Post $post){ // formulario de editar el post


    return view('posts.edit', ['post' => $post]);

}

public function update(SavePostRequest $request, Post $post){ //almacenar los cambios del post a la base de datos

  //  if ($request->hasFile('imagen')) {
        //elimina la imagen anterior del post
    //    if($post->imagen){
    //        $oldimagen = public_path($post->imagen);
       //     if (file_exists($oldimagen)) {
      //          unlink($oldimagen);
       //     }
       // }
        //proceso para implementar la imagen
        //$imagen = $request->imagen;
        //$newNombre = rand() . '-' . $imagen->getClientOriginalName();
        //$imagen ->move(public_path('images/imagenes'),$newNombre);
        //$path = 'images/imagenes/'.$newNombre;
        //$post->imagen = $path;
    //}


    $post->update($request->validated());





    return to_route('posts.show',$post)->with('status','El post ha sido actualizado!');

}

public function destroy(Post $post){ //destruir el post en la base de datos
    $verPost = Post::count();

    if ($verPost <= 1) {
        return to_route('posts.index')->with('status','No se puede borrar el ultimo post');

    }else{
        $imagePath = $post->imagen;
            $post->delete();
            if ($imagePath && file_exists(public_path($imagePath))) {
                unlink(public_path($imagePath));
            }
    }


    return to_route('posts.index')->with('status','El post ha sido eliminado!');
}
}
