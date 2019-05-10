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

Route::get('/index', 'PostController@index')->name('posts.index');
Route::get('/index/{id}', 'PostController@show')->name('posts.show');

Route::get('/create', 'PostController@create')->name('posts.create');
Route::post('/store', 'PostController@store')->name('posts.store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/add', 'Qastscontroller@create')->name('Qasts.create');
Route::post('/qstore', 'Qastscontroller@store')->name('Qasts.store');
Route::get('/table', 'Qastscontroller@table')->name('Qasts.table');
Route::get('/addW', 'Qastscontroller@createW')->name('Qasts.createW');
Route::post('/astore', 'Qastscontroller@storew')->name('Qasts.storew');

//Route::get('/admin', 'Adminscontroller@dashboard')->name('Admins.dash');
Route::get('/exam', 'Examscontroller@show')->name('Exams.show');

Route::resource('/admin','adminController');
