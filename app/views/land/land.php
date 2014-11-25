<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>登录</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type = "text/javascript" src = "/bootstrap/js/bootstrap.min.js"></script>
	<script type = "text/javascript" src = "/bootstrap/js/jquery-1.11.1.min.js"></script>  
	<link rel = "stylesheet" type = "text/css" href = "/bootstrap/css/bootstrap.min.css">
	<link rel = "stylesheet" type = "text/css" href = "/bootstrap/css/bootstrap-theme.min.css">
	<link rel = "stylesheet" type = "text/css" href = "/css/land.css">

</head>
<body class = "body">
	
<<<<<<< HEAD
<div class="row">
     <div class="col-md-12 landmain">
    	<p class = "landfont"><strong>用户登录</strong></p>
     </div>
     <hr>
     <form name = "input" action = "./login"  method = "post" class="form-horizontal formmain" role="form">
  	   <div class="form-group" id = "user">
          <label for="user_id" class="col-sm-4 control-label">用户名</label>
          <input type="text" class="form-control" id="user_id" placeholder="学号">
       </div>
  	   <div class="form-group" id = "pwd">
         <label for="inputPassword3" class="col-sm-4 control-label">密&nbsp;&nbsp;&nbsp;码</label>
         <input type="password" class="form-control" id="password" placeholder="Password">
       </div>
=======
	
		<div class = "landmain">
			<fieldset  class = "control-group success">
				<legend ><p class = "landfont"><strong>用户登录</strong></p></legend>
			<form name = "input" action = "./login" method = "post">
				<strong>用户学号<i class = "icon-user"></i>：</strong>
				<input type = "text" name = "user_id">
				<br><br>
				<strong>密&nbsp;&nbsp;码<i class = "icon-lock"></i>：</strong>
				&nbsp;&nbsp;<input type = "password" name = "password"><br>&nbsp;&nbsp;&nbsp;&nbsp;
				<input type = "checkbox" name ="remember">记住密码&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type = "checkbox" name = "autoLogin">自动登录<br><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type = "submit" name = "submit" class = "btn" onclick ="checkinput(this);">登录</button>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<button type = "reset" name = "reset" class = "btn" onclick ="form.reset();return false;">重置</button>
			</fieldset>
			
>>>>>>> 0d24126aae7e1e9efcd1f2a74450e2ee910ae5e1

       <div class="form-group checkbox" id = "autoland">
       		<div class="col-md-6"><input type = "checkbox">记住密码 &emsp; &emsp; 
       		 <input type = "checkbox">自动登录 </div>
       </div>
       <br>
       <div class="form-group checkbox" id = "button1">
       		<div class="col-md-6">
       			<button type = "submit"  name = "submit" class = "btn btn-primary ">登录</button>
       			&emsp; &emsp; &emsp;
       			<button type = "reset" name = "reset" class = "btn btn-primary ">重置</button>
       		 
       		</div>
       </div>
    </form>
  
 	 <div class = "col-md-12 roll">
			<marquee scrollAmount = "5" height = "55"  width = "980" scolldelay ="1000"
			onmouseover = stop() onmouseout = start()><p class = "posterfont">
			创新创业，与你同行</p></marquee>
	</div>

</div>
</body>
</html>
