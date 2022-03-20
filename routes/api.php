<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::controller(PostController::class)->prefix('posts')->group(function () {
    Route::get('/', 'index');
    Route::get('/{id}','show');
    Route::post('/create', 'store');
    Route::post('/update/{id}', 'update');
    Route::delete('/{id}', 'destroy');
});



