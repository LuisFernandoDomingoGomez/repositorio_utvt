<?php

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

Route::get('/', function () {
    return view('welcome');
});

// Vistas de Crud
Route::resource('roles', App\Http\Controllers\RolController::class);
Route::resource('users', App\Http\Controllers\UserController::class);

Route::resource('carreras', App\Http\Controllers\CarreraController::class);
Route::resource('asignaturas', App\Http\Controllers\AsignaturaController::class);
Route::resource('tematicas', App\Http\Controllers\TematicaController::class);
Route::resource('recursos', App\Http\Controllers\RecursoController::class);

//Generacion de vistas PDF
Route::get('users.pdf', 'App\Http\Controllers\UserController@pdf')->name('users.pdf');
Route::get('users.download-pdf', 'App\Http\Controllers\UserController@downloadPdf')->name('users.downloadPdf');


//Exportacion a Excel
Route::get('/export', 'App\Http\Controllers\UserController@export')->name('users.export');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
