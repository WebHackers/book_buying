<!DOCTYPE HTML>
<html lang = "zh-CN">
	<head>
		<title>细说PHP</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type = "text/javascript" src = "/bootstrap/js/bootstrap.min.js"></script>  
	<script type = "text/javascript" src = "/bootstrap/js/jquery-1.11.1.min.js"></script> 
	<link rel = "stylesheet" type = "text/css" href = "/bootstrap/css/bootstrap.min.css">
	<link rel = "stylesheet" type = "text/css" href = "/bootstrap/css/bootstrap-theme.css">
	<link rel = "stylesheet" type = "text/css" href = "/css/book_content.css">
	</head>
	<body>
		<div class = "row " id = "first_line">
			<div class = "col-md-4">
				<label class = "col-sm-3 control-label" >书名：</label>
				<input type = "text" name = "book_name" class = "col-sm-4 form-control" id = "input_type">
			</div>

			<div class = "col-md-4">
				<label class = "col-sm-3 control-label" >作者: </label>
				<input type = "text" name = "book_pub" class = "col-sm-4 form-control" id = "input_type">
			</div>
		</div>
		<br>
		<div class = "row">
			<div class = "col-md-4">
				<label class = "col-sm-4 control-label">出版日期:</label>
				<input type = "text" name = "book_publish" class = "col-sm-4 form-control" id = "input_type">
			</div>
			<div class = "col-md-4">
				<label class = "col-sm-4 control-label">价格:</label>
				<input type = "text" name = "book_price" class = "col-sm-4 form-control" id = "input_type">
			</div>
		</div>
		<br>
		<div class = "row">
			<div class = "col-md-4">
				<label class = "col-sm-4 control-label">书本类别:</label>
				<input type = "text" name = "book_type" class = "col-sm-4 form-control" id = "input_type">
			</div>
			<div class = "col-md-4">
				<label class = "col-sm-4 control-label">推荐类别:</label>
				<input type = "text" name = "rec_type" class = "col-sm-4 form-control" id = "input_type">
			</div>
		</div>
		<br>
		<div class = "row">
			<div class = "col-md-4">
				<label class = "col-sm-4 control-label">图书简介:</label>
				<textarea class = "form-control" rows = "4" id = "introduce"></textarea>
			</div>
		</div>
		<br>
		<div class = "row">
			<div class = "col-md-4">
				<label class = "col-sm-4 control-label">推荐人:</label>
				<input type = "text" name = "book_type" class = "col-sm-4 form-control" id = "input_type">
			</div>
			<div class = "col-md-4">
				<label class = "col-sm-4 control-label">推荐时间:</label>
				<input type = "text" name = "rec_type" class = "col-sm-4 form-control" id = "input_type">
			</div>
		</div>
		<br><br>
		<div class = "row">
			<div class = "col-md-8">
				<label class = "col-sm-12">
					<button class = "btn btn-success">查看留言<span class = "caret"></span></button>
				</label>
		<br><br><br><br><br>
		<div class = "row">
			<div class = "col-md-8">
				<label class = "col-sm-4 control-label">我要留言:</label>
				<textarea class = "form-control" rows = "4" id = "introduce"></textarea>
			</div>
		</div>	
		<br><br>
		<div id = "submitcom">
			<input type = "submit" name = "submit" class = "btn btn-primary">
		</div>	
	</body>
</html>