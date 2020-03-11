<?php

$b_ID=$_POST['b_ID'];
echo "$b_ID";
$b_mobile=$_POST['b_mobile'];
echo "<br>$b_mobile";
$b_date=$_POST['b_date'];
echo "<br>$b_date";

//2. Create a database connection:-

$connection = mysqli_connect ("localhost","root","","trustedhomeservice");

//select database:-

$query_text="SELECT * FROM `customer_bookings` WHERE order_ID=$b_ID AND c_mobile=$b_mobile";

echo "<br><br>";

$record_set=mysqli_query($connection, $query_text);

echo "<br>";
//Display Records from table

while ($row=mysqli_fetch_array($record_set))
{
	$order_ID=$row['order_ID'];
	$c_name=$row['c_name'];
	$c_mobile=$row['c_mobile'];
	$c_alter_mobile=$row['c_alter_mobile'];
	$c_eamil=$row['c_eamil'];
	$c_address=$row['c_address'];
	$c_apincode=$row['c_apincode'];
	$c_service=$row['c_service'];
	$c_req=$row['c_req'];
	$time_date=$row['time_date'];
	$status=$row['status'];


	echo "<br>$order_ID";
	echo ",$c_name";
	echo ",$c_mobile";
	echo ",$c_alter_mobile";
	echo ",$c_eamil";
	echo ",$c_address";
	echo ",$c_apincode";
	echo ",$c_service";
	echo ",$c_req";
	echo ",$time_date";
	echo ",$status";	
}
if (mysqli_num_rows($record_set)<1) {
		echo "<br>Data not Found!!!!!";
	}
	else{
		echo "<br>Data found";
	}

mysqli_close($connection);


?>








