<?php

Route::get('/projects', 'ProjectsController@create');
Route::post('/projects', 'ProjectsController@store');
