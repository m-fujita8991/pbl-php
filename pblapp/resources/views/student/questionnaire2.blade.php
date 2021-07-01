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
@endsection