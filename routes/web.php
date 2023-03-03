<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\EventController;

//Estabelece as rotas definidas na classe Controleer
Route::get('/',[EventController::class, 'index']);


Route::get('/events/create',[EventController::class, 'create']);

//Envia metodo post
Route::post('/events',[EventController::class, 'store']);

