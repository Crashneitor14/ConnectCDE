<?php

use App\Http\Controllers\AutenticatedSessionController;
use App\Http\Controllers\ConsultController;
use App\Http\Controllers\FinanceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\VoteController;
use App\Models\Vote;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});







//endpoint publicacion
Route::get('/publicacion/{post}', [PostController::class, 'showApi']);
Route::post('/publicacion', [PostController::class, 'showApiall']);
//endpoint votacion listo
Route::post('/votacion', [VoteController::class, 'showApiall']);
Route::get('/votacion/{post}', [VoteController::class, 'showApi']);
//endpoint actividad listo
Route::get('/finanzas/{activity}', [FinanceController::class, 'showApi']);
Route::post('/finanzas', [FinanceController::class, 'showApiall']);
//endpoint consulta listo
Route::get('/consultas/{consult}',[ConsultController::class, 'showApi']);
Route::post('/consultas',[ConsultController::class, 'showApiall']);



Route::post('/login',[AutenticatedSessionController::class,'show']);


