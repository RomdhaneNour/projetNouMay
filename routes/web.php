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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/gestionpfe','PFEController@index')->name('pfe')->middleware('auth');
Route::get('/addpfe','PFEController@create')->name('add')->middleware('auth');
Route::post('/ajout','PFEController@store')->name('ajout')->middleware('auth');
Route::get('/deletePfe/{id}','PFEController@destroy')->name('sup')->middleware('auth');
Route::get('/update/{id}','PFEController@update')->name('update')->middleware('auth');
Route::get('/show/{id}','PFEController@show')->name('update')->middleware('auth');
Route::post('/edit/{id}','PFEController@edit')->name('edit')->middleware('auth');


Route::get('/stagiaire','StagiaireController@index')->name('stagiaire')->middleware('auth');
Route::get('/effacer/{id}','StagiaireController@destroy')->name('delete')->middleware('auth');
Route::get('/afficher/{id}','StagiaireController@show')->name('show')->middleware('auth');
Route::get('/ajouter','StagiaireController@create')->name('add')->middleware('auth');
Route::get('/modifier/{id}','StagiaireController@update')->name('modif')->middleware('auth');
Route::post('/edit/{id}','StagiaireController@edit')->name('edit')->middleware('auth');
Route::post('/add','StagiaireController@store')->name('ajout')->middleware('auth');

