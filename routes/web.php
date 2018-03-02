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

Route::get('/', function () {
    return view('/home');
});


Route::get('/dashboard', function () {

    return view('dashboard');
})->middleware('auth');



Route::get('mis-ideas','IdeaController@getIdeas');
Route::post('guardar-idea','IdeaController@store');
Route::get('ideas', 'IdeaController@index');


//Rutas de url

Route::get('clients/system', 'RutasController@client');

//Clientes
Route::resource('clients','ClientController');

//Payment
Route::resource('payments','PaymentController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
