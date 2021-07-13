@extends('layout.teacher_temp')
@section('title','list')
@section('content')
<!-- 日付 -->
<input type="date" id="today" style="position: absolute; left: 88.5%;"> 
<script type="text/javascript">
    //今日の日時を表示
        window.onload = function () {
            //今日の日時を表示
            var date = new Date()
            var year = date.getFullYear()
            var month = date.getMonth() + 1
            var day = date.getDate()
          
            var toTwoDigits = function (num, digit) {
              num += ''
              if (num.length < digit) {
                num = '0' + num
              }
              return num
            }
            
            var yyyy = toTwoDigits(year, 4)
            var mm = toTwoDigits(month, 2)
            var dd = toTwoDigits(day, 2)
            var ymd = yyyy + "-" + mm + "-" + dd;
            
            document.getElementById("today").value = ymd;
        }
</script>

<!-- csv -->
<a href="download.php">
    <button style="position: absolute; left: 79%;">csvダウンロード</button>
</a>

<!-- table -->
<div class="tab_wrap">
	<input id="tab1" type="radio" name="tab_btn" checked>
	<input id="tab2" type="radio" name="tab_btn">

	<div class="tab_area">
		<label class="tab1_label" for="tab1">参加者一覧</label>
		<label class="tab2_label" for="tab2">人数集約</label>
	</div>
	<div class="panel_area">
		<div id="panel1" class="tab_panel">
			<table border="1" style="border-collapse: collapse">
				<tr>
					<th>名前</th> <th>学校</th> <th>学年</th> <th>希望学科</th> <th>コース</th> <th>参加回数</th> <th>受付番号</th> <th>合否</th>
				</tr>
				<tr>
					
				</tr>
			</table>
		</div>
		<div id="panel2" class="tab_panel">
			<table border="1" style="border-collapse: collapse">
				<tr>
					<th>学科</th> <th>合計</th> <th>３年生以上</th> <th>２年生</th> <th>１年生</th>
				</tr>
				<tr>
						
				</tr>
			</table>
		</div>
	</div>
</div>

@endsection
@section('footer','')
<footer>
   <div class = 'footer'></div>
   <button onclick="location.href='login'" style="position: absolute; left: 75%; top: 80%; width:75px; height:35px; font-size:20px;">戻る</button>
</footer>
