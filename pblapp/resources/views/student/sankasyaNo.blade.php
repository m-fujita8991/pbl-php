@extends('layout.student_temp')
@section('title','参加者No　入力画面')
@section('content')
<form action = "sankahyou" method = "post">
@csrf
    <p style="font-size:70px; text-align:center; color:#000000;">
    <input type="radio" style="width:40px; height:40px;" name="student" value="1" required="required" >初回<br>
    <input type="radio" style="width:40px; height:40px;" name="student" value="0" required="required" >２回目以降<br>
    <ddd>参加者ナンバー入力</ddd>
    <input type="text" name="name" value="" style="font-size:70px; width: 930px; height: 70px;" placeholder="(例)：OC20000101001"><br>
    生年月日<input type="date" name="calendar" max="9999-12-31" style="font-size:70px; width: 500px; height: 70px;">
    <input type ="submit" style="position: absolute; right: 20px; bottom: 10px; z-index: 2;" value = "決定">
</form>
@endsection 
@section('footer')
<footer>
    <div class = 'footer'></div>
    <button onclick="history.back()" >戻る</button></div>
    </footer>
@endsection