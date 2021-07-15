@extends('layout.student_temp')
@section('title','参加票　入力画面')
@section('content')
<form>
@csrf
<p style="font-size:50px; color:#000000; text-align:center">参加者No {{$item -> getsankasyaNO()}}</p>
    <p style="font-size:25px; color:#000000;">　　　　　名前 　　{{$item -> getName()}}</p>
    <p style="font-size:25px; color:#000000;">　　　　　フリガナ {{$item -> getHurigana()}}</p>
    <p style="font-size:25px; color:#000000;">　　　　　学校名 　{{$item -> getGakkoumei()}}</p>
    <p style="font-size:25px; color:#000000;">　　　　　学年 　　<input type="text" style="width:250px; height:30px; font-size:25px;" name="department" value=""></p>
    <p style="font-size:25px; color:#000000;">　　　　　生年月日 {{$item -> getBirth()}}</p>
    <p style="font-size:25px; position: absolute; left: 48%; top: 47%; color:#000000;">　　既卒 　   {{$item -> getKisotu()}}</p>
    <p style="font-size:25px; position: absolute; left: 47%; top: 55%; color:#000000;">　　参加日　  <input type="text" style="width:250px; height:30px; font-size:25px;" name="department" value=""></p>
    <p style="font-size:25px; position: absolute; left: 47%; top: 63%; color:#000000;">　　参加学科  <input type="text" style="width:250px; height:30px; font-size:25px;" name="department" value=""></p>
</form>
@endsection 
@section('footer')
<footer>
    <div class = 'footer'></div>
    <button onclick="location.href='sankahyoukakunin' "style="position: absolute; right: 20px; bottom: 10px">決定</button></div>
    <button onclick="history.back()" >戻る</button></div>
    </footer>
@endsection