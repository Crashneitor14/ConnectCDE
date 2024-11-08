<?php

use App\Http\Controllers\AutenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\FinanceController;
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
//sector finanza
Route::get('/finanzas', [FinanceController::class, 'index'])->name('act.index')->middleware('auth');
Route::get('/finanzas/crear', [FinanceController::class, 'create'])->name('act.create')->middleware('auth');
Route::post('/finanzas', [FinanceController::class, 'store'])->name('act.store')->middleware('auth');
Route::delete('/finanzas/{id}',[FinanceController::class, 'destroy'])->name('act.destroy')->middleware('auth');

//rutas aun no terminadas
Route::View('/pruebax', 'test')->name('test');



//contactos
Route::view('/contacto', 'contacto')-> name('contact');


//login
Route::view('/login', 'auth.login')->name('login');
Route::post('/login',[AutenticatedSessionController::class,'store']);
Route::post('/logout',[AutenticatedSessionController::class,'destroy'])->name('logout');


//registrar
Route::view('/registrar','auth.register')->name('register');
Route::post('/registrar',[RegisteredUserController::class,'store']);


?>


