<?php $con=mysqli_connect("localhost","root","","yodas_stuff");session_start();?>

<?php
	include('dbconnection.php');
	 $code1=$_GET['x'];
	$query="delete from product where ser_no='".$code1."'";
	$rs=mysqli_query($con,$query);
	if($rs)
	{
		header('location:delete1.php');
	}
?>
