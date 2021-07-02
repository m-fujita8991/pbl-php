@extends('layout.teacher_temp')
@section('title','login')
@section('content')
  <form method="post" action="" class="login">
  <p>UserID :<input type="text" name="userid" value=""></p>
  <p>Password :<input type="text" name="password" value=""></p>
@endsection
@section('footer','')
<footer>
    <div class = 'footer'></div>
    <button onclick="location.href='list'" style="position: absolute; left: 50%; top: 50%">login</button>
</footer>