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

Route::group(['middleware' => ['auth']], function () {
    Route::get('/questions', 'QuestionController@index')->name('questions');
    Route::get('/questions/create', 'QuestionController@create');
    Route::get('/questions/edit/{id}', 'QuestionController@edit');
    
    Route::post('/questions/store', 'QuestionController@store');
    Route::post('/questions/update/{id}', 'QuestionController@update');
    Route::get('/questions/delete/{id}', 'QuestionController@destroy');
});
