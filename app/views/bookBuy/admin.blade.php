<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
	<title>购书管理</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bookBuy/public.css"/>
	<link rel="stylesheet" type="text/css" href="css/bookBuy/admin.css"/>
	<link rel="stylesheet" type="text/css" href="frame/uikit/css/uikit.min.css"/>
	<script type="text/javascript" src="js/jquery2.1.0.js"></script>
	<script type="text/javascript" src="js/bookBuy/admin.js"></script>
	<script type="text/javascript" src="frame/uikit/js/uikit.min.js"></script> 

</head>

<body id="container">
  <nav class="uk-navbar uk-grid" id="menu">
    <div class="uk-width-1-6"><br></div>
    <div class="uk-width-4-6" id="menu-item">
      <ul class="uk-navbar-nav uk-container uk-container-center">
          <li>
            <a href="/">推荐列表</a>
          </li>
          <li>
            <a href="/recommend">我要推荐</a>
          </li>
          <li>
            <a href="/personal">个人中心</a>
          </li>
          <li class="uk-active">
            <a href="/admin">购书管理</a>
          </li>
      </ul>

      <div class="uk-navbar-flip" id="logout-btn">
        <ul class="uk-navbar-nav">
          <li><a href="#">{{$user}}</a></li>
          <li><a href="/logout">Logout</a></li>
        </ul>
      </div>
    </div>
    <div class="uk-width-1-6"><br></div>
  </nav>

  <div class="uk-grid" id="content">
    <div class="uk-width-1-6"><br></div>
    <div class="uk-width-4-6" id="main-content"><br>

    </div>
    <div class="uk-width-1-6"><br></div>
  </div>

</body>
</html>