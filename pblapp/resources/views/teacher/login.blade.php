@extends('layout.teacher_temp')
@section('title','login')
@section('content')
  <form method="post" action="" class="login">
  <p style="font-size:50px; text-align:center;">UserID :<input type="text" style="width:400px; height:50px; font-size:25px;" name="userid" value=""></p>
  <p style="font-size:50px; text-align:center;">Password :<input type="text" style="width:400px; height:50px; font-size:25px;" name="password" value=""></p>
@endsection
@section('footer','')
<footer>
    <div class = 'footer'></div>
    <button onclick="location.href='list'" style="position: absolute; left: 47%; top: 80%; width:100px; height:50px; font-size:25px;">login</button>
</footer>