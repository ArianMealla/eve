<?php
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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
    return view('auth.login');
});
Route::get('template', function () {
    return view('layouts.template');
});



Route::resource('eventos', 'App\Http\Controllers\EventoController');
Route::resource('categorias', App\Http\Controllers\CategoriaController::class);
Route::resource('gestions', App\Http\Controllers\GestionController::class);
Route::resource('tiposevento', App\Http\Controllers\TiposeventoController::class);
Route::resource('lugars', App\Http\Controllers\LugarController::class);

Route::resource('inscripcions', App\Http\Controllers\InscripcionController::class);
Route::resource('places', App\Http\Controllers\PlaceController::class);
Route::resource('departamentos', App\Http\Controllers\DepartamentoController::class);
Route::resource('horarios', App\Http\Controllers\HorarioController::class);
Route::resource('generos', App\Http\Controllers\GeneroController::class);

Route::resource('roles', RoleController::class);
Route::resource('users', UserController::class);
Route::resource('permission', PermissionController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
