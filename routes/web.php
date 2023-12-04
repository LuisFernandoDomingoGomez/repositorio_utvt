<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\ContenidoController;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\VideoController;
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


// Rutas personalizadas para aprobación y rechazo
// Route::post('recursos/{recurso}/approve', 'App\Http\Controllers\RecursoController@approve')->name('recursos.approve');
// Route::post('recursos/{recurso}/reject', 'App\Http\Controllers\RecursoController@reject')->name('recursos.reject');


//Generacion de vistas PDF
Route::get('users.pdf', 'App\Http\Controllers\UserController@pdf')->name('users.pdf');
Route::get('users.download-pdf', 'App\Http\Controllers\UserController@downloadPdf')->name('users.downloadPdf');

Route::get('asignatura.pdf', 'App\Http\Controllers\AsignaturaController@pdf')->name('asignatura.pdf');
Route::get('asignatura.download-pdf', 'App\Http\Controllers\AsignaturaController@downloadPdf')->name('asignatura.downloadPdf');

Route::get('tematica.pdf', 'App\Http\Controllers\TematicaController@pdf')->name('tematica.pdf');
Route::get('tematica.download-pdf', 'App\Http\Controllers\TematicaController@downloadPdf')->name('tematica.downloadPdf');

//Exportacion a Excel
Route::get('users.export', 'App\Http\Controllers\UserController@export')->name('users.export');
Route::get('asignatura.export', 'App\Http\Controllers\AsignaturaController@export')->name('asignatura.export');
Route::get('tematica.export', 'App\Http\Controllers\TematicaController@export')->name('tematica.export');


Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/contenido', [ContenidoController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('contenido');

Route::get('/galeria', [GaleriaController::class, 'index'])
->middleware(['auth', 'verified'])
->name('galeria');

Route::get('/estado', [EstadoController::class, 'index'])
->middleware(['auth', 'verified'])
->name('estado');

Route::get('/video', [VideoController::class, 'index'])
->middleware(['auth', 'verified'])
->name('video');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'updateProfile'])->name('profile.updateProfile');
    Route::put('/profile/password', [ProfileController::class, 'updatePassword'])->name('profile.updatePassword');
    Route::delete('/profile', [ProfileController::class, 'delete'])->name('profile.delete');
});

/*
Route::get('/view-document/{path}', function ($path) {
    // Asegúrate de que $path apunte al archivo que deseas mostrar.
    // En este caso, los archivos se encuentran en la carpeta "public/dist/docs".
    $filePath = public_path('dist/docs/' . $path);

    // A continuación, especifica los valores necesarios para $file_url y $file_data.
    $file_url = asset('/public/dist/docs/' . $path);

    return Preview::show($path, $filePath, $file_url);
})->name('view-document');
*/

require __DIR__.'/auth.php';
