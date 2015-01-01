@extends('layouts.nav')
@section('head')
<!DOCTYPE HTML>
<html>
<head>
	<title>购书详情</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../frame/uikit/css/uikit.min.css"/>
	<link rel="stylesheet" type="text/css" href="../css/bookBuy/public.css"/>
	<script src="../js/jquery2.1.0.js"></script>
	<script src="../js/bookBuy/public.js"></script>
	<script src="../frame/uikit/js/uikit.min.js"></script> 

</head>

<body id="container">
@stop
  
@section('body')
@if(count($books)!=0)
	<ul class="uk-list uk-list-line">
	@foreach($books as $book)
		<li class="uk-grid uk-article list-li" id="li_{{$book['basic']->id}}">
			<a class="uk-width-1-10 list-link" target="_blank" href="{{$book['rec']->buy_link}}">
				<img class="list-img" src="{{$book['basic']->book_pic}}">
			</a>

			<div class="uk-width-9-10 uk-article list-info">
				<div class="uk-grid list-item">
					<a class="uk-article-lead uk-width-4-10 list-content" href="../info?id={{$book['rec']->book_kind}}">{{$book['basic']->book_name}}</a>
					<span class="uk-article-meta uk-width-3-10 list-content">{{$book['basic']->book_author}}</span>
					<span class="uk-width-2-10 list-content">价格：{{round($book['basic']->book_price,1)}}</span>
				</div>

				<div class="uk-grid list-item">
					<span class="uk-article-meta uk-width-4-10 list-content">推荐人：{{'XXX'}}</span>
					<span class="uk-article-meta uk-width-3-10 list-content">推荐时间：{{explode(' ',$book['rec']->created_at)[0]}}</span>
					<span class="uk-article-meta uk-width-3-10 list-content">入库时间：{{$book['list']->book_time}}</span>
				</div>

				<div class="uk-grid list-item">
					<span class="uk-article-meta uk-width-8-10 list-content">推荐理由：{{$book['rec']->rec_reason}}</span>
				</div>
			</div>
		</li>
	@endforeach
	</ul>
@else
	<div style="text-align:center;">本次活动无购买书籍或无对应的购书活动</div>
@endif
	
@stop