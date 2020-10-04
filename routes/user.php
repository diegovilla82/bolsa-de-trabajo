<?php


Route::middleware(['auth'])->group(function(){

    Route::get('/users', 'UserController@index')
    ->middleware('can:users.index')
    ->name('users.index');
    //USER
    //Route::get('/users','UserController@index')->middleware('permission:users.index')->name('users.index');

    Route::post('/users/store', 'UserController@store')
    ->middleware('can:users.store')
    ->name('users.store');

     Route::get('/users/create', 'UserController@create')
     ->middleware('can:users.create')
     ->name('users.create');

     Route::put('/users/{users}', 'UserController@update')
     ->middleware('can:users.update')
     ->name('users.update');

     Route::get('/users/{users}', 'UserController@show')
     ->middleware('can:users.show')
     ->name('users.show');

     Route::delete('/users/{users}', 'UserController@destroy')
     ->middleware('permission:users.destroy')
     ->name('users.destroy');

     Route::get('users/{users}/edit', 'UserController@edit')
     ->middleware('can:users.edit')
     ->name('users.edit');


});
