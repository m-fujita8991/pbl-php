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



//参加者
//OC参加者画面
Route::get('participant',[pblcontroller::class,'participant']);

//OCアンケート画面
Route::post('participant2',[pblcontroller::class,'participant2']);

//アンケート結果
Route::post('questionnaire_results',[pblcontroller::class,'questionnaire_results']);

//参加者No　入力画面
Route::get('sankasyaNo',[pblcontroller::class,'sankasyaNo']);

//参加票　入力画面
Route::post('sankahyou',[pblcontroller::class,'sankahyou']);

//参加票　確認画面
Route::post('sankahyoukakunin',[pblcontroller::class,'sankahyoukakunin']);

//交通費対象選択画面
Route::get('koutuuhi',[pblcontroller::class,'koutuuhi']);

//受付終了画面（交通費対象）
Route::post('uketukeowari',[pblcontroller::class,'uketukeowari']);

