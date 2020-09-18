<?php

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

Route::resource('personas', 'PersonaController');

Route::get('/lista-personas',function()
{
	$entities = DB::table('personas')
					->join('localidades','localidades.id','=','personas.localidad_id')
					->select(DB::raw('personas.id,personas.apellido, personas.nombre, personas.cuil, personas.telefono, personas.email, localidades.nombre as localidad, personas.activo'))
					->simplePaginate(5000);

    return $entities;
});

Route::get('/home', 'HomeController@index')->name('home');