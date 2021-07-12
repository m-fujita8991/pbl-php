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
@endsection
@section('footer')

@endsection