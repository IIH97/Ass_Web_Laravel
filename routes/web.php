<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/patients', function () {
    return view('patients.index');
});

Route::get('/NewPatients', function () {
    return view('patients.create');
});

Route::get('/help', function () {
    return view('help');
});

Route::resource('patients','PatientController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
