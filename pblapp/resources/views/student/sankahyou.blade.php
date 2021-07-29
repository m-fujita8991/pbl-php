@extends('layout.student_temp')
@section('title','参加票　入力画面')
@section('header')
<script language="javascript" type="text/javascript"> 
var TEST_OBJECT = {
   onSearchFieldChange : function(value){
      var selectBox = document.getElementById("my_select_list");
      var items = selectBox.children;
      if (value === "") {
         for(var i=items.length-1; i>=0; i--){
            items[i].style.display = "";
            items[i].selected = false;
         }
         return;
      }
 
      var reg = new RegExp(".*"+value+".*","i");
      for(var i=items.length-1; i>=0; i--){
         if ( items[i].textContent.match(reg) ){
            items[i].style.display = "";
         } else {
            items[i].style.display = "none";
         }
         items[i].selected = false;
      }
   }
}
</script> 
@endsection
@section('content')
@if($item =='')
<form action = "sankahyoukakunin" method = "post">
@csrf
<p style="font-size:50px; color:#000000;text-align:center">             参加者No <input type="text" style="font-size:70px; width: 930px; height: 70px;" name="number" value="{{$number}}"readonly></p>
    <p style="font-size:25px; color:#000000;">　　　　　名前 　　<input type="text" style="width:250px; height:30px; font-size:25px;" name="name"required="required"></p>
    <p style="font-size:25px; color:#000000;">　　　　　フリガナ <input type="text" style="width:250px; height:30px; font-size:25px;" name="hurigana" required="required"></p>
    <p style="font-size:25px; color:#000000;">         <input onchange="TEST_OBJECT.onSearchFieldChange(this.value);"style="width: 140px; height:30px;" placeholder="岡山の高校検索"/></p>
                                                        学校名　 <select id = "my_select_list"style="width:400px; height:30px; font-size:25px;" name = "school"required="required">
                                                           @foreach ($school as $highschool)
                                                                <option>{{$highschool->gakkoumei}}</option>
                                                           @endforeach
                                                        </select>
    <p style="font-size:25px; color:#000000;">　　　　　学年 　　<select style="width:250px; height:30px; font-size:25px;" name="grade"required="required">
                                                                    <option value="1" >1</option>
                                                                    <option value="2" >2</option>
                                                                    <option value="3" >3</option>
                                                                    <option value="99" >-</option>
                                                                </select>
    <p style="font-size:25px; color:#000000;">　　　　　生年月日 <input type="date" max="9999-12-31" style="width:250px; height:30px; font-size:25px;" name="birth"required="required"></p>
    <p style="font-size:25px; position: absolute; left: 48%; top: 47%; color:#000000;">　　既卒 　   <input type="radio" style="width:250px; height:30px; font-size:25px;" name="department" value="既卒"required="required"></p>
    <p style="font-size:25px; position: absolute; left: 48%; top: 50%; color:#000000;">　　在学中 　 <input type="radio" style="width:250px; height:30px; font-size:25px;" name="department" value="在学中"required="required"></p>
    <p style="font-size:25px; position: absolute; left: 47%; top: 55%; color:#000000;">　　参加日　  <input type="text" style="width:250px; height:30px; font-size:25px;" name="date" value="{{$now}}"readonly></p>
    <p style="font-size:25px; position: absolute; left: 47%; top: 63%; color:#000000;">　　参加学科 <select style="width:250px; height:30px; font-size:25px;" name="gakka" required="required">
                                                                                                    @foreach($department as $dep)
                                                                                                        <option>{{$dep->sankagakka}}</option>
                                                                                                    @endforeach
                                                                                                    </select>
    <p style="font-size:25px; position: absolute; left: 48%; top: 71%; color:#000000;">　　ショートコース　   <input type="radio" style="width:250px; height:30px; font-size:25px;" name="course" value="ショート"required="required"></p>
    <p style="font-size:25px; position: absolute; left: 48%; top: 79%; color:#000000;">　　フルコース 　 <input type="radio" style="width:250px; height:30px; font-size:25px;" name="course" value="フル"required="required"></p>
    <input name="hide" type="hidden" value="0">
    <input type ="submit" style="position: absolute; right: 20px; bottom: 10px; z-index: 2;" value = "決定">
</form>
@else
<form action = "sankahyoukakunin" method = "post">
@csrf
<p style="font-size:50px; color:#000000; text-align:center">参加者No<input type="text" style="font-size:70px; width: 930px; height: 70px;" name="number" value="{{$item -> getsankasyaNO()}}"readonly> </p>
    <p style="font-size:25px; color:#000000;">　　　　　名前 　　<input type="text" style="width:250px; height:30px; font-size:25px;" name="name"value ="{{$item -> getName()}}"readonly></p>
    <p style="font-size:25px; color:#000000;">　　　　　フリガナ <input type="text" style="width:250px; height:30px; font-size:25px;" name="hurigana" value = "{{$item -> getHurigana()}}"readonly></p>
    <p style="font-size:25px; color:#000000;">　　　　　学校名 　<input type="text" style="width:250px; height:30px; font-size:25px;" name="hurigana" value = "{{$item -> getGakkoumei()}}"readonly></p>
    <p style="font-size:25px; color:#000000;">　　　　　学年 　　<select style="width:250px; height:30px; font-size:25px;" name="grade"required="required">
                                                                    <option value="1" >1</option>
                                                                    <option value="2" >2</option>
                                                                    <option value="3" >3</option>
                                                                    <option value="99" selected>-</option>
                                                                </select>
    <p style="font-size:25px; color:#000000;">　　　　　生年月日 {{$item -> getBirth()}}</p>
    <p style="font-size:25px; position: absolute; left: 48%; top: 47%; color:#000000;">　　既卒 　   {{$item -> getKisotu()}}</p>
    <p style="font-size:25px; position: absolute; left: 47%; top: 55%; color:#000000;">　　参加日　  <input type="text" style="width:250px; height:30px; font-size:25px;" name="date" value="{{$now}}"readonly>
    <p style="font-size:25px; position: absolute; left: 47%; top: 63%; color:#000000;">　　参加学科   <select style="width:250px; height:30px; font-size:25px;" name="gakka" required="required">
                                                                                                    @foreach($department as $dep)
                                                                                                        <option>{{$dep->sankagakka}}</option>
                                                                                                    @endforeach
                                                                                                    </select></p>
    <p style="font-size:25px; position: absolute; left: 48%; top: 71%; color:#000000;">　　ショートコース　 <input type="radio" style="width:250px; height:30px; font-size:25px;" name="course" value="ショート"required="required"></p>
    <p style="font-size:25px; position: absolute; left: 48%; top: 79%; color:#000000;">　　フルコース 　 <input type="radio" style="width:250px; height:30px; font-size:25px;" name="course" value="フル"required="required"></p>
    <input name="hide" type="hidden" value="1">
    <input type ="submit" style="position: absolute; right: 20px; bottom: 10px; z-index: 2;" value = "決定">
</form>
@endif
@endsection 
@section('footer')
<footer>
    <div class = 'footer'></div>
    </footer>
@endsection