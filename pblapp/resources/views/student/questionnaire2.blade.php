@extends('layout.student_temp')
@section('title','アンケート')
@section('content')
<form action = "questionnaire_results" method = "get">
@csrf
    <p style="font-size:70px; text-align:center; color:#000000;">Q.岡山県内の方で２週間以内に県外に外出しましたか？<br>
    <input type="radio" style="width:40px; height:40px;" name="student" value="1" required="required" >はい<br>
    <input type="radio" style="width:40px; height:40px;" name="student" value="0" required="required" >いいえ
    <input type ="submit" style="position: absolute; right: 20px; bottom: 10px; z-index: 2;" value = "決定">
</form>
@endsection 
@section('footer')
<footer>
    <div class = 'footer'></div>
    <button onclick="history.back()" >戻る</button></div>
    </footer>
@endsection