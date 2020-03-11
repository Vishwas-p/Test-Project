<!DOCTYPE html>
<html>
<head>
	<title>REGISTER</title>
	<link rel="stylesheet" type="text/css" href="css/unique.css">
<style type="text/css">
	*{
		padding: 0;
		margin: 0;
		
	}
	body{
		background-image: url(img/regbg.jpg);
	    background-size: cover;
    	background-position: center center;
    	background-attachment: fixed;
    	background-repeat: no-repeat;
	}
	.reg{
		position: absolute;
		top: 10%;	
		left: 28%;
		height: 88%;
		width: 40%;
		padding: 20px 20px;
		text-align: center;
		background-color: rgba(225,225,225,0.5);
		z-index: -1;
		box-shadow: 7px 12px 13px 15px;
		overflow: auto;
	}
	.reg h1{
		font-size: 35px;
	}
	.reg ol li{
		list-style-type: none;
		line-height: 40px;
	}
	input:focus{
		border: 2px solid #333;
		transition: 0.6s all;
	}
	input:focus:invalid{
		border: 2px solid #f22;
		transition: 0.6s all;
	}
	textarea:focus{
		border: 2px solid #333;
		transition: 0.6s all;
		}
	textarea:focus:invalid{
		border: 2px solid #f22;
		transition: 0.6s all;
	}
	.select_optn:focus:invalid{
		border: 2px solid #f22;
		transition: 0.6s all;
	}
	.insert{
		width: 100%;
		height: 22px;
		font-size: 17px;
		background: transparent;
		font-weight: bold;
	}
	.insert_ta{
		width: 100%;
		height: 40px;
		font-size: 17px;
		background: transparent;
		font-weight: bold;
	}
	.select_optn{
		width: 100%;
		height: 22px;
		font-size: 17px;
		background: transparent;
		font-weight: bold;	
	}
	#btn{
		position: absolute;
		left: 9%;
		width: 83%;
		height: 40px;
		font-size: 20px;
		border: 2px solid #333;
		background: transparent;
		transition: 1s ease;
	}
	#btn:hover{
		color: white;
		font-size: 25px;
		text-decoration: line-through;
		background-color: #333;
		transition: 1s ease all;
		cursor: pointer;
	}
 	#userimage{
		width: 100%;
		height: 22px;
		font-size: 17px;
		background: transparent;
		font-weight: bold;
	}
	#userimage:focus{
		width: 100%;
		font-size: 10px;
	}
	form p{
		color: #f22;
	}
</style> 
</head>
<body>
<div class="nav">

	<ul>
		<a href="index.html"><img src="img/logo.png" height="60px" width="60px" align="center">Trusted Home Service</a>
		<li><a href="contact.php">Contact Us</a></li>
		<li class="active"><a href="Job.html">JOB</a></li>
		<li><a href="booking.php">Booking</a></li>
		<li><a href="index.html">Home</a></li>
	</ul>
</div>


<div class="reg">
	<h1>Register Your Account With TrustedHomeService</h1>
	<form action="" method="post">
		<table align="center" cellspacing="30px"><hr>
		<p>Note:Please Enter All Details Otherwise Account Not Created</p><hr>
			<tr>
				<td><input class="insert" type="text" name="f_name" placeholder="First Name" required="" pattern="^[A-Za-z]{3,15}" title="Enter your name at least 3 chracter without space, number and special character"><font color="red"></font></td>
				<td><input class="insert" type="text" name="l_name" placeholder="Last Name" required="" pattern="^[A-Za-z ]{1,}" title="Enter your last name without space, number and special character"></td>
			</tr>
			<tr>
				<td><input class="insert" type="text" name="fa_name" placeholder="Father's Name" required="" pattern="^[A-Za-z ]{3,}" title="Enter your Father name without space, number and special character"></td>
				<td><textarea class="insert_ta" placeholder="Full Address" required="" name="address"></textarea></td>
			</tr>
			<tr>
				<td><select class="select_optn" name="gender" required="">
					<option value="">Select Your Gender</option>
					<option>Male</option>
					<option>Female</option>
					<option>Transgender</option>
				</select></td>
				<td><select class="select_optn" name="circle" required="">
					<option value="">Select Your Circle</option>
					<option>Chandigarh</option>
					<option>Mohali</option>
					<option>Zirakpur</option>
					<option>Panchkula</option>
					<option>New-Chandigarh</option>
				</select></td>
			</tr>
			<tr>
				<td><input class="insert" type="text" name="pin_code" placeholder="zip-code" required="" pattern="[0-9]{6,6}" title="Please enter 6 digit zip-code"></td>
				<td><input class="insert" type="text" name="mobile" placeholder="Mobile" required="" pattern="^[0-9-+]{10,10}" title="Please enter 10 digit Mobile number"></td>
			</tr>
			<tr>
				<td><input class="insert" type="email" name="email" placeholder="E-mail" required="" pattern="[a-z0-9._%+-]+[@a-z0-9.-]+\.[a-z]{2,3}$" title="Please enter valid E-Mail address"></td>
				<td><input class="insert" type="text" onfocus="(this.type='date')" name="date_of_birth" placeholder="Date Of Birth" required="" pattern=""></td>
			</tr>
			<tr>
				<td><input class="insert" type="Password" name="password" placeholder="Password" required="" pattern=".{6,}" title="Please Enter 6 digit password"></td>
				<td><input class="insert" type="Password" name="c_password" placeholder="Confirm Password" required="" pattern=".{6,}" title="Please Enter 6 digit password"></td>
			</tr>
			<tr>
				<td><input type="text" name="user_image" id="userimage" placeholder="Click to upload image" onfocus="(this.type='file')" required="" accept="image/*"></td>
				<td><input class="insert" type="text"  name="adhar_no" placeholder="Adhar Card Number" required="" pattern="[0-9]{16,16}" title="Please Enter only Adhar number"></td>
			</tr>
			<tr>
				<td><input type="submit" id="btn" name="register" value="Register"></td>
			</tr>			
		</table>
	</form>
</div>

<div class="cright">
	<p>copyright@ TrustedHomeService</p>
</div>
</body>
</html>
<br><br><br>
<?php

if (isset($_POST['register']))
 	{
 		
		$f_name=$_POST['f_name'];

		$l_name=$_POST['l_name'];

		$fa_name=$_POST['fa_name'];

		$address=$_POST['address'];

		$gender=$_POST['gender'];

		$circle=$_POST['circle'];

		$pin_code=$_POST['pin_code'];

		$mobile=$_POST['mobile'];

		$email=$_POST['email'];

		$date_of_birth=$_POST['date_of_birth'];

		$password=$_POST['password'];

		$c_password=$_POST['c_password'];

		$user_image=$_POST['user_image'];

		$adhar_no=$_POST['adhar_no'];



		$connection=mysqli_connect("localhost","root","","trustedhomeservice");
		

		$insert="INSERT INTO agent_register(f_name,l_name,fa_name,address,gender,circle,pin_code,mobile,email,date_of_birth,password,c_password,user_image,adhar_no)
			VALUES ('$f_name','$l_name','$fa_name','$address','$gender','$circle','$pin_code','$mobile','$email','$date_of_birth','$password','$c_password','$user_image','$adhar_no')";

		
		$mobile_valid=mysqli_query($connection,"SELECT * FROM `agent_register` WHERE mobile='$mobile'");
		$email_valid=mysqli_query($connection,"SELECT * FROM `agent_register` WHERE email='$email'");
		$adhar_no_valid=mysqli_query($connection,"SELECT * FROM `agent_register` WHERE adhar_no='$adhar_no'");
		

		if (mysqli_num_rows($mobile_valid)) {
			echo "<script>alert('Mobile number already exists')</script>";
			return false;

		}
		
		if (($email_valid)) {
			echo "<script>alert('E-Mail already exists')</script>";
			return false;
		}
		
		if ($password!=$c_password){
			echo "<script>alert('Password not match')</script>";
			return false;
		}
		

		if (mysqli_num_rows($adhar_no_valid)) {
			echo "<script>alert('Adhar No. already exists')</script>";
			return false;
		}
		
		if (mysqli_query($connection, $insert)) {
		 echo "<script>alert('Registeration Sucessfull')</script>";
		}
		else {
   			   echo "<br><br><br>Error: " . $insert . "<br>" . mysqli_error($connection);
   			}
   		mysqli_close($connection);
	}
?>