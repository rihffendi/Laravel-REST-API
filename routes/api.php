<?php



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::resource('/','MySystemController');

Route::get('/delete/{id}','MySystemController@destroy')->name('delete');
Route::get('/{id}/edit','MySystemController@edit')->name('edit');
Route::put('/{id}','MySystemController@update')->name('update');