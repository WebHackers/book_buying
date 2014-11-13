<head>
	<title>图书推荐</title>
	<link rel = "stylesheet" type = "text/css" href =  "/css/book_recommend.css">
</head>
@extends('layouts.master')

@section('content')
<title>书籍推荐</title>
<div class = "commend">
<!--这里的书名，作者，出版年月，封面图片都是自动获取的-->	
<form name = "input" action = "./commit" method = "post">
	<b>书名：</b><input  type = "text" name = "bookname">&emsp; &emsp;   
	<b>作者：</b><input type = "text" name = "author"><br>
	<b>出版年月：</b><input type = "text" name = "time"><br>
	<span style ="position:fixed;top:86px; left:1053px;" ><b>封面：</b></span>
	 <textarea class = "textarea3"  name = "bookphoto"></textarea>
	<b>书籍介绍：</b><input placeholder = '书籍超链接'  style="height:31px;width:449px" type = "text" name = "introduce"><br>
	<b>书评信息：</b><input placeholder = '书评超链接'  style="height:31px;width:449px" type = "text" name = "bookcommit"><br>
	<b>书籍电子书下载：</b><input placeholder = '电子书超链接'  style="height:31px;width:449px" type = "text" name = "ebook"><br>
	<span style ="position:fixed;top:247px"><b>相关学习资源：</b></span>
	<textarea class = "textarea1"  placeholder = '资源超链接' name = "ebook"></textarea><br>
	<span style ="position:fixed;top:363px"><b>推荐人留言：</b></span>
	<textarea class = "textarea2"  name = "hostword"></textarea>
</form>
</div>
@stop


