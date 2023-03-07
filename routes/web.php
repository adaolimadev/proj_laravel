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

//Estabelece as rotas passando sempre o método a ser usado

//INDEX -> Rota Home usando o metodo index();
Route::get('/',[EventController::class, 'index']);
Route::get('/index',[EventController::class, 'index']);

//CRIAR EVENTO -> Rota create usando o metodo create()
Route::get('/events/create',[EventController::class, 'create'])->middleware('auth');

//ENVIAR EVENTO BD ->Envia metodo post  usando o método store() (Aqui no caso esta utilizando o metodo de nomear as rotas name('events.store')
Route::post('/events',[EventController::class, 'store'])->name('events.store')->middleware('auth');

//LISTAR EVENTOS BD-> Rota myEvents usando o metodo getEvents()
Route::get('/events/myevents',[EventController::class, 'getEvents'])->middleware('auth');

//LISTAR UM EVENTO BD-> Rota events que recebe um {id} usando o metodo show()
Route::get('/events/{id}',[EventController::class, 'show']);

//DELETE BD -> Rota events que recebe um {id} usando o metodo destroy para deletar do BD com o ID informado
Route::delete('events/{id}', [EventController::class, 'destroy'])->middleware('auth');

//FORM EDITAR
Route::get('/events/edit/{id}',[EventController::class, 'edit'])->middleware('auth');

//EDITAR BD
Route::put('/events/update/{id}',[EventController::class, 'update'])->middleware('auth');







Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
