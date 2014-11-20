<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
	<title>主页</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type = "text/javascript" src = "/bootstrap/js/bootstrap.js"></script> 
	<script type = "text/javascript" src = "/bootstrap/js/bootstrap.min.js"></script> 
	<link rel = "stylesheet" type = "text/css" href = "/bootstrap/css/bootstrap.min.css">
	<link rel = "stylesheet" type = "text/css" href = "/bootstrap/css/bootstrap-responsive.css">
	<link rel = "stylesheet" type = "text/css" href = "/bootstrap/css/bootstrap.css">
	<link rel = "stylesheet" type = "text/css" href = "/bootstrap/css/bootstrap-responsive.min.css">
	<link rel = "stylesheet" type = "text/css" href = "/css/land.css">
	<link rel = "stylesheet" type = "text/css" href = "/css/masterblade.css">
	
</head>
<body>
	<caption>
	<div class = "top">
		<p class = "systemname">创新创业实验班购书系统</p>
	</div>
	</caption>
	


	<div class = "sidebar">
		<ul class = "connect">
		<li><a href="/recommend"><b>图书推荐</b></a></li><br>
		<li><a href ="/"><b>查看推荐</b></a></li><br>
		<li><a href ="/personal"><b>个人中心</b></a></li><br>
		<li><a href ="/admin"><b>管理员中心</b></a></li>
 		</ul>
	</div>
	
	<div class  ="container">
		 @yield('content')
	</div>	



	<footer>
		<div class ="footer">
			<p class = "banquan">版权所有&copy;2014杭电软件工程创新创业实验班</p>
		</div>
	</footer>

</body>
</html>