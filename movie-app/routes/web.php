<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ReviewController;
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

Route::get('/product', function () {
    return view('product');
});

Route::get('/movies', function () {
    return view('movies.index');
});

Route::get('/reviews', function () {
    return view('reviews.index');
});

Route::get('/movies', [MovieController::class, 'index']);

Route::get('/movies/create', [MovieController::class, 'create']);

Route::post('/movies', [MovieController::class, 'store']);

Route::delete('/movies/{movie}', [MovieController::class, 'destroy']);

Route::get('/genres', [GenreController::class, 'index']);

Route::get('/genres/create', [GenreController::class, 'create']);

Route::post('/genres', [GenreController::class, 'store']);

Route::delete('/genres/{genre}', [GenreController::class, 'destroy']);

Route::get('/reviews', [ReviewController::class, 'index']);

Route::get('/reviews/create', [ReviewController::class, 'create']);

Route::post('/reviews', [ReviewController::class, 'store']);

Route::delete('/reviews/{review}', [ReviewController::class, 'destroy']);
