@extends('layout.teacher_temp')
@section('title','score')
@section('content')
    <p>　　名前 <input type="text" name="name" value=""></p>
    <p>　　参加者メモ</p>
    <textarea name="note" style="position: absolute; left: 4%; width:300px; height:200px; font-size:20px;"></textarea>
    <p style="position: absolute; left: 35%; top: 45%;">1. 　　　　　　　　　　　　<select name="item1">
        <option value='score1'>2</option>
        <option value='score2'>4</option>
        <option value='score3'>6</option> 
        <option value='score4'>8</option>
    </select></p>
    <p style="position: absolute; left: 35%; top: 53%;">2. 　　　　　　　　　　　　<select name="item2">
        <option value='score1'>2</option>
        <option value='score2'>4</option>
        <option value='score3'>6</option>
        <option value='score4'>8</option>
    </select></p>
    <p style="position: absolute; left: 35%; top: 61%;">3. 　　　　　　　　　　　　<select name="item3">
        <option value='score1'>2</option>
        <option value='score2'>4</option>
        <option value='score3'>6</option>
        <option value='score4'>8</option>
    </select></p>
    <p style="position: absolute; left: 35%; top: 69%;">4. 　　　　　　　　　　　　<select name="item4">
        <option value='score1'>2</option>
        <option value='score2'>4</option>
        <option value='score3'>6</option>
        <option value='score4'>8</option>
    </select></p>
    <p style="position: absolute; left: 35%; top: 77%;">5. 　　　　　　　　　　　　<select name="item5">
        <option value='score1'>2</option>
        <option value='score2'>4</option>
        <option value='score3'>6</option>
        <option value='score4'>8</option>
    </select></p>
    <p style="position: absolute; left: 66%; top: 38.5%;">不合格の理由を記入してください</p>
    <textarea name="reason" style="position: absolute; left: 66%; top: 51.5%; width:300px; height:200px; font-size:20px;"></textarea>
@endsection
@section('footer','')
<footer>
   <div class = 'footer'></div>
   <button onclick="history.back()" style="position: absolute; left: 43%; top: 90%; width:63px; height:30px; font-size:15px;">戻る</button>
   <button onclick="location.href='list'" style="position: absolute; left: 53%; top: 90%; width:63px; height:30px; font-size:15px;">決定</button>
</footer>