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
    <input type="checkbox"  style="width:40px; height:40px; font-size:25px; position: absolute; left: 48%; top: 47%; " value="1"> 確認しました。  
    </form>
    @endsection
@section('footer')

@endsection