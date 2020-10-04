<?php


Route::middleware(['auth'])->group(function(){

    Route::get('/personas', 'PersonaController@index')
    ->middleware('can:personas.index')
    ->name('personas.index');
    //USER
    //Route::get('/personas','PersonaController@index')->middleware('permission:personas.index')->name('personas.index');

    Route::post('/personas/store', 'PersonaController@store')
    ->middleware('can:personas.store')
    ->name('personas.store');

     Route::get('/personas/create', 'PersonaController@create')
     ->middleware('can:personas.create')
     ->name('personas.create');

     Route::put('/personas/{personas}', 'PersonaController@update')
     //->middleware('can:personas.update')
     ->name('personas.update');

     Route::get('/personas/{personas}', 'PersonaController@show')
     ->middleware('can:personas.show')
     ->name('personas.show');

     Route::delete('/personas/{personas}', 'PersonaController@destroy')
     ->middleware('permission:personas.destroy')
     ->name('personas.destroy');

     Route::get('personas/{personas}/edit', 'PersonaController@edit')
     ->middleware('can:personas.edit')
     ->name('personas.edit');


});
