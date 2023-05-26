<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserFavoriteProjectController;
use App\Http\Controllers\UserProjectController;
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

Route::prefix('user')->group(function () {
    Route::get('/owned', [UserProjectController::class, 'index'])->name('user.project');
    Route::get('/favorite/projects', UserFavoriteProjectController::class)->name('user.liked.project');
});
