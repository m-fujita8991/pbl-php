@extends('layout.student_temp')
@section('title','アンケート　結果')
@section('header')
    <style>
        p.alert {
            font-size:50pt;
            color:red;
            text-align:center;
        }
    </style>
@endsection
@section('content')
    <p class ="alert">{{$msg}}</p>
    <form>
    <input type="checkbox"  style="width:40px; height:40px; font-size:25px; position: absolute; left: 45%; top: 53%;" value="1" required="required"> 
    <p style="font-size:40px; position: absolute; left: 48%; top: 47%;"> 確認しました。</p>  
    <input type ="submit" style="position: absolute; right: 20px; bottom: 10px; z-index: 2;" value = "決定">
    </form>
    @endsection
@section('footer')
<footer>
    <div class = 'footer'></div>
    <button onclick="history.back()" >戻る</button></div>
    </footer>
@endsection