@extends('layout.teacher_temp')
@section('title','score')
@section('content')
    <p>　　名前 <input type="text" name="name" value=""></p>
    <p>　　参加者メモ</p>
    <textarea name="note"></textarea>
    <p>1. 　　　　　　　　　　<select name="item1">
        <option value='score1'>2</option>
        <option value='score2'>4</option>
        <option value='score3'>6</option>
        <option value='score4'>8</option>
    </select></p>
    <p>2. 　　　　　　　　　　<select name="item2">
        <option value='score1'>2</option>
        <option value='score2'>4</option>
        <option value='score3'>6</option>
        <option value='score4'>8</option>
    </select></p>
    <p>3. 　　　　　　　　　　<select name="item3">
        <option value='score1'>2</option>
        <option value='score2'>4</option>
        <option value='score3'>6</option>
        <option value='score4'>8</option>
    </select></p>
    <p>4. 　　　　　　　　　　<select name="item4">
        <option value='score1'>2</option>
        <option value='score2'>4</option>
        <option value='score3'>6</option>
        <option value='score4'>8</option>
    </select></p>
    <p>5. 　　　　　　　　　　<select name="item5">
        <option value='score1'>2</option>
        <option value='score2'>4</option>
        <option value='score3'>6</option>
        <option value='score4'>8</option>
    </select></p>
    <p>不合格の理由を記入してください</p>
    <textarea name="reason"></textarea>
@endsection
@section('footer','')
<footer>
   <div class = 'footer'></div>
   <button onclick="history.back()" >戻る</button>
   <button>決定</button>
</footer>