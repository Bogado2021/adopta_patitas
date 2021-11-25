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

Auth::routes();

//ADMIN
Route::get('/home', 'HomeController@index')->name('home');

/* mascota*/
Route::get('/mascota', 'MascotaController@index')->name('mascota');
Route::get('/agregarmascota', 'MascotaController@create')->name('agregarmascota');
Route::post('/agregarmascota', 'MascotaController@store')->name('agregarmascota');

/* solicitud*/
Route::get('/solicitud', 'SolicitudController@index')->name('solicitud');

/* usuarios*/
Route::get('/mascota', 'MascotaController@index')->name('mascota');






//USUARIO
Route::get('/userhome', 'UserhomeController@index')->name('userhome');
/*adoptar*/
Route::get('/adoptar', 'AdoptarController@index')->name('adoptar');
/*cuenta*/












// ¿CÓMO FUNCIONA?
Route::get('/c_funciona', 'PreguntaController@index');
