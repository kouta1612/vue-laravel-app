<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/projects', 'ProjectsController@create');
Route::post('/projects', 'ProjectsController@store');
