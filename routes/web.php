<?php

use App\Http\Controllers\AutenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\VoteController;
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
//like y dislike
//Route::post('/publicacion/{post}/like', [PostController::class, 'like'])->middleware('auth')->name('posts.like');
//Route::post('/publicacion/{post}/dislike', [PostController::class, 'dislike'])->middleware('auth')->name('posts.dislike');

//sector finanza
Route::get('/finanzas', [FinanceController::class, 'index'])->name('act.index')->middleware('auth');
Route::get('/finanzas/crear', [FinanceController::class, 'create'])->name('act.create')->middleware('auth');
Route::post('/finanzas', [FinanceController::class, 'store'])->name('act.store')->middleware('auth');
Route::get('/finanzas/{activities}', [FinanceController::class, 'show'])->name('act.show')->middleware('auth');
Route::delete('/finanzas/{activities}',[FinanceController::class, 'destroy'])->name('act.destroy')->middleware('auth');
//sector votacion
Route::get('/votacion',[VoteController::class,'index'])->name('vot.index')->middleware('auth');
Route::get('/votacion/crear',[VoteController::class,'create'])->name('vot.create')->middleware('auth');
Route::post('/votacion',[VoteController::class,'store'])->name('vot.store')->middleware('auth');
Route::get('/votacion/{vote}/editar', [VoteController::class, 'edit'])->name('vot.edit')->middleware('auth');
Route::patch('/votacion/{vote}',[VoteController::class, 'update'])->name('vot.update')->middleware('auth');
Route::delete('/votacion/{vote}',[VoteController::class, 'destroy'])->name('vot.destroy')->middleware('auth');

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


