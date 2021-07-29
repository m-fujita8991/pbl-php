@extends('layout.student_temp')
@section('title','参加票　確認画面')
@section('content')
<p class = "alert" style ="text-align:left">内容は間違いないですか？</br>近くの係員にお知らせください</p>
<div style ="position:absolute;top:30%;left:58%;font-size:40px;color:green;">
    参加者No：{{$item->sankasyananba}}</br>
    名前：{{$item->name}}</br>
    フリガナ：{{$item->name_hurigana}}</br>
    学校：{{$item->gakkoumei}}</br>
    @if($item->gakunen == 99)
    学年：-</br>
    @else
    学年：{{$item->gakunen}}</br>
    @endif
    生年月日:{{$item->birth}}</br>
    既卒:{{$item->kisotu}}</br>
    参加学科:{{$item->sankasyagakka}}</br>
    コース:{{$item->ko_su}}</br>
    
</div>
<form action = "koutuuhi" method = "get">
    <input type="checkbox"  style="width:40px; height:40px; font-size:25px; position: absolute; left: 0%; top: 53%;" value="1" required="required"> 
    <p style="font-size:40px; position: absolute; left: 3%; top: 48%;"> 確認しました。</p>  
    <input type ="submit" style="position: absolute; right: 20px; bottom: 10px; z-index: 2;" value = "決定">
@endsection 
@section('footer')
<footer>
    <div class = 'footer'></div>
    <button onclick="history.back()" >戻る</button></div>
    </footer>
@endsection