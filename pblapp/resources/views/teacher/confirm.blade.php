@extends('layout.teacher_temp')
@section('title','confirm')
@section('content')
    <p style="font-size:25px;">　　　　　参加者No <input type="text" style="width:250px; height:30px; font-size:25px;" name="sankaNo" value=""></p>
    <p style="font-size:25px;">　　　　　　　名前 <input type="text" style="width:250px; height:30px; font-size:25px;" name="name" value=""></p>
    <p style="font-size:25px;">　　　　　フリガナ <input type="text" style="width:250px; height:30px; font-size:25px;" name="hurigana" value=""></p>
    <p style="font-size:25px;">　　　　　参加日付 <select name="date" style="width:250px; height:30px; font-size:25px;"></select></p>
    <p style="font-size:25px;">　　　　　参加学科 <input type="text" style="width:250px; height:30px; font-size:25px;" name="department" value=""></p>
    <p style="font-size:25px; position: absolute; left: 47%; top: 34%;">　　　　参加者メモ </p>
    <textarea name="note" style="width:250px; height:30px; font-size:25px; position: absolute; left: 55%; top: 47%;"></textarea>
@endsection
@section('footer','')
<footer>
   <div class = 'footer'></div>
   <button onclick="history.back()" >戻る</button>
   <button>更新</button>
</footer>
