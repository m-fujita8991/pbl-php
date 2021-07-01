<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pblcontroller;
use App\Http\Controllers\teachercontroller;

//教員
Route::get('login',[teachercontroller::class,'login']);

//OC参加者画面
Route::get('participant',[pblcontroller::class,'participant']);

