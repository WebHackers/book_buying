<head>
	<title>图书推荐</title>
	<link rel = "stylesheet" type = "text/css" href =  "/css/book_recommend.css">
</head>
@extends('layouts.master')

@section('content')
<title>书籍推荐</title>
<div class = "commend">
<!--这里的书名，作者，出版年月，封面图片都是自动获取的-->	
<form name = "input" action = "./commit" method = "post" >
	<b>目标网站:</b><input type = "text" name = "buy_link" style = "width:400px">
	<button type = "button" class = "btn btn-primary">自动填充</button><br><br>
	<b>&nbsp;书&nbsp;&nbsp;名：</b><input  type = "text" name = "bookname">&emsp;&nbsp; &emsp;&emsp;  
	<b>作者：</b><input type = "text" name = "author"><br><br>
	<b>出版年月：</b><input type = "text" name = "book_publish">&emsp; &emsp; 
	<b>价格：</b><input type = "text" name = "book_price" style = "width:200px">
	<span style ="position:fixed;top:106px; left:1053px;" ><b>封面：</b></span>
	 <textarea class = "textarea3"  name = "bookphoto"></textarea>
	 <span id ="book_infor"><b>图书简介：</b></span>
	<textarea type = "text" id = "book_info"  name = "book_info"></textarea>
	<span id = "type"><b>图书类别：</b></span>
	<div class = "book_type" name = "book_type">
	<select class = "form-control">
		<option>PHP</option>
		<option>数据库</option>
		<option>前端</option>
		<option>移动</option>
		<option>Java</option>
		<option>互联网</option>
		<option>基本理论</option>
		<option>其他</option>
	</select>
	</div>
	<span id = "rectp"><b>推荐类别：</b></span>
	<div class = "rec_type">
		<label class="radio-inline">
  			<input type="radio" name="rec_type" id="rec_type1" value="option1"> 自选必读
		</label>
		<label class="radio-inline">
  			<input type="radio" name="rec_type" id="rec_type2" value="option2"> 核心必读
		</label>
	</div>

	 <span id ="reason"><b>推荐理由：</b></span>
	<textarea class = "rec_reason"  name = "rec_reason"></textarea>
	<div class = "submit1">
		<button type = "button" class = "btn btn-success" name = "submit">提交</button>
	</div>
</form>
</div>
@stop


