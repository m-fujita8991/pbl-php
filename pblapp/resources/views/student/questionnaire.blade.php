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
@endsection
