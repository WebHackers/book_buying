<head>
	<title>查看推荐</title>
	<link rel = "stylesheet" type = "text/css" href =  "/css/show_books.css">
	<script type = "text/javascript" src = "/bootstrap/js/jquery-1.11.1.min.js"></script> 
	<script type = "text/javascript" src = "/js/show_books.js"></script>

</head>
@extends('layouts.master')
@section('content')


	<!--<div class="main" id = "text">
	
  		<a href = "first_book.php" class ="btn btn-primary btn-lg disabled" target = "_blank" id ="hi" style="">细说PHP</a><br><br>
  		<a href = "second_book.php"  class ="btn btn-primary btn-lg disabled" target = "_blank">精通Jquery</a><br><br>
  		<a href = "third_book.php"  class ="btn btn-primary btn-lg disabled" target = "_blank">UNIX网络编程</a><br>
	
</div>-->
<div class="main">

<div class = "row">
	<div class = "col-md-9 show_activity">
		活动公告：购书活动已开启
	</div>

	<div class = "col-md-9 activity_content">
		<p>活动截止时间：某年某月某日 </p>
		<p>预定购书总数：20本 </p>
	</div>
</div>
<br>
  <div class="row col-md-12">
  	<img src = "/img/php.jpg" alt = "细说PHP" class = "picclass img-circle">
  	<a href = "./message"   target = "_blank" id ="hi">细说PHP</a>
  </div>


  <div class = "row col-md-12">
  	<img src = "/img/鸟哥的linux.jpg" alt = "鸟哥的linux" class = "picclass img-circle">
  	<a href = "second_book.php"  target = "_blank">鸟哥的linux</a>
  </div>

  <div class="row col-md-12">
  	<img src = "/img/精通jquery.jpg" alt = "精通jquery" class = "picclass img-circle">
  	<a href = "third_book.php"  target = "_blank">精通Jquery</a>
  </div>
</div>
<script type ="text/javascript">

	var hi = $("#hi");
	var inhere = function(){
		hi.style.background ="red";
	};
	var outhere = function(){
		hi.style.background="blue";
	};

</script>

@stop
