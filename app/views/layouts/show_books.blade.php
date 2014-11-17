<head>
	<title>查看推荐</title>
	<link rel = "stylesheet" type = "text/css" href =  "/css/show_books.css">
</head>
@extends('layouts.master')
@section('content')


	<div class="main" id = "text">
	
  		<a href = "first_book.php" class ="btn btn-primary btn-lg disabled" target = "_blank" id ="hi" >细说PHP</a><br><br>
  		<a href = "second_book.php"  class ="btn btn-primary btn-lg disabled" target = "_blank">精通Jquery</a><br><br>
  		<a href = "third_book.php"  class ="btn btn-primary btn-lg disabled" target = "_blank">UNIX网络编程</a><br>
	
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
