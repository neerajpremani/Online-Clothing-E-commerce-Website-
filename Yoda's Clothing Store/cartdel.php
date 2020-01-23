<?php
	session_start();$con=mysqli_connect("localhost","root","","yodas_stuff");
	$code=$_GET['code2'];
	if(!isset($_SESSION['email']) ||(!isset($_SESSION['pwd'])))
	{
		
		header('location:login.php');
	}
	 $email=$_SESSION['email'];
	$pwd=$_SESSION['pwd'];
 ?>
<?php
	include 'dbconnection.php';
	$query="delete from shopping_cart where ser_no='".$code."'";		$query1=mysqli_query($con,"select product_code,quantity from shopping_cart where ser_no='$code'");	$result = mysqli_fetch_array($query1);	$i=$result['product_code'];	$q=$result['quantity'];	$queryhc=mysqli_query($con,"delete from history_acc where product_code='$i'");	$querycc=mysqli_query($con,"delete from cartdetails where product_code='$i'");		$qu=mysqli_query($con,"update product set quantity=quantity+'$q' where product_code='$i'");	
	$rs=mysqli_query($con,$query);
	if($rs)
	{
		header('location:cartdetails.php' );
	}
?>