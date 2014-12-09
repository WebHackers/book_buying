<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
	<title>书籍信息</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bookBuy/public.css"/>
	<link rel="stylesheet" type="text/css" href="css/bookBuy/info.css"/>
	<link rel="stylesheet" type="text/css" href="frame/uikit/css/uikit.min.css"/>
	<script type="text/javascript" src="js/jquery2.1.0.js"></script>
	<script type="text/javascript" src="js/bookBuy/info.js"></script>
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
          <li>
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
      <div class="uk-grid">
        <a class="uk-width-1-5" href="{{$book['rec']->buy_link}}">
          <img src="{{$book['basic']->book_pic}}">
        </a>

        <div class="uk-width-4-5 uk-article list-info">
          <div class="uk-grid list-item-info">
            <span class="uk-article-lead uk-width-4-10 list-content">{{$book['basic']->book_name}}</span>
            <span class="uk-text-muted uk-width-3-10 list-content">{{$book['basic']->book_author}}</span>
            <span class="uk-width-2-10 list-content">价格:{{$book['basic']->book_price}}</span>
            <div class="uk-width-1-10 list-badge"><div class="uk-badge">{{$book['status']}}</div></div>
          </div>

          <div class="uk-grid list-item-info">
            <span class="uk-text-muted uk-width-4-10 list-content">推荐类型：{{$book['rec']->rec_type}}</span>
            <span class="uk-text-muted uk-width-3-10 list-content">推荐时间：{{explode(' ',$book['rec']->created_at)[0]}}</span>
            <div class="uk-width-2-10 list-content">
              <button class="uk-button {{$book['btn']}} uk-button-mini list-btn" type="button" id="like_{{$book['basic']->id}}">
                <i class="uk-icon-thumbs-o-up"></i> {{$book['tip']}} {{$book['basic']->favour}}
              </button>
            </div>
          </div>

          <div class="uk-grid list-item-info">
            <span class="uk-text-muted uk-width-8-10">推荐理由：{{$book['rec']->rec_reason}}</span>
          </div>

          <div class="uk-grid list-item-info">
            <span class="uk-text-muted uk-width-8-10">简介：{{$book['basic']->book_info}}</span>
          </div>
        </div>
      </div>
    </div>
    <div class="uk-width-1-6"><br></div>
  </div>

</body>
</html>