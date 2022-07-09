<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\MallaCurricularController;
use App\Http\Controllers\CarreraController;
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

/*profesor*/
Route::get('/profesor/mostrar',[ProfesorController::class,'mostrar'])->name("mostrar.profesors");
Route::get('/profesor/registrar',[ProfesorController::class,'profesorForm'])->name("formulario.profesor");;
Route::post('/profesor/registrar',[ProfesorController::class,'procesarForm'])->name("procesar.profesor");

/*malla*/
Route::get('/malla/registrar',[MallaCurricularController::class,'mallaForm'])->name("formulario.malla");;
Route::post('/malla/registrar',[MallaCurricularController::class,'procesarrForm'])->name("procesar.malla");

/*carrera*/
Route::get('/carrera/registrar',[CarreraController::class,'mallaForm'])->name("formulario.carrera");;
Route::post('/carrera/registrar',[CarreraController::class,'procesarForm'])->name("procesar.carrera");

/*curso*/
Route::get('/curso/mostrar',[CursoController::class,'show'])->middleware('auth');
Route::get('/curso/registrar',[CursoController::class,'cursoForm'])->name("formulario.curso");;
Route::post('/curso/registrar',[CursoController::class,'procesarForm'])->name("procesar.curso");


/*matricula*/
Route::get('/matricula/mostrar',[MatriculaController::class,'show'])->middleware('auth');
Route::get('/matricula/registrar',[MatriculaController::class,'matriculaForm'])->name("formulario.matricula");;
Route::post('/matricula/registrar',[MatriculaController::class,'procesarForm'])->name("procesar.matricula");
