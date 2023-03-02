<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mycontroller;


Route::get('/', function () {
    return view('welcome');
});

Route::get('users', function () {
    return view('users');
});




Route::post('controller',[mycontroller::class,'index']);
