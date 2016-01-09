<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

 Route::get('/', function ()
 {
     return redirect('mvc/tasks');
 });

Route::group(['prefix' => 'mvc', 'middleware' => 'web'], function () {

    Route::resource('tasks', 'MVC\TaskController');

});

Route::group(['prefix' => 'mvvm', 'middleware' => 'web'], function () {

    Route::get('list', function (){
        return view('mvvm.list');
    });
    Route::resource('tasks', 'MVVM\TaskController');

});
Route::group(['prefix' => 'mvcvm', 'middleware' => 'web'], function () {

    Route::get('list', function (){
        return redirect('index.html');
    });
    Route::resource('tasks', 'MVCVM\TaskController');

});
