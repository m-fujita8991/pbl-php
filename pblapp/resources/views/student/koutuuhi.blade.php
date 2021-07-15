@extends('layout.student_temp')
@section('title','交通費対象地域選択')
@section('content')
<form action = "uketukeowari" method = "post">
@csrf
    <p style="font-size:70px; text-align:center; color:#000000;">
    <input type="radio" style="width:40px; height:40px;" name="student" value="0" required="required">岡山県内からお越しの方<br>
       <select name="tiikimei" style=" font-size:30px; width:300px; height:50px;">
          <option value="岡山市" >岡山市</option>
          <option value="選択肢2">選択肢2</option>
          <option value="選択肢3">選択肢3</option>
       </select><br><br>
    <input type="radio" style="width:40px; height:40px;" name="student" value="1" required="required">岡山県外からお越しの方<br>
    <input type="text" name="name" value="" maxlength="15" style="font-size:70px; width: 1000px; height: 70px;">
    <input type ="submit" style="position: absolute; right: 20px; bottom: 10px; z-index: 2;" value = "決定">
</form>
@endsection 
@section('footer')
<footer>
    <div class = 'footer'></div>
    <button onclick="history.back()" >戻る</button></div>
    </footer>
@endsection