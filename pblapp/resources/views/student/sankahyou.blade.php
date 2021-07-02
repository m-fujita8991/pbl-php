@extends('layout.student_temp')
@section('title','参加票　入力画面')
@section('content')
<body>
        <p style="font-size:50px; text-align: center; color:#000000;">参加者No<input type="text" name="name" value="" style="font-size:60px; color:#000000"></p> 
        <p style="font-size:30px; text-align: rigth; color:#000000; letter-spacing: 1em;">名前<input type="text" name="name" value="" style="font-size:40px; color:#000000 "></p>
        <p style="font-size:30px; text-align: rigth; color:#000000;">ふりがな<input type="text" name="name" value="" style="font-size:40px; color:#000000"></p>
        <p style="font-size:30px; text-align: rigth; color:#000000; letter-spacing: 0.33em;">学校名<input type="text" name="name" value="" style="font-size:40px; color:#000000"></p>
        <p style="font-size:30px; text-align: rigth; color:#000000; letter-spacing: 1em;">学年<input type="text" name="name" value="" style="font-size:40px; color:#000000"></p>
        <p style="font-size:30px; text-align: rigth; color:#000000;">生年月日<input type="text" name="name" value="" style="font-size:40px; color:#000000"></p>
        <p style="font-size:30px; text-align: left; color:#000000;">既卒<input type="text" name="name" value="" style="font-size:40px; color:#000000"></p>  
        

</body>
@endsection 
@section('footer')
<footer>
    <div class = 'footer'></div>
    <button onclick="location.href='" style="position: absolute; right: 20px; bottom: 10px">決定</button></div>
    <button onclick="history.back()" >戻る</button></div>
    </footer>
@endsection