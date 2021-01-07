<?php

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

Route::get('/labs', [\App\Http\Controllers\LabController::class, 'index'])->name('labs');
Route::get('/labs/create', [\App\Http\Controllers\LabController::class, 'create'])->name('labsCreate');
Route::get('/labs/edit/{id}', [\App\Http\Controllers\LabController::class, 'edit'])->name('labsEdit');
Route::post('/labs/post', [\App\Http\Controllers\LabController::class, 'store']);
Route::post('/labs/post/update/{id}', [\App\Http\Controllers\LabController::class, 'update']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
