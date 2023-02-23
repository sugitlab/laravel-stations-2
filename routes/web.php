<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PracticeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\Admin\MovieController as AdminMovieController;

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

Route::get('practice', [PracticeController::class, 'sample']);
Route::get('practice2', [PracticeController::class, 'sample2']);
Route::get('practice3', [PracticeController::class, 'sample3']);
Route::get('getPractice', [PracticeController::class, 'getPractice']);

Route::get('movies', [MovieController::class, 'index']);

Route::group(['prefix' => 'admin', 'as' => 'admin'], function () {
    Route::get('/movies', [AdminMovieController::class, 'index'])->name('.movies');
    Route::get('/movies/create', [AdminMovieController::class, 'create'])->name('.movies.create');
    Route::post('/movies/store', [AdminMovieController::class, 'store'])->name('.movies.store');
});
