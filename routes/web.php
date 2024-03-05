<?php

use App\Http\Controllers\studentController;
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

Route::get('/', function () {
    return view('login');
});


Route::get('/table', [studentController::class,"index"]);

Route::get('/crud', [studentController::class,"create"]);

Route::post('/store', [studentController::class,"store"]);

Route::get('/{id}/edit', [studentController::class,"edit"]);

Route::put('/update/{id}', [studentController::class,"update"]);

Route::delete('/update/{id}', [studentController::class,"destroy"]);



