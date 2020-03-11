<!DOCTYPE html>
<html>
<head>
	<title>cust_booking_status</title>
	<link rel="stylesheet" type="text/css" href="css/unique.css">
	<style type="text/css">
		body{
			background-color: rgb(108,165,209);
			z-index: -1;
			height: 0;

			
		}
		.t1{
			position: absolute;
			top: 130px;
			width: 100%;
			background-color: white;
			color: rgb(23,36,47);
			font-weight: bold;
	    	font-size: 20px;
	    	line-height: 60px;
	    	text-align: center;
	    	z-index: -1;
		}
		.insert{
			width: 20%;
			height: 22px;
			font-size: 17px;
			color: white;
			background-color: rgb(23,36,47);
			font-weight: bold;
		}
		input:focus{
			border: 2px solid #333;
			transition: 0.6s all;
		}
		input:focus:invalid{
			border: 2px solid #f22;
			transition: 0.6s all;
		}
		#btn{
			width: 33%;
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
		.t2{
			position: relative;
			top: 270px;
			background-color: white;
			color: rgb(23,36,47);
			font-weight: bold;
    		font-size: 15px;
    		line-height: 30px;
    		text-align: center;
    		z-index: -1;
    		padding: 60px 60px;
    		overflow: auto;
    		height: 250px;
		}
		table{
			position: relative;
			left: -4%;
			width: 100%;
			line-height: 20px;
			padding: 20px 20px;  
			text-align:left;
		}
		th{
			background-color: black;
			color: white;
			padding: 15px;
			text-align: center;


		}
		td{
			background-color: rgb(165,165,165);
			color: black;
			padding: 2px 2px 2px 2px;
		}
		#in{
			color: #ffeb00;
			background-color: rgb(0, 58, 103);
			font-size: larger;
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


<div class="t1">
	<form method="POST" action="">
	
		Booking No : <input class="insert" type="text" name="b_ID" placeholder="Enter Booking ID" pattern="[0-9-+]{5,10}" required=""> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Booking Mobile No. : <input class="insert" type="text" name="b_mobile" placeholder="Enter Booking Mobile No." pattern="[0-9-+]{10,10}" required="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Booking Date : <input class="insert" type="text" name="b_date" placeholder="Enter Booking Date" onfocus="(this.type='Date')" required=""><br>
		<input type="submit" name="submit" value="Click" id="btn">

	</form>
</div>



<div class="t2">

	<table>
		<tr>
			<th>Booking&nbsp;No</th>
			<th>&nbsp;&nbsp;&nbsp;&nbsp;Name&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th>Mobile&nbsp;No.</th>
			<th>Alternate&nbsp;Mobile&nbsp;No.</th>
			<th>E-Mail</th>
			<th>&nbsp;&nbsp;&nbsp;&nbsp;Address&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th>Pin&nbsp;Code</th>
			<th>service</th>
			<th>About&nbsp;Service</th>
			<th>Booking&nbsp;Date</th>
			<th>Status</th>
		</tr>

		<tr>

			<?php
					
				if (isset($_POST['submit'])) {
						
					$b_ID=$_POST['b_ID'];
					$b_mobile=$_POST['b_mobile'];
					$b_date=$_POST['b_date'];



					echo "<font size='6' align='center'>YOU ENTER</font><br>";
					echo "<font size='3'>Booking No = $b_ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
					echo "Booking Mobile No = $b_mobile&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
					echo "Booking Date = '$b_date'</font><br>";
					//2. Create a database connection:-
					
					$connection = mysqli_connect ("localhost","root","","trustedhomeservice");	
					
					//select database:-
					
					$query_text="SELECT * FROM `customer_bookings` WHERE ID=$b_ID AND (c_mobile=$b_mobile or c_alter_mobile=$b_mobile) AND c_booking_date='$b_date'";
					
					$record_set=mysqli_query($connection, $query_text);
					
					//Display Records from table
					
					while ($row=mysqli_fetch_array($record_set))
					{
						$order_ID=$row['ID'];
						$c_name=$row['c_name'];
						$c_mobile=$row['c_mobile'];
						$c_alter_mobile=$row['c_alter_mobile'];
						$c_eamil=$row['c_eamil'];
						$c_address=$row['c_address'];
						$c_apincode=$row['c_apincode'];
						$c_service=$row['c_service'];
						$c_req=$row['c_req'];
						$c_booking_date=$row['c_booking_date'];
						$status=$row['status'];
					
					
						echo "<td>$order_ID</td>";
						echo "<td>$c_name</td>";
						echo "<td>$c_mobile</td>";
						echo "<td>$c_alter_mobile</td>";
						echo "<td>$c_eamil</td>";
						echo "<td>$c_address</td>";
						echo "<td>$c_apincode</td>";
						echo "<td>$c_service</td>";
						echo "<td>$c_req</td>";
						echo "<td>$c_booking_date</td>";
						if ($status=="pending") {
							echo "<td><font color='red'>$status</font></td>";
						}else{
							echo "<td><font color='green'>$status</font></td>";
						}
							
					}
						if (mysqli_num_rows($record_set)<1) {
								echo "<font color='red' size='6'>Data not Found!!!!!</font>";
							}
					
					mysqli_close($connection);
				}

							
			?>
		</tr>
	</table>
	<p id="in">if any Problem booking staus are not showing, data enterd wrong so don't worry E-Mail to :trustedhomeservice@gmail.com and contact us : 7888344564</p>

</div>

<div class="cright">
	<p>copyright@ TrustedHomeService</p>
</div>

</body>
</html>
