@extends('layout.student_temp')
@section('title','アンケート')
@section('content')
<form action = "participant2" method = "post">
@csrf
    <p style="font-size:70px; text-align:center; color:#000000;">Q.どこから来ましたか？<br>
    <input type="radio" style="width:40px; height:40px;" name="where" value="1" required="required" >岡山県内<br>
    <input type="radio" style="width:40px; height:40px;" name="where" value="0" required="required" >岡山県外
    <input type ="submit" style="position: absolute; right: 20px; bottom: 10px; z-index: 2;" value = "決定">
</form>
@endsection 
@section('footer')
<footer>
    <div class = 'footer'></div>
    <button onclick="history.back()" >戻る</button></div>
    </footer>
@endsection
