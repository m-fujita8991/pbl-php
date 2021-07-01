@extends('layout.teacher_temp')
@section('title','login')
@section('content')
  <form method="post" action="" class="login">
  <p>UserID :<input type="text" name="userid" value=""></p>
  <p>Password :<input type="text" name="password" value=""></p>
  <input type="submit" value="login">
@endsection
@section('footer','')