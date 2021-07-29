@extends('layout.teacher_temp')
@section('title','confirm')
@section('content')
    <p style="font-size:25px;">　　　　　参加者No <input type="text" style="width:250px; height:30px; font-size:25px;" name="sankaNo" value="{{$item->sankasyananba}}" disabled></p>
    <p style="font-size:25px;">　　　　　　　名前 <input type="text" style="width:250px; height:30px; font-size:25px;" name="name" value="{{$item->name}}" disabled></p>
    <p style="font-size:25px;">　　　　　フリガナ <input type="text" style="width:250px; height:30px; font-size:25px;" name="hurigana" value="{{$item->name_hurigana}}" disabled></p>
    <p style="font-size:25px;">　　　　　参加日付 <select name="date" style="width:250px; height:30px; font-size:25px;"></select></p>
    <p style="font-size:25px;">　　　　　参加学科 <input type="text" style="width:250px; height:30px; font-size:25px;" name="department" value="{{$item->sankasyagakka}}" disabled></p>
    <p style="font-size:25px; position: absolute; left: 47%; top: 28.5%;">　　　　参加者メモ </p>
    <form action="confirm" method ="post">
        @csrf
    <input type = "hidden" name = "hiddnn" value = "0">
    <input type = "hidden" name = "hide" value = "{{$item->sankasyananba}}">
    <textarea name="note" style="width:450px; height:200px; font-size:25px; position: absolute; left: 55%; top: 40%;">{{$item->memo}}</textarea>
    <input type ="submit"style="position: absolute; left: 85%; top: 80%; width:75px; height:35px; font-size:20px;" value ="更新">
    </form>
@endsection
@section('footer','')
<footer>
   <div class = 'footer'></div>
   <button onclick="location.href='list'" style="position: absolute; left: 75%; top: 80%; width:75px; height:35px; font-size:20px;">戻る</button>
</footer>
