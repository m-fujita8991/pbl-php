<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pblcontroller;

Route::get('login',[pblcontroller::class,'login']);

//OC参加者画面
Route::get('participant',[pblcontroller::class,'participant']);
