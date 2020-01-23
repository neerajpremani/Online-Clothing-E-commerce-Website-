<?php 

	$con=mysqli_connect("localhost","root","","yodas_stuff");


	    include('dbconnection.php');
		include('viewoldcart.php');
	//$code=$_REQUEST['code'];   
 		   
 $email=$_SESSION['email'];
$pwd=$_SESSION['pwd'];
		
$rate=(isset($_POST['term']) ? $_POST['term'] : '');
$pro=(isset($_POST['product']) ? $_POST['product'] : '');

	if($_POST['submit'])
	{	

		$query="update product set Ratings='$rate' where product_code='$pro'";
		$result=mysqli_query($con,$query);
			
			if($result)
			{
				echo "<script>alert('THANK YOU FOR RATING THE PRODUCT');</script>";
				header('location:viewoldcart.php');
			}
	}

    ?>
	
	  
	  
	  

