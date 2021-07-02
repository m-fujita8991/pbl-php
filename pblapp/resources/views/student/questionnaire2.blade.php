@extends('layout.student_temp')
@section('title','アンケート')
@section('content')
<form>
    <p style="font-size:60px; text-align:center; color:#000000">Q.岡山県内の方で２週間以内に県外に外出しましたか？<br>
    <input type="radio" style="width:40px; height:40px;" name="student" value="はい" >はい<br>
    <input type="radio" style="width:40px; height:40px;" name="student" value="いいえ" >いいえ
</form>
@endsection 
@section('footer')
<footer>
    <div class = 'footer'></div>
    <button onclick="location.href='sankasyaNo'" style="position: absolute; right: 20px; bottom: 10px">決定</button></div>
    <button onclick="history.back()" >戻る</button></div>
    </footer>
@endsection