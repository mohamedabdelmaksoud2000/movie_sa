<?php

use App\Http\Controllers\Dashboard\ActorController;
use App\Http\Controllers\Dashboard\GenreController;
use App\Http\Controllers\Dashboard\MovieController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth','role:admin'])
->prefix('admin')
->name('dashboard.')
->group(function(){
    
    Route::get('/dashboard', function () {
        return view('dashboard.dashboard');
    })->name('dashboard');
    
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
        Route::delete('/delete','destroy')->name('delete');
    });

    //actor
    Route::prefix('/actors')
    ->name('actor.')
    ->controller(ActorController::class)
    ->group(function(){
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/create','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::delete('/delete','destroy')->name('delete');
    });

    //movie
    Route::prefix('/movies')
    ->name('movie.')
    ->controller(MovieController::class)
    ->group(function(){
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/create','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::delete('/delete','destroy')->name('delete');
    });

});