<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/feedback', 'FormController@index');
Route::get('/feedback/create', 'FormController@create');
Route::post('/feedback/store', 'FormController@store');
Route::get('/feedback/store', 'MainController@error');
//keep {id} files last
Route::get('/feedback/{id}', 'FormController@show');
Route::get('/feedback/{id}/result','ResultController@analysis');
Route::post('/fill','ResultController@fill');
Route::get('/fill', 'MainController@error');

Route::post('/notice/{id}', 'MainController@generate');
Route::get('/notice/{id}', 'MainController@show');
Route::get('/notice', 'MainController@pdf');

Route::post('/report/{id}', 'ReportController@generate');
Route::get('/report/{id}', 'ReportController@show');
Route::get('/report', 'ReportController@create');

Auth::routes();

Route::get('/profile', 'HomeController@index')->name('home');


//error page
Route::get('/{error}', 'MainController@error');
Route::get('/{error}/{error1}', 'MainController@error');
Route::get('/{error}/{error1}/{error2}', 'MainController@error');
Route::post('/{error}', 'MainController@error');
Route::post('/{error}/{error1}', 'MainController@error');
Route::post('/{error}/{error1}/{error2}', 'MainController@error');