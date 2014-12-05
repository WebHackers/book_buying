<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
	<title>推荐列表</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="stylesheet/bookBuy/public.css"/>
	<link rel="stylesheet" type="text/css" href="stylesheet/bookBuy/index.css"/>
	<link rel="stylesheet" type="text/css" href="framework/uikit/css/uikit.min.css"/>
	<script type="text/javascript" src="javascript/jquery2.1.0.js"></script>
	<script type="text/javascript" src="javascript/bookBuy/index.js"></script>
	<script type="text/javascript" src="framework/uikit/js/uikit.min.js"></script> 

</head>

<body class="uk-grid" style="padding: 30px 0 0 0">

  <div class="uk-width-1-10"><br></div>
	<div class="uk-width-2-10" id="button">
		<a href="/" class="uk-button uk-button-large uk-active" type="button" id="link-1">推荐列表</a>
		<a href="/recommend" class="uk-button uk-button-large" type="button" id="link-2">我要推荐</a>
		<a href="/personal" class="uk-button uk-button-large" type="button" id="link-3">个人中心</a>
		<a href="/admin" class="uk-button uk-button-large" type="button" id="link-4">购书管理</a>
	</div>
  <div class="uk-width-6-10 list-board">
  	<ul class="uk-list uk-list-line">
  		<li class="uk-grid list-li">
  			<a class="uk-width-1-10 list-link" target="_blank" href="http://product.china-pub.com/3770641">
  				<img class="list-img" src="http://images.china-pub.com/ebook3770001-3775000/3770641/zcover.jpg">
  			</a>

  			<div class="uk-width-9-10 uk-article list-info">
  				<div class="uk-grid list-item">
  					<a class="uk-article-lead uk-width-4-10 list-content" target="_blank" href="">{{$book_name}}</a>
  					<span class="uk-article-meta uk-width-3-10 list-content">{{$book_author}}</span>
  					<span class="uk-width-2-10 list-content">价格：{{$book_price}}</span>
  				</div>

  				<div class="uk-grid list-item">
  					<span class="uk-article-meta uk-width-4-10 list-content">推荐类型：{{$rec_type}}</span>
  					<span class="uk-article-meta uk-width-3-10 list-content">推荐时间：{{$rec_pub}}</span>
  					<div class="uk-width-2-10 list-content">
  						<button class="uk-button uk-button-primary uk-button-mini list-btn" type="button">
  							<i class="uk-icon-thumbs-o-up"></i> Like {{$favour}}
  						</button>
  					</div>
  				</div>

  				<div class="uk-grid list-item">
  					<span class="uk-article-meta uk-width-9-10 list-content">简介：{{$book_info}}</span>
  				</div>

  				<div class="uk-grid list-item">
  					<span class="uk-article-meta uk-width-9-10 list-content">推荐理由：{{$rec_reason}}</span>
  				</div>
  			</div>
  		</li>
  	</ul>
  </div>
		
  <div class="uk-width-1-10"><br></div>

</body>
</html>