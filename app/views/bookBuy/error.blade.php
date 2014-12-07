<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
	<title>ErrorPage</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="css/bookBuy/public.css"/>
	<link rel="stylesheet" type="text/css" href="frame/uikit/css/uikit.min.css"/>
	<script type="text/javascript" src="js/jquery2.1.0.js"></script>
	<script type="text/javascript" src="frame/uikit/js/uikit.min.js"></script> 

</head>

<body class="uk-grid" style="padding: 50px 0 0 0;min-width:1200px;">

  <div class="uk-width-2-10" id="button">
    <a href="/" class="uk-button uk-button-large" type="button" id="link-1">推荐列表</a>
    <a href="/recommend" class="uk-button uk-button-large" type="button" id="link-2">我要推荐</a>
    <a href="/personal" class="uk-button uk-button-large" type="button" id="link-3">个人中心</a>
    <a href="/admin" class="uk-button uk-button-large" type="button" id="link-4">购书管理</a>
  </div>

  <div class="uk-width-1-10"><br></div>
	<div class="uk-width-2-10"><br></div>
  <div class="uk-width-6-10 list-board">
  	<div class="uk-alert">
      <p style="text-align:center;">{{$message}}</p>
    </div>
  </div>
		
  <div class="uk-width-1-10"><br></div>

</body>
</html>