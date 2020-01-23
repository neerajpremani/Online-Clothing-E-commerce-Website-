<?php
@$code=$_GET['code1'];
?>
<?php $con=mysqli_connect("localhost","root","","yodas_stuff");session_start();
include('dbconnection.php');
$que="insert into product1 ('product_code','product_name','price','image1') select product_code, product_name,price,image1 where product_code='$code'" ;
			 $res=mysqli_query($con,$que);
			 if($res)
			 {
			 echo "";
			 			 }
 ?>
