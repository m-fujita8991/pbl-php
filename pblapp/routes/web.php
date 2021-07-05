<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pblcontroller;
use App\Http\Controllers\teachercontroller;

//教員
//login
Route::get('login',[teachercontroller::class,'login']);
//list
Route::get('list',[teachercontroller::class,'list']);
//confirm
Route::get('confirm',[teachercontroller::class,'confirm']);
//score
Route::get('score',[teachercontroller::class,'score']);

//OC参加者画面
Route::get('participant',[pblcontroller::class,'participant']);

//OCアンケート画面
Route::get('participant2',[pblcontroller::class,'participant2']);

//参加者No　入力画面
Route::get('sankasyaNo',[pblcontroller::class,'sankasyaNo']);

//参加票　入力画面
Route::get('sankahyou',[pblcontroller::class,'sankahyou']);