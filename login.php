<!DOCTYPE html>
<html>
<head>
	<title>User Login-THS</title>
	<link rel="stylesheet" type="text/css" href="css/unique.css">
<style type="text/css">
	body{
		background-image: url(img/loginbg.jpg);
		background-repeat: no-repeat;
		background-size: 1376px 700px;
	}


	.loginform{
		position: absolute;
		top: 25%;
		left: 34%;
		height: 50%;
		width: 30%;
		line-height: 40px;
		background-color: rgba(166,124,86,0.5);
		padding: 20px 20px;
		text-align: center;
		box-shadow: 7px 12px 13px 15px;
		z-index: -1;
		overflow: auto;
	}
	.loginform h1{
		font-size: 65px;
	}
	input:focus{
		border: 2px solid #333;
		transition: 0.6s all;
	}
	#input{
		width: 100%;
		height: 10%;
		font-size: 17px;
		background: transparent;
		font-weight: bold;
	}
	#btn{
		width: 101%;
		height: 15%;
		font-size: 20px;
		border: 2px solid #333;
		background: transparent;
		transition: 1s ease;
	}
	#btn:hover{
		color: white;
		font-size: 28px;
		text-decoration: line-through;
		background-color: #333;
		transition: 1s ease;
		cursor: pointer;
	}
	#forget{
		font-size: 26px;
		text-decoration: none;
		color: black;
		background-color: transparent;
		transition: 1s ease;
	}
	#forget:hover{
		background-color: #fff;
		color: black;
		font-size: 28px;
		text-decoration: line-through;
		transition: 1s ease;
	}
</style>
</head>

<body>
<div class="nav">

	<ul>
		<a href="index.html"><img src="img/logo.png" height="60px" width="60px" align="center">Trusted Home Service</a>
		<li><a href="contact.html">Contact Us</a></li>
		<li><a href="Job.html">JOB</a></li>
		<li><a href="booking.html">Booking</a></li>
		<li class="active"><a href="index.html">Home</a></li>
	</ul>
</div>


<div class="outer">
	
	<form class="loginform">
		<h1>Log In</h1><br>
		<input type="email" id="input" name="user_name" placeholder="E-Mail or Moblie" required=""><br>
		<input type="password" id="input" name="user_password" placeholder="Password" required=""><br>
		<input type="submit" id="btn" name="login" value="Log In"><br><br>
		<a href="" id="forget">Forget Password</a>
	</form>
</div>

<div class="cright">
	<p>copyright@ TrustedHomeService</p>
</div>
</body>
</html>

<<?php 

if (isset($_POST['login']))
{
	$user_name=$_POST['user_name'];
	$user_password=$_POST['user_password'];

	$connection=mysqli_connect("localhost","root","","db_gjimt");

	
}

 ?>