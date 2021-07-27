@extends('layout.teacher_temp')
@section('title','score')
@section('content')
    <p>　　名前 <input type="text" name="name" value="" disabled></p>
    <p>　　参加者メモ</p>
    <textarea name="note" style="position: absolute; left: 4%; width:300px; height:200px; font-size:20px;" disabled></textarea>
    <p style="position: absolute; left: 35%; top: 45%;">1. 　　　　　　　　　　　　
    <select id="numbe1" name="number1">
        <option value="2">2</option>
        <option value="4" selected>4</option>
        <option value="6">6</option> 
        <option value="8">8</option>
    </select></p>
    <p style="position: absolute; left: 35%; top: 53%;">2. 　　　　　　　　　　　　
    <select id="numbe2" name="number2">
        <option value="2">2</option>
        <option value="4" selected>4</option>
        <option value="6">6</option> 
        <option value="8">8</option>
    </select></p>
    <p style="position: absolute; left: 35%; top: 61%;">3. 　　　　　　　　　　　　
    <select id="numbe3" name="number3">
        <option value="2">2</option>
        <option value="4" selected>4</option>
        <option value="6">6</option> 
        <option value="8">8</option>    
    </select></p>
    <p style="position: absolute; left: 35%; top: 69%;">4. 　　　　　　　　　　　　
    <select id="numbe4" name="number4">
        <option value="2">2</option>
        <option value="4" selected>4</option>
        <option value="6">6</option> 
        <option value="8">8</option>
    </select></p>
    <p style="position: absolute; left: 35%; top: 77%;">5. 　　　　　　　　　　　　
    <select id="numbe5" name="number5">
        <option value="2">2</option>
        <option value="4" selected>4</option>
        <option value="6">6</option> 
        <option value="8">8</option>
    </select></p>
    <p style="position: absolute; left: 66%; top: 38.5%;">不合格の理由を記入してください</p>
    <textarea name="reason" style="position: absolute; left: 66%; top: 51.5%; width:300px; height:200px; font-size:20px;"></textarea>
    
    <!-- <script type="text/javascript">
        no1 = document.getElementById('number1').value;
        no2 = document.getElementById('number2').value;
        no3 = document.getElementById('number3').value;
        no4 = document.getElementById('number4').value;
        no5 = document.getElementById('number5').value;
        sum = parseInt(no1) + parseInt(no2) + parseInt(no3) + parseInt(no4) + parseInt(no5)

        if(sum < 20){
            document.getElementById('otherColumnID').style.display = "";
            document.getElementById('textError').style.display = "none";
        }else if(sum >= 20){
            document.getElementById('otherColumnID').style.display = "none";
            document.getElementById('otherID').value = "";
            document.getElementById('textError').style.display = "none";
        }
    </script> -->
@endsection
@section('footer','')
<footer>
   <div class = 'footer'></div>
   <button onclick="location.href='list'" style="position: absolute; left: 43%; top: 90%; width:63px; height:30px; font-size:15px;">戻る</button>
   <button onclick="location.href='list'" style="position: absolute; left: 53%; top: 90%; width:63px; height:30px; font-size:15px;">決定</button>
</footer>