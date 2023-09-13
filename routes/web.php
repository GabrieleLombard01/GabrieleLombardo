<?php

use App\Http\Controllers\Admin\CurriculumController;
use App\Http\Controllers\Guest\HomeController as GuestHomeController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\ProfileController;
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

// Rotta HOME Guest
Route::get('/', [GuestHomeController::class, 'index'])->name('guest.home');

// Rotta Progetti Admin
Route::get('/projects', [ProjectController::class, 'index'])->middleware(['auth', 'verified'])->name('admin.projects');

// Rotta CV Admin
Route::get('/cv', [CurriculumController::class, 'index'])->middleware(['auth', 'verified'])->name('admin.cv');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
