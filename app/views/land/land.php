<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>登录</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type = "text/javascript" src = "/r3/js/bootstrap.min.js"></script>
	<script type = "text/javascript" src = "/r3/js/jquery-1.11.1.min.js"></script>  
	<link rel = "stylesheet" type = "text/css" href = "/r3/css/bootstrap.min.css">
	<link rel = "stylesheet" type = "text/css" href = "/r3/css/bootstrap-theme.min.css">
	<link rel = "stylesheet" type = "text/css" href = "/r2/land.css">

</head>
<body class = "body">
	

<div class="row">
     <div class="col-md-12 landmain">
    	<p class = "landfont"><strong>用户登录</strong></p>
     </div>
     <hr>
     <form name = "input" action = "./login"  method = "post" class="form-horizontal formmain" role="form">
  	   <div class="form-group" id = "user">
          <label for="user_id" class="col-sm-4 control-label">用户名</label>
          <input type="text" class="form-control" name='user_id' id="user_id" placeholder="学号">
       </div>
  	   <div class="form-group" id = "pwd">
         <label for="password" class="col-sm-4 control-label">密&nbsp;&nbsp;&nbsp;码</label>
         <input type="password" class="form-control" name="password" id="password" placeholder="Password">
       </div>

       <div class="form-group checkbox" id = "autoland">
       		<div class="col-md-6"><input type = "checkbox">记住密码 &emsp; &emsp; 
       		 <input type = "checkbox">自动登录 </div>
       </div>
       <br>
       <div class="form-group checkbox" id = "button1">
       		<div class="col-md-6">
       			<button type = "submit" class = "btn btn-primary ">登录</button>
       			&emsp; &emsp; &emsp;
       			<button type = "reset" name = "reset" class = "btn btn-primary ">重置</button>
       		 
       		</div>
       </div>
    </form>

</div>
</body>
</html>
