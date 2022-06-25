<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\MatriculaController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/curso/mostrar',[CursoController::class,'show'])->middleware('auth');
Route::get('/curso/registrar',[CursoController::class,'cursoForm'])->middleware('auth');


Route::get('/matricula/mostrar',[MatriculaController::class,'show'])->middleware('auth');
Route::get('/matricula/registrar',[MatriculaController::class,'matriculaForm'])->middleware('auth');
