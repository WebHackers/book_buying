<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
	<title>图书推荐</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bookBuy/public.css"/>
	<link rel="stylesheet" type="text/css" href="css/bookBuy/recommend.css"/>
	<link rel="stylesheet" type="text/css" href="frame/uikit/css/uikit.min.css"/>
	<script type="text/javascript" src="js/jquery2.1.0.js"></script>
	<script type="text/javascript" src="js/bookBuy/recommend.js"></script>
	<script type="text/javascript" src="frame/uikit/js/uikit.min.js"></script> 

</head>

<body class="uk-grid" id="container">

  <div class="uk-width-1-10" id="button">
    <a href="/" class="uk-button uk-button-large" type="button" id="link-1">推荐列表</a>
    <a href="/recommend" class="uk-button uk-button-large uk-active" type="button" id="link-2">我要推荐</a>
    <a href="/personal" class="uk-button uk-button-large" type="button" id="link-3">个人中心</a>
    <a href="/admin" class="uk-button uk-button-large" type="button" id="link-4">购书管理</a>
  </div>

  <div class="uk-width-1-10"><br></div>
	<div class="uk-width-2-10"><br></div>
	<div class="uk-width-4-10">
		<form class="uk-form uk-width-7-10" id="top_form">
				<input class="uk-width-1-1" id="target" type="text" placeholder="Enter a URL">
		</form>
		<button class="uk-button" id="query">戳我自动填充~</button>

		<form class="uk-form" action="recommend/update" method="post">
		  <fieldset>
		    <legend></legend>
	      <div class="uk-form-row">
	       	<label class="uk-form-label" for="name">书籍名称</label>
		    	<input type="text" placeholder="" id="name" name="name" class="uk-width-8-10">
		    </div>

		    <div class="uk-form-row">
		    	<label class="uk-form-label" for="author">书籍作者</label>
					<input type="text" placeholder="" id="author" name="author" class="uk-width-8-10">
				</div>

				<div class="uk-form-row">
		    	<label class="uk-form-label" for="time">出版时间</label>
					<input type="text" placeholder="" id="time" name="time" class="uk-width-8-10">
				</div>

				<div class="uk-form-row">
		    	<label class="uk-form-label" for="press">出版厂商</label>
					<input type="text" placeholder="" id="press" name="press" class="uk-width-8-10">
				</div>

				<div class="uk-form-row">
			    <label class="uk-form-label" for="price">书籍价格</label>
					<input type="text" placeholder="" id="price" name="price" class="uk-width-8-10">
				</div>

				<div class="uk-form-row">
			    <label class="uk-form-label" for="isbn">标准书号</label>
					<input type="text" placeholder="" id="isbn" name="isbn" class="uk-width-8-10">
				</div>

				<div class="uk-form-row">
			    <label class="uk-form-label" for="buy_link">购买网站</label>
					<input type="text" placeholder="" id="buy_link" name="buy_link" class="uk-width-8-10">
				</div>

				<div class="uk-form-row">
			    <label class="uk-form-label" for="info">书籍信息</label>
					<input type="text" placeholder="" id="info" name="info" class="uk-width-8-10">
				</div>

				<div class="uk-form-row">
			    <label class="uk-form-label" for="type">书籍类别</label>
					<select id="type" name="type">
						<option></option>
						<option>C++</option>
						<option>Java</option>
						<option>Javascript</option>
						<option>PHP</option>
						<option>Web小技术</option>
						<option>UML</option>
						<option>移动端</option>
						<option>前端</option>
						<option>小众后端</option>
						<option>操作系统</option>
						<option>数据挖掘</option>
						<option>数据库</option>
						<option>思维锻炼</option>
						<option>交互</option>
						<option>其他</option>
					</select>
				</div>

				<div class="uk-form-row">
	        <label class="uk-form-label" for="rec_type">推荐类别</label>
					<label><input type="radio" id="rec_type" name="rec_type" value="自选必读">自选必读</label>
					<label><input type="radio" id="rec_type" name="rec_type" value="精品推荐">精品推荐</label>
				</div>

				<div class="uk-form-row">
			    <label class="uk-form-label" for="rec_reason">推荐理由</label>
					<input type="text" placeholder="" id="rec_reason" name="rec_reason" class="uk-width-8-10">
				</div>

				<div class="uk-form-row" id="pic">
			    <label class="uk-form-label" for="pic_link">书籍图片</label>
					<input type="text" placeholder="" id="pic_link" name="pic_link" class="uk-width-8-10">
				</div>

				<div class="uk-form-row">
					<input class="uk-button uk-button-primary" id="submit_btn" type="submit">
				</div>
		    </fieldset>
		</form>

	</div>
  <div class="uk-width-2-10" id="pic_board">
  	<img id="photo" src="">
  </div>
  <div class="uk-width-1-10">
  	<a class="uk-button uk-button-large" href="./logout" style="background-color:#fff;">Logout</a>
  </div>
</body>
</html>