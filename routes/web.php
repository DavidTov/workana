<?php

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

use App\User;

// Principal
Route::get('/', function () {
    return view('inicio');
});

//Route::resource(); // comenté esto, marcaba error
// Como Freelance 

Route::get('/buscarProyectos', 'PagesController@buscarTrabajo');  // (Por defecto al iniciar sesión)
Route::get('/perfilComoFreelance', 'PagesController@perfilComoFreelance');
Route::get('/notificaciones', 'PagesController@notificaciones');
Route::get('/proyectosComoFreelance', 'PagesController@proyectosComoFreelance');
Route::get('/proyectosConMisHabilidades', 'PagesController@proyectosConMisHabilidades');
Route::get('/realizarPropuesta', 'PagesController@realizarPropuesta');
Route::get('/mejorarPropuesta', 'PagesController@mejorarPropuesta');


// Como cliente

Route::get('/perfilComoCliente', 'PagesController@perfilComoCliente');
Route::get('/crearProyecto', 'PagesController@crearProyecto');
Route::get('/verPropuestas', 'PagesController@verPropuestas');
Route::get('/freelancersContratados', 'PagesController@freelancersContratados');
Route::get('/proyectosComoCliente', 'PagesController@proyectosComoCliente');


// Configuración, menu, registro, inicio y editar perfil
Route::get('/configuracion', 'PagesController@configuracion');
Route::get('/menu', 'PagesController@menu');
Route::get('/registro', 'PagesController@registro');
Route::get('/iniciarSesion', 'PagesController@iniciarSesion');
Route::get('/editarPerfil', 'PagesController@editarPerfil');



