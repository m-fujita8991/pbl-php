@extends('layout.student_temp')
@section('title','参加票　入力画面')
@section('content')
<header>
    <form>
        <p style="font-size:60px; text-align:center; color:#000000"><br>
        <p>参加者No<input type="text" name="name" value="" style="font-size:60px; text-align:center; color:#000000"></p>
    </form>
</header>
@endsection 
@section('footer')
<footer>
    <div class = 'footer'></div>
    <button onclick="location.href='" style="position: absolute; right: 20px; bottom: 10px">決定</button></div>
    <button onclick="history.back()" >戻る</button></div>
    </footer>
@endsection