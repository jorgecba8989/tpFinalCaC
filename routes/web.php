<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\InsumosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});
/* 
Route::get('/cliente', function () {
    return view('cliente.index');
});

Route::get('/cliente/create', [ClientesController::class, 'create']);
*/

//esta linea de abajo me evito escribir uno por uno las rutas para accer create, edit, etc, tal como puse arriba.
Route::resource('cliente', ClientesController::class)->middleware('auth');
Route::resource('insumos', InsumosController::class)->middleware('auth'); // con esto me ayuda asignar todas las rutas que tiene clientes
//Auth::routes();
Auth::routes(['reset'=>false]); // Auth::routes(['register'=>false,'reset'=>false]);  si quiero eliminar la opcion de registrar un usuario para loguearse


Route::get('/home', [ClientesController::class, 'index'])->name('home');




Route::group(['middleware'=>'auth'],function(){
    //Route::get('/', [ClientesController::class, 'index'])->name('home');
    Route::get('/', function () {
        return view('layouts.app');
    });
});