<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="">
	<input type="date" name="b_date">
	<input type="submit" name="submit">
</form>

</body>
</html>

<?php 
if (isset($_POST['submit'])) {
	
	$b_date=$_POST['b_date'];
	
	echo date($b_date);
}
 ?>