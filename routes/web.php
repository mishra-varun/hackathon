<?php

Route::get('/laravel', function () {
    return view('welcome');
});
Route::get('/feedback', 'FormController@index');
Route::get('/feedback/create', 'FormController@create');


//keep {id} files last
Route::get('/feedback/{id}', 'FormController@show');
/**
*
/ => welcome
/create => create new
/form => latest forms
/form/{id} => latest
/login
/register
/home => profile-name/designation/department
*
*/
Auth::routes();

Route::get('/profile', 'HomeController@index')->name('home');



//error page
Route::get('/{error}', 'MainController@error');
Route::get('/{error}/{error1}', 'MainController@error');
Route::get('/{error}/{error1}/{error2}', 'MainController@error');