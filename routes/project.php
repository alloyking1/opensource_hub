<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
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

// Route::resource('/', ProjectController::class)->only('show');
Route::controller()->group(function () {
    Route::get('/create', [ProjectController::class, 'create'])->name('project.create');
    Route::post('/save', [ProjectController::class, 'save'])->name('project.save');
    Route::get('/show/{id}', [ProjectController::class, 'show'])->name('project.show');
});
