@extends('layout.student_temp')
@section('title','受付終了　画面')
@section('content')
<form action = "participant" method = "get">
@csrf
@if($msg != '')
        
        @else

        @endif
</form>
@endsection 
@section('footer')
<footer>
    <div class = 'footer'></div>
    <button onclick="history.back()" >戻る</button></div>
    </footer>
@endsection