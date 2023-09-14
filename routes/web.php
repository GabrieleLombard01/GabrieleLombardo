<?php

use App\Http\Controllers\Admin\CurriculumController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\InstructionController;
use App\Http\Controllers\Guest\HomeController as GuestHomeController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Guest\CurriculumShowCaseController;
use App\Http\Controllers\Guest\ProjectShowCaseController;
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

// Rotta cv showcase Guest
Route::get('/cv-show-case', [CurriculumShowCaseController::class, 'index'])->name('guest.CvShowCase');

// Rotta project showcase Guest
Route::get('/project-show-case', [ProjectShowCaseController::class, 'index'])->name('guest.ProjectShowCase');



//! Rotte Progetti Admin
Route::get('/admin/projects', [ProjectController::class, 'index'])->middleware(['auth', 'verified'])->name('admin.projects.index');
Route::get('/admin/projects/create', [ProjectController::class, 'create'])->middleware(['auth', 'verified'])->name('admin.projects.create');
Route::get('/admin/projects/{project}', [ProjectController::class, 'show'])->middleware(['auth', 'verified'])->name('admin.projects.show');
Route::get('/admin/projects/{project}/edit', [ProjectController::class, 'edit'])->middleware(['auth', 'verified'])->name('admin.projects.edit');
Route::put('/admin/projects/{project}/update', [ProjectController::class, 'update'])->middleware(['auth', 'verified'])->name('admin.projects.update');
Route::post('/admin/projects/store', [ProjectController::class, 'store'])->middleware(['auth', 'verified'])->name('admin.projects.store');
Route::delete('/admin/projects/{project}', [ProjectController::class, 'destroy'])->middleware(['auth', 'verified'])->name('admin.projects.destroy');

//! Rotta CV Admin
Route::get('/admin/cv', [CurriculumController::class, 'index'])->middleware(['auth', 'verified'])->name('admin.cv.index');
//? Rotte esperienze Admin
Route::get('/admin/experiences', [ExperienceController::class, 'index'])->middleware(['auth', 'verified'])->name('admin.experiences.index');
Route::get('/admin/experiences/create', [ExperienceController::class, 'create'])->middleware(['auth', 'verified'])->name('admin.experiences.create');
Route::get('/admin/experiences/{experience}', [ExperienceController::class, 'show'])->middleware(['auth', 'verified'])->name('admin.experiences.show');
Route::get('/admin/experiences/{experience}/edit', [ExperienceController::class, 'edit'])->middleware(['auth', 'verified'])->name('admin.experiences.edit');
Route::put('/admin/experiences/{experience}/update', [ExperienceController::class, 'update'])->middleware(['auth', 'verified'])->name('admin.experiences.update');
Route::post('/admin/experiences/store', [ExperienceController::class, 'store'])->middleware(['auth', 'verified'])->name('admin.experiences.store');
Route::delete('/admin/experiences/{experiences}', [ExperienceController::class, 'destroy'])->middleware(['auth', 'verified'])->name('admin.experiences.destroy');
//? Rotte istruzione Admin
Route::get('/admin/instructions', [InstructionController::class, 'index'])->middleware(['auth', 'verified'])->name('admin.instructions.index');
Route::get('/admin/instructions/create', [InstructionController::class, 'create'])->middleware(['auth', 'verified'])->name('admin.instructions.create');
Route::get('/admin/instructions/{instruction}', [InstructionController::class, 'show'])->middleware(['auth', 'verified'])->name('admin.instructions.show');
Route::get('/admin/instructions/{instruction}/edit', [InstructionController::class, 'edit'])->middleware(['auth', 'verified'])->name('admin.instructions.edit');
Route::put('/admin/instructions/{instruction}/update', [InstructionController::class, 'update'])->middleware(['auth', 'verified'])->name('admin.instructions.update');
Route::post('/admin/instructions/store', [InstructionController::class, 'store'])->middleware(['auth', 'verified'])->name('admin.instructions.store');
Route::delete('/admin/instructions/{instruction}', [InstructionController::class, 'destroy'])->middleware(['auth', 'verified'])->name('admin.instructions.destroy');
//? Rotte skills Admin
Route::get('/admin/skills', [SkillController::class, 'index'])->middleware(['auth', 'verified'])->name('admin.skills.index');
Route::get('/admin/skills/create', [SkillController::class, 'create'])->middleware(['auth', 'verified'])->name('admin.skills.create');
Route::get('/admin/skills/{skill}', [SkillController::class, 'show'])->middleware(['auth', 'verified'])->name('admin.skills.show');
Route::get('/admin/skills/{skill}/edit', [SkillController::class, 'edit'])->middleware(['auth', 'verified'])->name('admin.skills.edit');
Route::put('/admin/skills/{skill}/update', [SkillController::class, 'update'])->middleware(['auth', 'verified'])->name('admin.skills.update');
Route::post('/admin/skills/store', [SkillController::class, 'store'])->middleware(['auth', 'verified'])->name('admin.skills.store');
Route::delete('/admin/skills/{skill}', [SkillController::class, 'destroy'])->middleware(['auth', 'verified'])->name('admin.skills.destroy');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
