@extends('layouts.nav')
@section('head')
<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
	<title>购书活动</title>
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
      <ul class="uk-list uk-list-line uk-article">
        <li>
          <span class="uk-article-lead">2014-12-20</span>
        </li>
      </ul>
    </div>
    <div class="uk-width-1-6"><br></div>
  </div>

</body>
</html>
@stop