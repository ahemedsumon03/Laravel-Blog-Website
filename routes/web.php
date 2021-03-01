<?php

use Illuminate\Support\Facades\Route;



Route::get('/','TrackIPAddressController@TrackIp');
Route::post('/contactinsert','ContactController@insertData');
Route::get('/courses','CoursesController@CoursesIndex');
Route::get('/projects','ProjectsController@ProjectsIndex');
Route::get('/privacy','PrivacyController@PrivacyIndex');
Route::get('/tearms','TearmsController@TearmsIndex');
Route::get('/contact','ContactController@ContactIndex');

