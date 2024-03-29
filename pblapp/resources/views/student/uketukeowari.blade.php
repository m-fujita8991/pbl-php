@extends('layout.student_temp')
@section('title','受付終了　画面')
@section('content')
<form action = "participant" method = "get">
@csrf
@if($value != '1')
        <p style="font-size:70px; text-align:center; color:#000000;">受付終了です。<br>各教室に移動してください</p>
        <p style="font-size:50px; text-align:center; color:#000000;">受付番号：0120</p>
        <p style="font-size:60px; text-align:center; color:#ff0000;">＊受付番号は控えてください</p>
        @else
        <p style="font-size:40px; text-align:center; color:#000000;">{{$name}}</p>
        <p style="font-size:50px; text-align:center; color:#ff0000;">交通費対象地域です</p>
        <p style="font-size:50px; text-align:center; color:#000000;">交通費精算受付にお越しください</p>
        <p style="font-size:40px; text-align:center; color:#000000;">受付番号：0120</p>
        <p style="font-size:50px; text-align:center; color:#ff0000;">＊受付番号は控えてください</p>
        @endif
</form>
@endsection 
@section('footer')
<footer>
    <div class = 'footer'></div>
    <button onclick="history.back()" >戻る</button></div>
    </footer>
@endsection