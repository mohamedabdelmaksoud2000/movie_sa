<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Website\FeedbackController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\MovieController;
use App\Http\Controllers\Website\MoviesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//website
Route::get('/',HomeController::class)->name('home');
Route::get('/movies',MoviesController::class)->name('movies');
Route::get('/movie/{id}',MovieController::class)->name('movie');

// feedback
Route::get('/feedback',[FeedbackController::class,'index'])->name('feedback.index');
Route::post('/feedback',[FeedbackController::class,'save'])->name('feedback.save');

require __DIR__.'/auth.php';
require __DIR__.'/dashboard.php';
