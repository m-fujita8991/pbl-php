@extends('layout.teacher_temp')
@section('title','list')
@section('content')
<input type="date">
<a href="download.php">
    <button>csvダウンロード</button>
</a>
<div class="tab_wrap">
	<input id="tab1" type="radio" name="tab_btn" checked>
	<input id="tab2" type="radio" name="tab_btn">
	<input id="tab3" type="radio" name="tab_btn">

	<div class="tab_area">
		<label class="tab1_label" for="tab1">tab1</label>
		<label class="tab2_label" for="tab2">tab2</label>
		<label class="tab3_label" for="tab3">tab3</label>
	</div>
	<div class="panel_area">
		<div id="panel1" class="tab_panel">
			<p>panel1</p>
		</div>
		<div id="panel2" class="tab_panel">
			<p>panel2</p>
		</div>
		<div id="panel3" class="tab_panel">
			<p>panel3</p>
		</div>
	</div>
</div>

@endsection
@section('footer','')
<footer>
   <div class = 'footer'></div>
   <button onclick="history.back()" style="position: absolute; left: 75%; top: 80%; width:75px; height:35px; font-size:20px;">戻る</button>
</footer>
