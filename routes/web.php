<?php

Route::get('/', function () {
    return view('angular');
});

Route::resource('tasks','TasksController');