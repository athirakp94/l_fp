<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hello', function () {
//     return "Hello Laravel";
// });

// Route::get('/hello', function () {
//     return view('hello', ['name' => 'Athira']);
// });

Route::get('/hello', [PageController::class, 'hello']);
Route::get('/posts', [PageController::class, 'posts']);
Route::get('/posts/{id}', [PageController::class, 'show']);
