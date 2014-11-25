<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
	<title>图书推荐</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type = "text/javascript" src = "/javascript/jQueryv2.1.0.js"></script>
	<script type = "text/javascript" src = "/bootstrap/js/bootstrap.min.js"></script> 
	<link rel = "stylesheet" type = "text/css" href = "/bootstrap/css/bootstrap.min.css">

</head>

<body>

    <div class="container">
    	<div class="col-md-2" style="margin: 80px 0 0 0;float: left;">
    		<a href="/" class="btn btn-default btn-lg btn-block" role="button" style="border:0;">推荐列表</a>
			<a href="/recommend" class="btn btn-default btn-lg btn-block active" role="button" style="border:0;">我要推荐</a>
			<a href="/personal" class="btn btn-default btn-lg btn-block" role="button" style="border:0;">个人中心</a>
			<a href="/admin" class="btn btn-default btn-lg btn-block" role="button" style="border:0;">购书管理</a>
    	</div>
    	<div class="col-md-9" style="margin: 50px 0 0 0;float: right;">
    		<form class="form-horizontal col-md-9" role="form" style="float:left;padding-left:20px;">
			  <div class="form-group">
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="target" placeholder="Please enter a link">
			    </div>
			  </div>
			</form>
			<button type="button" class="btn btn-info" id="auto" style="float: left;">戳我自动填写呦( ^ _ ^ )</button>

		    <br><br><br><br>

		    <img id="photo" style="float:right;margin-right:50px;" width="150px" height="200px" src="" alt="">

	        <form class="form-horizontal col-md-8" style="float:left;" role="form" action="/recommend/update" method="post">
	        	<fieldset>
				<legend></legend>

			  <div class="form-group" style="display:none;">
			    <div class="col-md-9">
			      <input type="text" class="form-control" name="book_pic" id="book_pic">
			    </div>
			  </div>

			  <div class="form-group" style="display:none;">
			    <div class="col-md-9">
			      <input type="text" class="form-control" name="buy_link" id="buy_link">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="book_name" class="col-md-2 control-label">图书名称</label>
			    <div class="col-md-9">
			      <input type="text" class="form-control" name="book_name" id="book_name">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="book_author" class="col-md-2 control-label">图书作者</label>
			    <div class="col-md-9">
			      <input type="text" class="form-control" name="book_author" id="book_author">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="book_pub" class="col-md-2 control-label">出版日期</label>
			    <div class="col-md-9">
			      <input type="text" class="form-control" name="book_pub" id="book_pub">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="book_price" class="col-md-2 control-label">图书价格</label>
			    <div class="col-md-9">
			      <input type="text" class="form-control" name="book_price" id="book_price">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="book_info" class="col-md-2 control-label">图书简介</label>
			    <div class="col-md-9">
			      <input type="text" class="form-control" name="book_info" id="book_info">
			    </div>
			  </div>

			  <div class="form-group">
			  	<label for="book_type" class="col-md-2 control-label">图书类型</label>
			  	<div class="col-md-9">
				  <select class = "form-control" name="book_type" id="book_type">
				  	<option></option>
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
			  </div>

			  <div class="form-group">
			    <label for="rec_type" class="col-md-2 control-label">推荐类型</label>
			    <div class="col-md-9">
					<label class="radio-inline">
					  <input type="radio" name="rec_type" id="rec_type" value="自选必读">自选必读
					</label>
					<label class="radio-inline">
					  <input type="radio" name="rec_type" id="rec_type" value="精品书籍">精品书籍
					</label>
				</div>
			  </div>

			  <div class="form-group">
			    <label for="rec_reason" class="col-md-2 control-label">推荐理由</label>
			    <div class="col-md-9">
			      <textarea class="form-control" name="rec_reason" id="rec_reason" rows="3"></textarea>
			    </div>
			  </div>

			  <div class="form-group">
			    <div class="col-md-offset-2 col-md-9">
			      <button type="submit" class="btn btn-default">提交推荐</button>
			    </div>
			  </div>
			</form>
    	</div>
	</div>

<script type="text/javascript">
	if($('#book_pic').val()!='')
	{
		$('#photo').attr('src', $('#book_pic').val());
	}
	$('#auto').click(function() {
		var target = $('#target').val();
		if(target == '')
		{
			alert('Please input a target link');
		}
		else
		{
			$.get(
			'/recommend/query',
			{
				target: target
			},
			function(data, status) {
				if(data==false||data['book_name']==undefined)
				{
					alert('Target URL is wrong');
				}
				else
				{
					$('#photo').attr('src', data['book_pic']);
					$('#buy_link').val(data['buy_link']);
					$('#book_pic').val(data['book_pic']);
					$('#book_name').val(data['book_name']);
					$('#book_author').val(data['book_author']);
					$('#book_price').val(data['book_price']);
					$('#book_info').val(data['book_info']);
					$('#book_pub').val(data['book_publish']);
				}
			});
		}
	});

</script>
<!--<div class = "commend">
<b>目标网站:</b><input type = "text" name = "buy_link" style = "width:400px">
<button type = "button" class = "btn btn-primary">自动填充</button><br><br>

<form action = "/recommend/update" method = "post" >
	<b>&nbsp;书&nbsp;&nbsp;名：</b><input  type = "text" name = "book_name">&emsp;&nbsp; &emsp;&emsp;  
	<b>作者：</b><input type = "text" name = "bool_author"><br><br>
	<b>出版年月：</b><input type = "text" name = "book_pub">&emsp; &emsp; 
	<b>价格：</b><input type = "text" name = "book_price" style = "width:200px">
	<span style ="position:fixed;top:106px; left:1053px;" ><b>封面：</b></span>
	 <textarea class = "textarea3"  name = "book_pic"></textarea>
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
</div>-->
</body>
</html>