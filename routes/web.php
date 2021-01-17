<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

/*
*RUTAS DE LAS CARTAS
*/
Route::get('/cartas', 'App\Http\Controllers\CardController@index'); //muestra todas las cartas
Route::get('/unicacarta/{cardname}', 'App\Http\Controllers\CardController@find'); //muestra una carta por nombre
Route::get('/usuariocarta/{id_user}', 'App\Http\Controllers\CardController@show'); //muestra dueño de la carta
Route::get('/guardarcarta/{id_user}/{name}/{decription}/{collection}', 'App\Http\Controllers\CardController@store'); //Guardando carta en DB
Route::get('/destruircarta/{cardname}/', 'App\Http\Controllers\CardController@destroy'); //Destruyendo una carta por nombre


/*
*RUTAS DE LOS USUARIOS
*/
Route::get('/users', 'App\Http\Controllers\UserController@index');
Route::get('/getuserrole/{role}/', 'App\Http\Controllers\UserController@show');

/*
*RUTAS DE LAS COLECCIONES
*/
Route::get('/getcollection/{collection}/', 'App\Http\Controllers\CollectionController@show');