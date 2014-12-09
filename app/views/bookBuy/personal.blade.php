<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
	<title>个人中心</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bookBuy/public.css"/>
	<link rel="stylesheet" type="text/css" href="css/bookBuy/personal.css"/>
	<link rel="stylesheet" type="text/css" href="frame/uikit/css/uikit.min.css"/>
	<script type="text/javascript" src="js/jquery2.1.0.js"></script>
  <script type="text/javascript" src="js/bookBuy/index.js"></script>
	<script type="text/javascript" src="js/bookBuy/personal.js"></script>
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
          <li class="uk-active">
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
      <ul class="uk-list uk-list-line">
        @foreach ($list as $book)
        <li class="uk-grid uk-animation-reverse list-li" id="li_{{$book['rec']->book_kind}}">
          <a class="uk-width-1-10 list-link" target="_blank" href="{{$book['rec']->buy_link}}">
            <img class="list-img" src="{{$book['basic']->book_pic}}">
          </a>

          <div class="uk-width-9-10 uk-article list-info">
            <div class="uk-grid list-item">
              <a class="uk-article-lead uk-width-4-10 list-content" target="_blank" href="info?id={{$book['basic']->id}}">{{$book['basic']->book_name}}</a>
              <span class="uk-article-meta uk-width-3-10 list-content">{{$book['basic']->book_author}}</span>
              <span class="uk-width-2-10 list-content">价格：{{$book['basic']->book_price}}</span>
              <div class="uk-width-1-10 list-badge"><div class="uk-badge">{{$book['status']}}</div></div>
            </div>

            <div class="uk-grid list-item">
              <span class="uk-article-meta uk-width-4-10 list-content">推荐类型：{{$book['rec']->rec_type}}</span>
              <span class="uk-article-meta uk-width-3-10 list-content">推荐时间：{{explode(' ',$book['rec']->created_at)[0]}}</span>
              <div class="uk-width-2-10 list-content">
                <button class="uk-button {{$book['btn']}} uk-button-mini list-btn" type="button" id="like_{{$book['basic']->id}}">
                  <i class="uk-icon-thumbs-o-up"></i> {{$book['tip']}} {{$book['basic']->favour}}
                </button>
              </div>
              <div class="uk-width-1-10 list-close">
                <button class="uk-close" id="del_{{$book['rec']->book_kind}}"></button>
              </div>
            </div>

            <div class="uk-grid list-item">
              <span class="uk-article-meta uk-width-8-10 list-content">推荐理由：{{$book['rec']->rec_reason}}</span>
            </div>

            <div class="uk-grid list-item">
              <span class="uk-article-meta uk-width-8-10 list-content">简介：{{$book['basic']->book_info}}</span>
            </div>
          </div>
        </li>
        @endforeach
      </ul>
    </div>
    <div class="uk-width-1-6"><br></div>
  </div>

</body>
</html>