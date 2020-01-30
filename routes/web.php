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

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

Route::get('/pencarian', 'ApiController@index');
Route::get('/dabat', 'ApiController@data_obat');
Route::get('/key',function(){
    return Str::   random(30);
});

Route::group(['middleware' => ['auth', 'checkRole:admin,apotek']], function () {
    Route::get('/dashboard', 'DashboardController@dashboard');
});

Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {
    Route::get('/apotek', 'ApotekController@index');
    Route::post('/apotek/create', 'ApotekController@create');
    Route::get('/apotek/edit/{id}', 'ApotekController@edit');
    Route::post('/apotek/update/{id}', 'ApotekController@update');
    Route::get('/apotek/delete/{id}', 'ApotekController@delete');
    Route::get('/apotek/profile/{id}', 'ApotekController@profile');
});



Route::group(['middleware' => ['auth', 'checkRole:apotek']], function () {
    Route::get('/obat', 'ObatController@index');
    Route::post('/obat/create', 'ObatController@create');
    Route::post('/obat/import', 'ObatController@importexcel')->name('obat.import');
});
