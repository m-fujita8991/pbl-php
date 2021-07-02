@extends('layout.student_temp')
@section('title','アンケート')
@section('content')
<form>
    <p style="font-size:70px; text-align:center; color:#000000;">Q.どこから来ましたか？<br>
    <input type="radio" style="width:40px; height:40px;" name="student" value="岡山県内" >岡山県内<br>
    <input type="radio" style="width:40px; height:40px;" name="student" value="岡山県外" >岡山県外
</form>
@endsection 
@section('footer')
<footer>
    <div class = 'footer'></div>
    <button onclick="location.href='participant2'" style="position: absolute; right: 20px; bottom: 10px">決定</button></div>
    <button onclick="history.back()" >戻る</button></div>
    </footer>
@endsection
