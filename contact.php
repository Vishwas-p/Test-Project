<!DOCTYPE html>
<html>
<head>
	<title>Contact and Feedback</title>
	<link rel="stylesheet" type="text/css" href="css/unique.css">
<style type="text/css">
	body{
		background-image: url(img/b5.jpg);
	    background-size: cover;
    	background-position: center center;
    	background-attachment: fixed;
    	background-repeat: no-repeat;
	}
	.cntct{
		text-align: center;
		background-color: rgba(235,235,222,0);
	}
	h1{
		color: ;
		font-size: 50px;
		text-align: center;
	}
	.cntct p{
		font-size: 30px;
		background-color: rgba(5, 243, 243, 0.22);
		color: #30ff9a;
	}
	table{
		position: relative;
		left: 22%;
		text-align: center;
		font-size: 20px;
		background-color: rgba(0,225,225,0.5);
	}
	b{
		color: #fff
	}
	form{
		text-align: center;
		line-height: 2;
		border-spacing: 20;
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
		width: 30%;
		height: 22px;
		font-size: 17px;
		background: transparent;
		font-weight: bold;
	}
	#insert_ta{
		width: 30%;
		height: 60px;
		font-size: 17px;
		background: transparent;
		font-weight: bold;
	}
	#btn{
		position: static;
		width: 30.3%;
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
	.dt{
		position: relative;
		left: 33%;
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
		<li class="active"><a href="contact.php">Contact Us</a></li>
		<li><a href="Job.html">JOB</a></li>
		<li><a href="booking.php">Booking</a></li>
		<li><a href="index.html">Home</a></li>
	</ul>
</div>

<br><br><br>
<div class="cntct"> 
	<h1>
		Contact US
	</h1>
	<p>
		For President's Attention Send in your Compliments, Suggestions or specific Complaints to</b>
	</p>
	<h1>
		Trusted Home Service
	</h1>
		<table cellspacing="20" class="dt">
			<tr>
				<td>E-Mail us</td>		<td>:</td>		<td>trustedhomeservice@gmail.com</td>
			</tr>
			<tr>
				<td>Phone</td>			<td>:</td>		<td>+917888344564</td>	<td><b></b></td>
			</tr>
		</table>
</div><br>
<hr>
<form class="fedbak" method="post" action="">
	<h1>
		Send Feedback
	</h1>
		<input id="insert" type="text" name="fedbak_name" required="" placeholder="Name" pattern="^[A-Za-z]{3,15}" title="Enter your name at least 3 chracter without space, number and special character"><br>

		<input id="insert" type="email" name="fedbak_email" required="" placeholder="E-Mail" pattern="[a-z0-9._%+-]+[@a-z0-9.-]+\.[a-z]{2,3}$" title="Please enter valid E-Mail address"><br>

		<textarea id="insert_ta" name="fedbak" required="" placeholder="Type your experience"></textarea><br>

		<input id="btn" type="submit" name="Feedback" value="Send">
</form>

<?php
					
	if (isset($_POST['Feedback'])) {
			
		$fedbak_name=$_POST['fedbak_name'];
		$fedbak_email=$_POST['fedbak_email'];
		$fedbak=$_POST['fedbak'];

		$connection=$connection=mysqli_connect("localhost","root","","trustedhomeservice");

		$query="INSERT INTO ths_feedback (fedbak_name, fedbak_email, fedbak) VALUES ('$fedbak_name','$fedbak_email','$fedbak')";


	
?>

<!-- model box apper code -->
<div id="myModal" class="modal">
	<!-- Model outer -->
	<div class="out">
	 	<!-- Modal content -->
		<div class="modal-content">
	    	<span class="close">&times;</span>
	    	<center>
	   		<p><font size="6" color="red">

	   		<?php 
			if (mysqli_query($connection, $query)) {
				echo "Feedback Sent";
				echo "</font>";
				}
				else {
						echo "<br><br><br>Error: " . $query . "<br>" . mysqli_error($connection);
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

<br><br>

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


