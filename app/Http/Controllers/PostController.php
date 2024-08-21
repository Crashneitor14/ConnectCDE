<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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


    //$post = Post::create($request->validated()); //filtra los datos aqui mismo
    //if ($request->hasFile('imagen')) {
    //    $imagen = $request->file('imagen');
    //    $nombreImagen = time() . '.' . $imagen->getClientOriginalExtension();
    //    $imagen->storeAs('public/images', $nombreImagen); // Almacenar en 'storage/app/public/imagenes'
    //
    //  Post::create($request->validated());
    //  return to_route('posts.index')->with('status','El post ha sido creado!');
    //}

    $newPost = new Post();

    $newPost->title = $request->title;
    $newPost->body = $request->body;
    $newPost->details = $request->details;


    if($request->hasFile('imagen')){
        $file = $request->file('imagen');
        $destinationPath = 'images/imagenes/';
        $filename = time() . '-' . $file->getClientOriginalName();
        $uploadSuccess = $request->file('imagen')->move($destinationPath,$filename);
        $newPost->imagen = $destinationPath . $filename;

    };

    $newPost->save();   //guarda los datos del newpost
    //return $request -> all();


    return to_route('posts.index')->with('status','El post ha sido creado!');
}

public function edit(Post $post){ // formulario de editar el post

    return view('posts.edit', ['post' => $post]);

}

public function update(SavePostRequest $request, Post $post){ //almacenar los cambios del post a la base de datos


    $post->update($request->validated()); //filtra los datos aqui mismo

    return to_route('posts.show',$post)->with('status','El post ha sido actualizado!');


}

public function destroy(Post $post){ //destruir el post en la base de datos

    $post->delete();

    return to_route('posts.index')->with('status','El post ha sido eliminado!');
}

}
