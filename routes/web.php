<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/feedback', 'FormController@index');
Route::get('/feedback/create', 'FormController@create');
Route::post('/feedback/store', 'FormController@store');
Route::get('/feedback/store', 'ActivityController@index');
//keep {id} files last
Route::get('/feedback/{id}', 'FormController@show');
Route::get('/feedback/{id}/result','ResultController@analysis');
Route::post('/fill','ResultController@fill');
Route::get('/fill', 'ActivityController@index');

Route::get('/notice/{id}', 'MainController@show');
Route::post('/notice/{id}', 'MainController@generate');
Route::get('/notice', 'MainController@pdf');

Route::get('/report/{id}', 'ReportController@show');
Route::post('/report/{id}', 'ReportController@generate');
Route::get('/report', 'ReportController@create');

Auth::routes();

Route::get('/profile', 'HomeController@index')->name('home');


//error page
Route::get('/{error}', 'ActivityController@index');
Route::get('/{error}/{error1}', 'ActivityController@index');
Route::get('/{error}/{error1}/{error2}', 'ActivityController@index');
Route::post('/{error}', 'ActivityController@index');
Route::post('/{error}/{error1}', 'ActivityController@index');
Route::post('/{error}/{error1}/{error2}', 'ActivityController@index');