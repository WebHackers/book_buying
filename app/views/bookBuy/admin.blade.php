@extends('layouts.nav')
@section('head')
<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
	<title>购书管理</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bookBuy/public.css"/>
	<link rel="stylesheet" type="text/css" href="css/bookBuy/admin.css"/>
	<link rel="stylesheet" type="text/css" href="frame/uikit/css/uikit.min.css"/>
	<script type="text/javascript" src="js/jquery2.1.0.js"></script>
  <script type="text/javascript" src="js/bookBuy/public.js"></script>
	<script type="text/javascript" src="js/bookBuy/admin.js"></script>
	<script type="text/javascript" src="frame/uikit/js/uikit.min.js"></script> 

</head>

<body id="container">
@stop

@section('body')
  <div class="uk-grid" id="content">
    <div class="uk-width-1-6"><br></div>
    <div class="uk-width-4-6" id="main-content"><br>

      @if(count($list)>0)
      <ul class="uk-list uk-list-line">
      @foreach ($list as $book)
        <li class="uk-grid list-li" id="li_{{$book['basic']->id}}">
          <a class="uk-width-1-10 list-link" target="_blank" href="{{$book['rec']->buy_link}}">
            <img class="list-img" src="{{$book['basic']->book_pic}}">
          </a>

          <div class="uk-width-9-10 uk-article list-info">
            <div class="uk-grid list-item">
              <a class="uk-article-lead uk-width-4-10 list-content" href="info?id={{$book['rec']->book_kind}}">{{$book['basic']->book_name}}</a>
              <span class="uk-article-meta uk-width-3-10 list-content">{{$book['basic']->book_author}}</span>
              <span class="uk-width-2-10 list-content">价格：{{round($book['basic']->book_price,1)}}</span>
              <div class="uk-width-1-10 list-btn-admin">
                @if($status=='未购买')
                <button class="uk-button uk-button-primary uk-button-mini" id="buy_{{$book['basic']->id}}">购 买</button>
                @else
                <button class="uk-button uk-button-mini" id="buy_{{$book['basic']->id}}">撤 销</button>
                @endif
              </div>
            </div>

            <div class="uk-grid list-item">
              <span class="uk-article-meta uk-width-4-10 list-content">推荐人：{{$book['name']}}</span>
              <span class="uk-article-meta uk-width-3-10 list-content">推荐时间：{{explode(' ',$book['rec']->created_at)[0]}}</span>
              <div class="uk-width-2-10 list-content"><br></div>
              @if($status=='未购买')
              <div class="uk-width-1-10 list-btn-admin">
                <button class="uk-button uk-button-mini" id="del_{{$book['basic']->id}}">移 除</button>
              </div>
              @endif
            </div>

            <div class="uk-grid list-item">
              <span class="uk-article-meta uk-width-9-10 list-content">推荐理由：{{$book['rec']->rec_reason}}</span>
            </div>

            <div class="uk-grid list-item">
              <span class="uk-article-meta uk-width-9-10 list-content">简介：{{$book['basic']->book_info}}</span>
            </div>
          </div>
        </li>
        @endforeach
      </ul>
      @else
      <div style="text-align:center;">暂无书目 ╮(╯_╰)╭</div>
      @endif
      <ul class="uk-pagination" id="page-link">
        @for($p=1;$p<=$page->getLastPage();$p++)
          @if($p==1||$p==$page->getLastPage()||($p>=$page->getCurrentPage()-2&&$p<=$page->getCurrentPage()+2))
            @if($p!=$page->getCurrentPage())
              <li><a href="/admin?page={{$p}}">{{$p}}</a></li>
            @else
              <li class="uk-active"><span>{{$p}}</span></li>
            @endif
          @else
            <li><span>...</span></li>
            @if($p>$page->getCurrentPage())
              <?php $p = $page->getLastPage()-1?>
            @else
              <?php $p = $page->getCurrentPage()-3?>
            @endif
          @endif
        @endfor
      </ul>
    </div>
    <div class="uk-width-1-6"><br></div>
  </div>

</body>
</html>
@stop