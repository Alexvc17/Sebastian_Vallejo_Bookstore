<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Informacion;
use App\Http\Controllers\Editoriales;
use App\Http\Controllers\Libros;

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

//informacion
Route::get('/',[Informacion::class, 'index']);

//listar editoriales
Route::get('/editorial',[Editoriales::class, 'index'])->name('listadoEditoriales');
//registrar editoriales
Route::get('editoriales/registro', [Editoriales::class, 'formularioReg'])->name('registroEdi');
Route::post('editoriales/registro', [Editoriales::class, 'registrar'])->name('registrado');
//actualizar editorial
Route::get('editoriales/registro/{id}', [Editoriales::class, 'form_actualizar'])->name('form_actualizarEditorial');
Route::post('editoriales/registro/{id}', [Editoriales::class, 'actualizar'])->name('actualizar_editorial');


//listar Libros
Route::get('/libros',[Libros::class, 'index'])->name('listadoLibros');