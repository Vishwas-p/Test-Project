<!DOCTYPE html>
<html>
<head>
	<title>Booking</title>
	<link rel="stylesheet" type="text/css" href="css/unique.css">
	<style type="text/css">
		body{
		background-image: url(img/bookingbg.jpg);
    	background-size: cover;
    	background-position: center center;
    	background-attachment: fixed;
    	background-repeat: no-repeat;
    	height: 0;
    	}
		form{
		position: absolute;
		top: 10%;	
		left: 10%;
		height: 85%;
		width: 30%;
		padding: 20px 20px;
		background-color: rgba(225,225,225,0.9);
		z-index: -1;
		text-align: center;
		box-shadow: 7px 12px 13px 15px;
		overflow: auto;
		}
		form h1{
			background: rgba(225,225,225,0.3);
		}
		ol li{
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
		#insert{
		width: 100%;
		height: 22px;
		font-size: 17px;
		background: transparent;
		font-weight: bold;
		}
		#insert_ta{
		width: 100%;
		height: 30px;
		font-size: 17px;
		background: transparent;
		font-weight: bold;
		}
		#btn{
		position: static;
		width: 101%;
		height: 40px;
		font-size: 20px;
		border: 2px solid #333;
		background: transparent;
		transition: 1s ease;
		color: red;
		}
		#btn:hover{
		color: white;
		font-size: 25px;
		text-decoration: line-through;
		background-color: #f22;
		transition: 1s ease all;
		cursor: pointer;
		}
		#dd{
		width: 101%;
		height: 24px;
		font-size: 17px;
		background: transparent;
		font-weight: bold;
		color: red;
		}
		.hd{
			position: absolute;
			top: 22%;
			left: 55%;
			font-size: 40px;
			color: #fff;
			font-family: Edwardian Script ITC;
			z-index: -1;
		}
		marquee{
			color: #15f359;
		}
		.hd h2{
			position: relative;
			top: 220px;
			font-family: normal;
		}
		.hd p{
			position: relative;
			top: 330px;
			font-family: normal;
		}
		form P a{
			color: blue;
			border: 2px solid;
			text-decoration: none;
			font-size: 16px;
			transition: 1s all;
		}
		form p a:hover{
			color: red;
			font-size: 18.5px;
		}

		/*model styleing*/
		/* The Modal (background) */
		.modal {
		    display: none; /* Hidden by default */
		    position: fixed; /* Stay in place */
		    z-index: 1; /* Sit on top */
		    padding-top: 100px; /* Location of the box */
		    left: 0;
		    top: 0;
		    width: 100%; /* Full width */
		    height: 100%; /* Full height */
		    overflow: auto; /* Enable scroll if needed */
		    background-color: rgb(0,0,0); /* Fallback color */
		    background-color: rgba(0,0,0,0.80); /* Black w/ opacity */
		}
		
		
		/* Modal Content */
		.modal-content {
			position: relative;
			top: 25%;
		    background-color: #fefefe;
		    margin: auto;
		    padding: 20px;
		    border: 1px solid #888;
		    width: 92%;
		}
		
		/* The Close Button */
		.close {
		    color: #aaaaaa;
		    float: right;
		    font-size: 28px;
		    font-weight: bold;
		}
		
		.close:hover,
		.close:focus {
		    color: red;
		    text-decoration: none;
		    cursor: pointer;
		}
		
		.out{
			background-color: rgba(239, 7, 7, 0.42);
		    margin: auto;
		    border: 1px solid #888;
		    width: 40%;
		    height: 40%;
		}
	</style>
</head>
<body>
<div class="nav">

	<ul>
		<a href="index.html"><img src="img/logo.png" height="60px" width="60px" align="center">Trusted Home Service</a>
		<li><a href="contact.php">Contact Us</a></li>
		<li><a href="Job.html">JOB</a></li>
		<li class="active"><a href="booking.php">Booking</a></li>
		<li><a href="index.html">Home</a></li>
	</ul>
</div>

<br><br><br> 

<form method="POST">
	<h1>Enter Booking Details</h1>
	<ol>
		<li><input type="text" id="insert" name="c_name" required="" placeholder="Name" pattern="^[A-Za-z ]{3,15}" title="Enter name at least 3 chracter without space, number and special character"></li>
		<li><input type="text" id="insert" name="c_mobile" required="" placeholder="Mobile no." pattern="^[0-9-+]{10,10}" title="Please enter 10 digit Mobile number"></li>
		<li><input type="text" id="insert" name="c_alter_mobile" required="" placeholder="Alternate Mobile No." pattern="^[0-9-+]{10,10}" title="Please enter 10 digit Alternate Mobile number"></li>
		<li><input type="email" id="insert" name="c_eamil" required="" placeholder="E-Mail" pattern="[a-z0-9._%+-]+[@a-z0-9.-]+\.[a-z]{2,3}$" title="Please enter valid E-Mail address"></li>
		<li><textarea id="insert_ta" required="" name="c_address" placeholder="Enetr Full Address"></textarea></li>
		<li><input type="text" id="insert" name="c_apincode" required="" placeholder="Enetr Your Area Pin Code" pattern="[0-9]{6,6}" title="Please enter 6 digit zip-code"></li>
		<li><select id="dd" name="c_service" required="">
			<option value="">Select Your Service</option>
			<option>Painter</option>
			<option>P.O.P</option>
			<option>Builder</option>
			<option>Electrician</option>
			<option>Plumber</option>
			<option>Carpenter</option>
			<option>Welder</option>
			<option>Home Security</option>
			<option>Other</option>
		</select></li>
		<li><textarea id="insert_ta" name="c_req" required="" placeholder="Enter Your Service Requirement In Brief"></textarea>
		<li><input id="insert" type="text" name="c_booking_date" onfocus="(this.type='date')" required="" placeholder="Select your booking day"></li>
		<li><input type="submit" id="btn" name="c_r_Button" value="Book Now"></li><br>
		<p><a href="cust_booking_status.php">Click here to check Custmoer booking and booking status.</a></p>
		<!-- <p>* Please Register/LogIn first then book your service otherwise booking is not confirmed</p> -->
	</ol>
</form>
	<div class="hd">
		<marquee>Agent Booking Portal</marquee>
		<h1>Happy Deepawali</h1>
		<p>For Booking Also</p>
		<h2>Call Us +917888344564</h2>
	</div>

<?php 

if (isset($_POST['c_r_Button']))
 	{
 		
		$c_name=$_POST['c_name'];
		$c_mobile=$_POST['c_mobile'];
		$c_alter_mobile=$_POST['c_alter_mobile'];
		$c_eamil=$_POST['c_eamil'];
		$c_address=$_POST['c_address'];
		$c_apincode=$_POST['c_apincode'];
		$c_service=$_POST['c_service'];
		$c_req=$_POST['c_req'];
		$c_booking_date=$_POST['c_booking_date'];

		
		$connection=mysqli_connect("localhost","root","","trustedhomeservice");
		
		$insert="INSERT INTO customer_bookings(c_name,c_mobile,c_alter_mobile,c_eamil,c_address,c_apincode,c_service,c_req,c_booking_date)
		VALUES ('$c_name','$c_mobile','$c_alter_mobile','$c_eamil','$c_address','$c_apincode','$c_service','$c_req','$c_booking_date')";


		if (mysqli_query($connection, $insert)) {
				$id=mysqli_insert_id($connection);
				
 ?>


	<!-- model box apper code -->
	<div id="myModal" class="modal">

		<!-- Model outer -->
		<div class="out">
		 	<!-- Modal content -->
			<div class="modal-content">
		    	<span class="close">&times;</span>
		    	<center>
		   		<p><font size="6" color="red"> Booking Sucessfull</font></p>
		   		<p><font size="4">Please collect your Booking no. for future help</font></p>
		   		
		   		<p><font size="4">Your Booking No is :
		   		<?php 
		
		   			echo $id;
		   			}
		   		   		mysqli_close($connection);
   				}
		   		 ?>
		   		
		   		</p>
		   		</center>
		  	</div>
		</div>
	</div>

	<!-- model code done -->


<div class="cright">
	<p>copyright@ TrustedHomeService</p>
</div>

</body>
</html>

<script>
	// Get the modal
	var modal = document.getElementById('myModal');
	
	// Get the button that opens the modal
	var btn = document.getElementById('btn');
	
	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName('close')[0];
	
	// When the user clicks the button, open the modal 
	window.onload = function() {
	    modal.style.display = 'block';
	}
	
	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
	    modal.style.display = 'none';
	}
	
	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	    if (event.target == modal) {
	        modal.style.display = 'none';
	    }
	}
</script>