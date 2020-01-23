<?php 

	$con=mysqli_connect("localhost","root","","yodas_stuff");
session_start();
 $email=$_SESSION['email'];

	$pwd=$_SESSION['pwd'];


	include('dbconnection.php');

	if($_POST['submitted'])
	{	

		$query="delete from shopping_cart where email='".$email."'";
		$result=mysqli_query($con,$query);
			
			if($result)
			{
				header('location:cartdetails.php');
			}
	}
    ?>





