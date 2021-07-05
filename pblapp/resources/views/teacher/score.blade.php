@extends('layout.teacher_temp')
@section('title','score')
@section('content')
    <p>参加者No <input type="text" name="sankaNo" value=""></p>
    <p>　　名前 <input type="text" name="name" value=""></p>
    <p>フリガナ <input type="text" name="hurigana" value=""></p>
    <p>参加日付 <select name="date" ></select></p>
    <p>参加学科 <input type="text" name="department" value=""></p>
    <p>参加者メモ <input type="text" name="note" value=""></p>
@endsection
@section('footer','')
<footer>
   <div class = 'footer'></div>
   <button>更新</button>
   <button onclick="history.back()" >戻る</button>
</footer>