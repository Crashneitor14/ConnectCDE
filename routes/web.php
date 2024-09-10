<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use PHPUnit\Framework\Attributes\PostCondition;

// /index
// /contact
// /publicaciones
// /acerca



Route::view('/', 'welcome')->name('menu');

//Route::get('/publicacion', [PostController::class, 'index'])->name('posts.index');
//Route::get('/publicacion/crear',[PostController::class, 'create'])->name('posts.create');
//Route::post('/publicacion',[PostController::class,'store'])->name('posts.store');
//Route::get('/publicacion/{post}', [PostController::class, 'show'])->name('posts.show');
//Route::get('/publicacion/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
//Route::patch('/publicacion/{post}',[PostController::class, 'update'])->name('posts.update');
//Route::delete('/publicacion/{post}',[PostController::class, 'destroy'])->name('posts.destroy');

//rutas enfoque publicacion
Route::resource('publicacion', PostController::class,[
    'names' =>'posts',
    'parameters' => ['publicacion' => 'post']

]);




//rutas aun no terminadas
Route::View('/pruebax', 'test')->name('test');
Route::view('/finanzas', 'finanza')->name('plata')->middleware('auth');
Route::view('/contacto', 'contacto')-> name('contact');


//login
Route::view('/login', 'auth.login')->name('login');


//registrar
Route::view('/registrar','auth.register')->name('register');
Route::post('/registrar',[RegisteredUserController::class,'store']);


?>


