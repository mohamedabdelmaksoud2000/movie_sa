<?php

use App\Http\Controllers\Dashboard\GenreController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:admin')
->name('dashboard.')
->group(function(){
    
    //genre
    Route::prefix('/genres')
    ->name('genre.')
    ->controller(GenreController::class)
    ->group(function(){
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/create','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::delete('/delete/{id}','delete')->name('delete');
    });

});