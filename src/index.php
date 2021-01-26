<!DOCTYPE html>
<html>
<head>
	<title>
		Online Library Management System
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<style type="text/css">
	header
	{
		background-color: black;
	}
	nav
	{
		float: left;
		word-spacing: 30px;
		padding: 40px;
	}
	nav li 
	{
		display: inline-block;
		line-height: 80px;
	}
	section .sec_img
	{
		height: 650px;
		width: 1580px;
		margin-top: 0px;
		background-image: url("images/lib1.jfif");
		margin-top: 0px;
	}
	.box
	{
		background-color: #6f3a07;
	}
	

</style>

	
</head>


<body>
	<div class="wrapper">
		<header style="width: 1580px; height: 140px; margin-top: -20px;">
		<div class="logo">
			<img src="images/l1.jpg" width="140px" height="120px">
			<h1 style="color: white;font-family: Georgia;">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
		</div>

			<nav class="nav">
				<ul>
					<li><a href="index.php" class="fa fa-home">HOME</a></li>&nbsp;
					<li><a href="books.php" class="fa fa-book">BOOKS</a></li>&nbsp;
					<li><a href="student_login.php" class="fa fa-sign-in">LOGIN</a></li>&nbsp;
					<li><a href="feedback.php" class="fa fa-comments">FEEDBACK</a></li>&nbsp;
				</ul>
			</nav>
		</header>
		<section>
		<div class="sec_img">
			<br><br><br>
			<div class="box">
				<br><br><br><br>
				<h1 style="text-align: center; font-size: 35px;">Welcome to Library</h1><br><br>
				<h1 style="text-align: center;font-size: 25px;">Opens at: 09:00 </h1><br>
				<h1 style="text-align: center;font-size: 25px;">Closes at: 16:30 </h1><br>
			</div>
		</div>
		</section>
		<footer style="width: 1580px; background-color: black">
			<h3 style="color:white;text-align: center;font-family: Arial;"><i>Contact us via Social Media:</i> </h3>
			<p style="color:white;text-align: center;font-family: Georgia;">
				<br>
				Email:&nbsp s.siddarth2018@vitstudent.ac.in<br><br>
				Mobile:&nbsp &nbsp +91-8610182193
			</p>
			<?php
				 include "footer.php";
			 ?>
		</footer>

	</div>
</body>
</html>