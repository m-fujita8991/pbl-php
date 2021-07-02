@extends('layout.student_temp')
@section('title','参加者No　入力画面')
@section('content')
<form>
    <p style="font-size:70px; text-align:center; color:#000000;">
    <input type="radio" style="width:40px; height:40px;" name="student" value="初回" >初回<br>
    <input type="radio" style="width:40px; height:40px;" name="student" value="参加者No" >参加者No
    <input type="text" name="name" value="" >
</form>
@endsection 
@section('footer')
<footer>
    <div class = 'footer'></div>
    <button onclick="location.href=''" style="position: absolute; right: 20px; bottom: 10px">決定</button></div>
    <button onclick="history.back()" >戻る</button></div>
    </footer>
@endsection