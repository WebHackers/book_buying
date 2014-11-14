<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>登录</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type = "text/javascript" src = "/bootstrap/js/bootstrap.js"></script> 
	<script type = "text/javascript" src = "/bootstrap/js/bootstrap.min.js"></script> 
	<link rel = "stylesheet" type = "text/css" href = "/bootstrap/css/bootstrap.min.css">
	<link rel = "stylesheet" type = "text/css" href = "/bootstrap/css/bootstrap-responsive.css">
	<link rel = "stylesheet" type = "text/css" href = "/bootstrap/css/bootstrap.css">
	<link rel = "stylesheet" type = "text/css" href = "/bootstrap/css/bootstrap-responsive.min.css">
	<link rel = "stylesheet" type = "text/css" href = "/css/land.css">

</head>
<body class = "body">
	
	
		<div class = "landmain">
			<fieldset  class = "control-group success">
				<legend ><p class = "landfont"><strong>用户登录</strong></p></legend>
			<form name = "input" action = "./login" method = "post">
				<strong>用户名<i class = "icon-user"></i>：</strong>
				<input type = "text" name = "userName">
				<br><br>
				<strong>密&nbsp;&nbsp;码<i class = "icon-lock"></i>：</strong>
				&nbsp;&nbsp;<input type = "password" name = "password"><br>&nbsp;&nbsp;&nbsp;&nbsp;
				<input type = "checkbox" name ="remmber">记住密码&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type = "checkbox" name = "autoLogin">自动登录<br><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type = "submit" name = "submit" class = "btn" onclick ="checkinput(this);">登录</button>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<button type = "reset" name = "reset" class = "btn" onclick ="form.reset();return false;">重置</button>
			</fieldset>
			

			</form>
			<div class = "title">图书管理系统</div>
			<div class = "singal">
				<a href = "http://www.hdu.edu.cn" target = "_blank"><img src= "
					/book_buying/public/img/xh4.gif"></a>
			</div>
		</div>
		<div class = "poster">
			<marquee scrollAmount = "5" height = "55"  width = "980" scolldelay ="1000"
			onmouseover = stop() onmouseout = start()><p class = "posterfont">
			创新创业，与你同行</p></marquee>
		</div>

		<script language = "javascript">
			function checkinput(form){
				if(form.username.value =""){
					alert("用户名不可为空");
					form.username.focus();
					return false;
				}
				else if(form.password.value =""){
					alert("请输入密码");
					form.password.focus();
					return false;
				}
				
			}else{return true;}
		</script>
	

	

</body>
</html>
