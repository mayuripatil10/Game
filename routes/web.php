<?php



Route::get('/', function ()
{

    return view('welcome');
});

Route::get('/infoteacher', function () {
    return view('infoteacher');
});

Route::get('/chpterbtn', function () {
    return view('chpterbtn');
});


Route::get('/radiocheck', function () {
    return view('radiocheck');
});

Auth::routes();
Route::get('/game', 'GameController@index');
Route::get('/retrive', 'userController@find');

Route::get('/home', 'HomeController@index')->name('home');