<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
	<title>主页</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<script type = "text/javascript" src = "/bootstrap/js/bootstrap.min.js"></script> 
	<script type = "text/javascript" src = "/bootstrap/js/npm.js"></script> 
	<script type = "text/javascript" src = "/bootstrap/js/jquery-1.11.1.min.js"></script> 
	<script type = "text/javascript" src = "/js/masterblade.js"></script> 
	<link rel = "stylesheet" type = "text/css" href = "/bootstrap/css/bootstrap.min.css">
	<link rel = "stylesheet" type = "text/css" href = "/bootstrap/css/bootstrap-theme.css">
	<link rel = "stylesheet" type = "text/css" href = "/css/land.css">
	<link rel = "stylesheet" type = "text/css" href = "/css/masterblade.css">
	
</head>
<body>
	<caption>
	<div class = "top row">
		<div class = "col-md-11 systemname">创新创业实验班购书系统</div>
		<div class = "col-md-1">
			<a href = "land.php" title = "注销"><b>用户名</b></a>
		</div>
	</div>
	</caption>
	

<div class = "container-fluid">
	<div class = "row-fluid"> 
	<div class = " span2">
		<!--<ul class = "connect">
		<li><a href="/recommend"><b>图书推荐</b></a></li><br>
		<li><a href ="/"><b>查看推荐</b></a></li><br>
		<li><a href ="/personal"><b>个人中心</b></a></li><br>
		<li><a href ="/admin"><b>管理员中心</b></a></li>
 		</ul>-->
 			<div class="col-md-2" style="margin: 80px 0px 0 160px;float: left;">
    		<a href="/" class="btn btn-default btn-lg btn-block" role="button" style="border:0; font-weight:bolder">推荐列表</a>
			<a href="/recommend" class="btn btn-default btn-lg btn-block active" role="button" style="border:0; font-weight:bolder">我要推荐</a>
			<a href="/personal" class="btn btn-default btn-lg btn-block" role="button" style="border:0; font-weight:bolder">个人中心</a>
			<a href="/admin" class="btn btn-default btn-lg btn-block" role="button" style="border:0; font-weight:bolder">购书管理</a>
    	</div>
	</div>
	
	<div class  =" span12" id = "change_content">
		 @yield('content')
	</div>	
</div>
</div>

	<footer>
		<!--<div class ="footer">
			<p class = "banquan">版权所有&copy;2014杭电软件工程创新创业实验班</p>
		</div>
		<div class = "row">
			<div class = "col-md-9 foot">
				<p class = "banquan">版权所有&copy;2014杭电软件工程创新创业实验班</p>
			</div>
		</div>-->
	</footer>
</body>
</html>