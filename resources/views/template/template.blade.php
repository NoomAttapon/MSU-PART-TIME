<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>MSU Part-Time</title>
	<link href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
</head>

	<style type="text/css" media="screen">
		.navber ul>li
		{
			float: left;
			list-style-type: none;
			margin-right: 0%;

		}
		.navber ul>li>a
		{
			display: inline-block;

		}
		.navber
		{
			background-color: #333;
			list-style-type: none;
			width: 100%;
			text-align: right;
		}
		.footer
		{
			width: 100%;
			height: 130px;
			border: 1px solid black;
			background-color: black;
			color:#fff;
		}

	</style>

<body>
<div class="container">
	<div class="row">
	<header>
		<nav >
			<ul  class="navber">
				<li><a href="" title="" style="color:#fff; margin-right: 2%;">Register/Login</a></li>
			</ul>
		</nav>
		<nav class="navbar navbar-default" style="margin-top: -0.85%;">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">MSU</a>
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="#" >ผู้ว่าจ้าง</a>
					</li>
					<li>
						<a href="#">ผู้หางาน</a>
					</li>
				</ul>
			</div>
		</nav>
		<img src="{{ url('image/bander01.png')}}" width=100% style="margin-top: -1.6%;">
	</header>
		<section >
			@yield('content')	
		</section>
	<footer>
		<div class="footer wall">
			gg
		</div>
	</footer>
	</div>
</div>

</body>
</html>