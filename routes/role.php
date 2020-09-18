<?php


Route::middleware(['auth'])->group(function(){
    Route::get('/roles', 'RoleController@index')
                ->middleware('can:roles.index')
                ->name('roles.index');

//Route::middleware(['auth'])->group(function(){


Route::post('roles/store', 'RoleController@store')
                ->middleware('can:roles.store')
                ->name('roles.store');

Route::get('/roles/create', 'RoleController@create')
                ->middleware('can:roles.create')
                 ->name('roles.create');

    Route::put('/roles/{roles}', 'RoleController@update')
                ->middleware('can:roles.update')
                ->name('roles.update');

    Route::get('/roles/{roles}', 'RoleController@show')
                ->middleware('can:roles.show')
                ->name('roles.show');

    Route::delete('roles/{roles}', 'RoleController@destroy')
                ->middleware('can:roles.destroy')
                ->name('roles.destroy');

    Route::get('/roles/{roles}/edit', 'RoleController@edit')
                ->middleware('can:roles.edit')
                ->name('roles.edit');
});
