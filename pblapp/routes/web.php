<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pblcontroller;

Route::get('start',[pblcontroller::class,'start']);

//OC参加者画面
Route::get('participant',[pblcontroller::class,'participant']);
