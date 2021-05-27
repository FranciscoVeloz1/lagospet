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

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/profile', 'Perfil@index');

//Animals routes
Route::get('/animals', 'Animales@index');
Route::get('/animals/add', 'Animales@create');
Route::post('/animals/add', 'Animales@store');
Route::get('/animals/edit/{id}', 'Animales@edit');
Route::post('/animals/edit/{id}', 'Animales@update');
Route::get('/animals/delete/{id}', 'Animales@destroy');
Route::get('/api/animals', 'Animales@list');

//User routes
Route::get('/users', 'Usuarios@index');
Route::get('/users/edit/{id}', 'Usuarios@edit');
Route::post('/users/edit/{id}', 'Usuarios@update');
Route::get('/users/delete/{id}', 'Usuarios@destroy');
Route::get('/api/users', 'Usuarios@list');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
