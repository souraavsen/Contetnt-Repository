<?php

use Illuminate\Support\Facades\Route;


Route::get('/','App\Http\Controllers\appcontroller@home');
Route::post('/Sign-Up/save','App\Http\Controllers\appcontroller@save')->name('save');
Route::post('/login/check','App\Http\Controllers\appcontroller@loginCheck');
Route::get('/logout','App\Http\Controllers\appcontroller@logout');
Route::get('/contact','App\Http\Controllers\appcontroller@contact');

Route::get('/login','App\Http\Controllers\appcontroller@login');
Route::get('/Sign-Up','App\Http\Controllers\appcontroller@signup');

Route::group(['middleware'=>['AuthCheck']], function(){
    Route::get('/dashboard','App\Http\Controllers\appcontroller@Dashboard');
    Route::get('/my-courses','App\Http\Controllers\appcontroller@MyCourses');
    Route::get('/details/{id}','App\Http\Controllers\appcontroller@course_details');
    Route::get('/my-profile','App\Http\Controllers\appcontroller@profile');
    Route::get('/create-course','App\Http\Controllers\appcontroller@create_course');
    Route::post('/create-course','App\Http\Controllers\appcontroller@save_course');
});