<?php

use App\Http\Controllers\FileController;
use App\Models\Lab;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
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

Route::middleware(['auth'])->group(function () {

    Route::get('/labs', [\App\Http\Controllers\LabController::class, 'index'])->name('labs');
    Route::get('/labs/create', [\App\Http\Controllers\LabController::class, 'create'])->name('labsCreate');
    Route::get('/labs/edit/{id}', [\App\Http\Controllers\LabController::class, 'edit'])->name('labsEdit');
    Route::post('/labs/post', [\App\Http\Controllers\LabController::class, 'store']);
    Route::post('/labs/post/update/{id}', [\App\Http\Controllers\LabController::class, 'update']);
    Route::post('/labs/export', [\App\Http\Controllers\LabController::class, 'export'])->name('LabExport');

    Route::post('/wells/export', [\App\Http\Controllers\WellController::class, 'export'])->name('WellExport');
    Route::get('/wells', [\App\Http\Controllers\WellController::class, 'index'])->name('wells');
    Route::get('/wells/create', [\App\Http\Controllers\WellController::class, 'create'])->name('wellsCreate');
    Route::post('/wells/post', [\App\Http\Controllers\WellController::class, 'store']);
    Route::get('/wells/edit/{id}', [\App\Http\Controllers\WellController::class, 'edit'])->name('wellsEdit');
    Route::post('/wells/update/{id}', [\App\Http\Controllers\WellController::class, 'update']);

    Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard')->middleware(['auth:sanctum', 'verified']);
    Route::post('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index']);

    Route::get('/files', [\App\Http\Controllers\FileController::class, 'index'])->name('files');
    Route::get('/files/{file}', [FileController::class, 'download'])->name('files.download');

});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
