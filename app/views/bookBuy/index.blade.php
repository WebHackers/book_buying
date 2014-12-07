<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
	<title>推荐列表</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="css/bookBuy/public.css"/>
	<link rel="stylesheet" type="text/css" href="css/bookBuy/index.css"/>
	<link rel="stylesheet" type="text/css" href="frame/uikit/css/uikit.min.css"/>
	<script type="text/javascript" src="js/jquery2.1.0.js"></script>
	<script type="text/javascript" src="js/bookBuy/index.js"></script>
	<script type="text/javascript" src="frame/uikit/js/uikit.min.js"></script> 

</head>

<body class="uk-grid" id="container">
  <div class="uk-width-1-10" id="button">
    <a href="/" class="uk-button uk-button-large uk-active" type="button" id="link-1">推荐列表</a>
    <a href="/recommend" class="uk-button uk-button-large" type="button" id="link-2">我要推荐</a>
    <a href="/personal" class="uk-button uk-button-large" type="button" id="link-3">个人中心</a>
    <a href="/admin" class="uk-button uk-button-large" type="button" id="link-4">购书管理</a>
  </div>

  <div class="uk-width-1-10"><br></div>
	<div class="uk-width-2-10"><br></div>
  <div class="uk-width-6-10 list-board">
  	<ul class="uk-list uk-list-line">
      @foreach ($list as $book)
  		<li class="uk-grid list-li">
  			<a class="uk-width-1-10 list-link" target="_blank" href="{{$book['rec']->buy_link}}">
  				<img class="list-img" src="{{$book['basic']->book_pic}}">
  			</a>

  			<div class="uk-width-9-10 uk-article list-info">
  				<div class="uk-grid list-item">
  					<a class="uk-article-lead uk-width-4-10 list-content" target="_blank" href="message?id={{$book['basic']->id}}">{{$book['basic']->book_name}}</a>
  					<span class="uk-article-meta uk-width-3-10 list-content">{{$book['basic']->book_author}}</span>
  					<span class="uk-width-2-10 list-content">价格：{{$book['basic']->book_price}}</span>
  				</div>

  				<div class="uk-grid list-item">
  					<span class="uk-article-meta uk-width-4-10 list-content">推荐类型：{{$book['rec']->rec_type}}</span>
  					<span class="uk-article-meta uk-width-3-10 list-content">推荐时间：{{$book['rec']->created_at}}</span>
  					<div class="uk-width-2-10 list-content">
  						<button class="uk-button {{$book['btn']}} uk-button-mini list-btn" type="button" id="like_{{$book['basic']->id}}">
  							<i class="uk-icon-thumbs-o-up"></i> {{$book['tip']}} {{$book['basic']->favour}}
  						</button>
  					</div>
  				</div>

  				<div class="uk-grid list-item">
  					<span class="uk-article-meta uk-width-9-10 list-content">简介：{{$book['basic']->book_info}}</span>
  				</div>

  				<div class="uk-grid list-item">
  					<span class="uk-article-meta uk-width-9-10 list-content">推荐理由：{{$book['rec']->rec_reason}}</span>
  				</div>
  			</div>
  		</li>
      @endforeach
  	</ul>
  </div>
		
  <div class="uk-width-1-10">
    <a class="uk-button uk-button-large" href="./logout" style="background-color:#fff;">Logout</a>
  </div>

</body>
</html>