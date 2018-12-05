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


// Como Freelance 

Route::get('/buscarProyectos', 'PagesController@buscarTrabajo');  // ( Por defecto al iniciar sesión)
Route::get('/perfilComoFreelance', 'PagesController@perfilComoFreelance');
Route::get('/notificaciones', 'PagesController@notificaciones');
Route::get('/proyectosComoFreelance', 'PagesController@proyectosComoFreelance');


// Como cliente

Route::get('/perfilComoCliente', 'PagesController@perfilComoCliente');
Route::get('/crearProyecto', 'PagesController@crearProyecto');
Route::get('/freelancersContratados', 'PagesController@freelancersContratados');
Route::get('/proyectosComoCliente', 'PagesController@proyectosComoCliente');


// Configuración y registro
Route::get('/configuracion', 'PagesController@configuracion');
Route::get('/menu', 'PagesController@menu');

