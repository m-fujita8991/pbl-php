@extends('layout.teacher_temp')
@section('title','login')
@section('content')
  <script type="text/javascript" language="javascript">
    var flg = 0
    function onButtonClick() {
      if(target1.innerText == document.forms.form1.userid.value && target2.innerText == document.forms.form1.password.value){
        flg++;
      }
      if(flg == 1){
        
      }
    }
  </script>
  <form method="post" action="" class="login" name="form1">
  <p style="font-size:50px; text-align:center;">UserID :<input type="text" style="width:400px; height:50px; font-size:25px;" name="userid" value=""></p>
  <p style="font-size:50px; text-align:center;">Password :<input type="password" style="width:400px; height:50px; font-size:25px;" name="password" value=""></p>
@endsection
@section('footer','')
<footer>
    <div class = 'footer'></div>
    <button onclick="location.href='list'" style="position: absolute; left: 47%; top: 80%; width:100px; height:50px; font-size:25px;">login</button>
</footer>