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
Route::get('/posts/create', [PageController::class, 'create']);
Route::post('/posts/store', [PageController::class, 'store']);
Route::get('/posts/{id}', [PageController::class, 'show']);

Route::get('/posts/{id}/edit', [PageController::class, 'edit']);
Route::post('/posts/{id}/update', [PageController::class, 'update']);

Route::post('/posts/{id}/delete', [PageController::class, 'destroy']);
