<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\CurriculaController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\VacanciesController;
use Illuminate\Support\Facades\Route;

/* ========================================
Rutas para vista del cliente
========================================= */
Route::get('/', [HomeController::class, 'index'])->name('home');
// Rutas de Curriculums
Route::get('/curriculums', [CurriculaController::class, 'index'])->name('curricula.index');
Route::get('/curriculums/registrar/estudiante', [CurriculaController::class, 'createStudentCurriculum'])->name('create.student.curricula');

// Rutas de Vacantes
Route::get('/vacantes', [VacanciesController::class, 'index'])->name('vacancies.index');

/* ========================================
Rutas para vista del administrador
========================================= */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
