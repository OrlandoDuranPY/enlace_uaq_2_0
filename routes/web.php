<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\CurriculaController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\VacanciesController;
use Illuminate\Support\Facades\Route;

/* ========================================
Rutas para vista del usuario
========================================= */
Route::get('/', [HomeController::class, 'index'])->name('home');
// Rutas de Curriculums
Route::get('/curriculums', [CurriculaController::class, 'index'])->name('curricula.index');
Route::get('/curriculums/registrar/estudiante', [CurriculaController::class, 'createStudentCurriculum'])->name('curricula.create.student');
Route::get('/curriculums/registrar/docente', [CurriculaController::class, 'createTeacherCurriculum'])->name('curricula.create.teacher');

// Rutas de Vacantes
Route::get('/vacantes', [VacanciesController::class, 'index'])->name('vacancies.index');
Route::get('/vacantes/registrar', [VacanciesController::class, 'createVacancy'])->name('vacancies.create');

/* ========================================
Rutas para vista del administrador
========================================= */
Route::middleware('auth')->group(function () {
    Route::get('/panel-administrador', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/panel-administrador/usuarios', [AdminController::class, 'users'])->name('admin.users');
    Route::get('/panel-administrador/empresas', [AdminController::class, 'companies'])->name('admin.companies');
    Route::get('/panel-administrador/programas-de-estudio', [AdminController::class, 'studyPrograms'])->name('admin.study-programs');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
