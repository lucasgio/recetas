<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'InicioController@index')->name('inicio.index');

// Routes of RecetaController
Route::resource('recetas', 'RecetaController');

// Route::get('/recetas', 'RecetaController@index')->name('recetas.index');
// Route::get('/recetas/create', 'RecetaController@create')->name('recetas.create');
// Route::get('/recetas/{receta}', 'RecetaController@show')->name('recetas.show');
// Route::get('/recetas/{receta}/edit','RecetaController@edit' )->name('recetas.edit');
// Route::post('/recetas', 'RecetaController@store')->name('recetas.store');
// Route::put('/recetas/{receta}', 'RecetaController@update')->name('recetas.update');
// Route::delete('/recetas/{receta}', 'RecetaController@destroy')->name('recetas.destroy');


// Routes of PerfilesController

Route::get('/perfiles/{perfil}', 'PerfilController@show')->name('perfiles.show');
Route::get('/perfiles/{perfil}/edit', 'PerfilController@edit')->name('perfiles.edit');
Route::put('/perfiles/{perfil}', 'PerfilController@update')->name('perfiles.update');

// Store los likes de la receta
Route::post('/recetas/{receta}', 'LikesController@update')->name('likes.update');

// Pagina que va a salir para los usuarios no registrado 
Route::get('/error', 'ErrorController')->name('error');

// Mostrar recetas por Categoria
Route::get('/categoria/{categoria}', 'CategoriaController@show')->name('categoria.show');

// Buscador de recetas
Route::get('/buscar', 'RecetaController@search')->name('buscar.search');

// Rutas de informacion al usuario de la aplicacion
Route::get('/sobre', 'InfoController@about')->name('sobre.about');
Route::get('/preguntas', 'InfoController@question')->name('preguntas.question');
Route::get('/contactos', 'InfoController@contact')->name('contactos.contact');

Auth::routes();

