@extends('layouts.nav')
@section('head')
<!DOCTYPE HTML>
<html>
<head>
	<title>购书历史</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="frame/uikit/css/uikit.min.css"/>
	<script src="js/jquery2.1.0.js"></script>
	<script src="frame/uikit/js/uikit.min.js"></script> 

</head>

<body id="container">
@stop
  
@section('body')
@if(count($activity)!=0)
	<ul class="uk-list uk-list-line">
	@foreach($activity as $act)
		<li class="uk-grid uk-article" style="margin:0;padding:10px;">
			<a class="uk-article-title uk-width-4-10" href="/history/search?act_id={{$act->id}}">第 {{$act->id}} 期</a>
			<span class="uk-article-lead uk-width-3-10">总花费: {{$act->act_cost}}</span>
			<span class="uk-article-meta uk-width-3-10">
				{{explode(' ',$act->created_at)[0]}} 至 
				{{explode(' ',$act->updated_at)[0]}}
			</span>
		</li>
	@endforeach
	</ul>
@else
	<div style="text-align:center;">还没有结束的购书活动呦</div>
@endif
	<ul class="uk-pagination" id="page-link">
    @for($p=1;$p<=$activity->getLastPage();$p++)
      @if($p==1||$p==$activity->getLastPage()||($p>=$activity->getCurrentPage()-2&&$p<=$page->getCurrentPage()+2))
        @if($p!=$activity->getCurrentPage())
          <li><a href="history/?page={{$p}}">{{$p}}</a></li>
        @else
          <li class="uk-active"><span>{{$p}}</span></li>
        @endif
      @else
        <li><span>...</span></li>
        @if($p>$activity->getCurrentPage())
          <?php $p = $activity->getLastPage()-1?>
        @else
          <?php $p = $activity->getCurrentPage()-3?>
        @endif
      @endif
    @endfor
  </ul>
@stop