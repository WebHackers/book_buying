<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
	<title>推荐列表</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bookBuy/public.css"/>
	<link rel="stylesheet" type="text/css" href="css/bookBuy/index.css"/>
	<link rel="stylesheet" type="text/css" href="frame/uikit/css/uikit.min.css"/>
	<script type="text/javascript" src="js/jquery2.1.0.js"></script>
	<script type="text/javascript" src="js/bookBuy/index.js"></script>
	<script type="text/javascript" src="frame/uikit/js/uikit.min.js"></script> 

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
      @foreach ($list as $book)
  		<li class="uk-grid list-li">
  			<a class="uk-width-1-10 list-link" target="_blank" href="http://product.china-pub.com/3770641">
  				<img class="list-img" src="http://images.china-pub.com/ebook3770001-3775000/3770641/zcover.jpg">
  			</a>

  			<div class="uk-width-9-10 uk-article list-info">
  				<div class="uk-grid list-item">
  					<a class="uk-article-lead uk-width-4-10 list-content" target="_blank" href="">{{$book['book_name']}}</a>
  					<span class="uk-article-meta uk-width-3-10 list-content">{{$book['book_author']}}</span>
  					<span class="uk-width-2-10 list-content">价格：{{$book['book_price']}}</span>
  				</div>

  				<div class="uk-grid list-item">
  					<span class="uk-article-meta uk-width-4-10 list-content">推荐类型：{{$book['rec_type']}}</span>
  					<span class="uk-article-meta uk-width-3-10 list-content">推荐时间：{{$book['rec_pub']}}</span>
  					<div class="uk-width-2-10 list-content">
  						<button class="uk-button uk-button-primary uk-button-mini list-btn" type="button">
  							<i class="uk-icon-thumbs-o-up"></i> Like {{$book['favour']}}
  						</button>
  					</div>
  				</div>

  				<div class="uk-grid list-item">
  					<span class="uk-article-meta uk-width-9-10 list-content">简介：{{$book['book_info']}}</span>
  				</div>

  				<div class="uk-grid list-item">
  					<span class="uk-article-meta uk-width-9-10 list-content">推荐理由：{{$book['rec_reason']}}</span>
  				</div>
  			</div>
  		</li>
      @endforeach
  	</ul>
  </div>
		
  <div class="uk-width-1-10"><br></div>

</body>
</html>