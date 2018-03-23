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
    return view('acceuil');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/acceuil', 'HomeController@acceuil')->name('acceuil');

Route::get('/liste', 'HomeController@show');

Route::get('/ajouter', 'HomeController@ajouter')->name('ajouter');

Route::post('/added', 'HomeController@add');
Route::post('/add','HomeController@ajouter');

Route::post('/majObjet','HomeController@up');
Route::post('/maj', 'HomeController@update');

Route::post('/delate','HomeController@supr');

Route::post('/search','HomeController@rechercher');