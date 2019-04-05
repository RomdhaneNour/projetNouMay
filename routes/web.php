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
    return view('devrows');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/gestprojet', 'ProjetController@index')->name('projet');
Route::get('/newprojet', 'ProjetController@create')->name('newprojet');
Route::get('/addprojet', 'ProjetController@store')->name('addprojet');
Route::get('/updateprojet/{id}', 'ProjetController@update')->name('updateprojet');
Route::get('/editprojet/{id}', 'ProjetController@edit')->name('editprojet');
Route::get('/deleteproject/{id}', 'ProjetController@destroy')->name('deleteprojet');
Route::get('/gestclient', 'ClientController@index')->name('client');
Route::get('/newclient', 'clientController@create')->name('newclient');
Route::get('/addclient', 'ClientController@store')->name('addclient');
Route::get('/updateclient/{id}', 'ClientController@update')->name('updateclient');
Route::get('/editclient/{id}', 'ClientController@edit')->name('editclient');
Route::get('/deleteclient/{id}', 'ClientController@destroy')->name('deleteclient');
Route::get('/gestservice', 'ServiceController@index')->name('service');
Route::get('/newservice', 'ServiceController@create')->name('newservice');
Route::get('/addservice', 'ServiceController@store')->name('addservice');
Route::get('/updateservice/{id}', 'ServiceController@update')->name('updateservice');
Route::get('/editservice/{id}', 'ServiceController@edit')->name('editservice');
Route::get('/deleteservice/{id}', 'ServiceController@destroy')->name('deleteservice');
Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
});