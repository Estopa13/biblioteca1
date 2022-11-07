<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\ClasifiacionController;

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
    return view('Iniciosesion.inisiosesion');
});

Route::get('/clasificacion.create', function () {
    return view('clasificacion.create');
});

Route::get('/clasificacion.store', function () {
    return view('clasificacion.store');

});

Route::get('/clasificacion.edit', function () {
    return view('clasificacion.edit');

});
Route::get('/clasificacion.update', function () {
    return view('clasificacion.update');

});
Route::get('/clasificacion.destroy', function () {
    return view('clasificacion.destroy');

});
Route::resource('/clasifi',\App\Http\Controllers\ClasifiacionController::class);


