
<!--main--><div style="height:100px; width:1150px; margin:auto; border:0px solid #000000;">

<!--logo--><div style="width:150px; height:115px; float:left; border:0px solid #FFF;"><a href="index.php"><img src="images/shop.PNG"  height="118" width="150"/></a></div><!--logo close-->

<!--right--><div style="height:115px; width:990px; margin-top:0px; border:0px solid #FF0000; float:left;">

<!--menu--><div style="width:900px; height:30px; float:left; border:0px solid #FFFFFF; font-size:12px;" align="right">

 <a href="index.php" style="text-decoration:none;color:#FFFFFF;"><img src="images/home.png" height="40" width="63" /></a>&nbsp;  &nbsp;

<a href="signup.php" style="text-decoration:none;color:#FFFFFF;">

<img src="images/ggh.png"  width="60" height="50"/></a>&nbsp;   &nbsp;

<a href="myaccount.php" style="text-decoration:none;color:#FFFFFF;"><input type="button" value="MY ACCOUNT" style="border-radius:5px; background-color:#269FB2;; border:0px solid #0033FF; font-family:'Monotype Corsiva'; height:22px; color:#FFFFFF;"></a>&nbsp;   &nbsp;

<a href="cartdetails.php" style="text-decoration:none;color:#FFFFFF;"><input type="button" value="MY CART" style="border-radius:5px; background-color:#269FB2;; border:0px solid #0033FF; font-family:'Monotype Corsiva'; height:22px; color:#FFFFFF;"></a>&nbsp;   &nbsp;

<?php

if(isset($_SESSION['email'])&&isset($_SESSION['pwd']))
{
	?>

 <a href="logout.php" style="text-decoration:none;"><input type="button" name="signin" value="SIGN OUT" style="border-radius:5px;  color:#FFFFFF; border:0px solid #FFFFFF; background-color:#269FB2;;; font-family:'Monotype Corsiva';height:25px; box-shadow: 0px 0px 10px #CCCCCC;"></a>

 <?php
}

else

{

	?>

    <a href="login.php" style="text-decoration:none;"><input type="button" name="signin" value="SIGN IN" style="border-radius:5px; background-color:#269FB2;; border:0px solid #FFFFFF; font-family:'Monotype Corsiva'; height:25px; color:#FFFFFF; box-shadow: 0px 0px 10px #CCCCCC;"></a>

	<?php

    }

	?>

</div><!--menu close-->

<div style="height:80px; width:490px; border:0px solid #FF0000; float:left;" align="center">

  <strong style="color:#FFFFFF; font-size:32px; font-family:"Courier New", Courier, monospace; margin-top:0px;" align="center"><b>Yoda's Store</b></strong>

</div>


<div style="border:0px solid #FF0000; width:400px; margin-top:30px; height:50px; float:left;" align="right">

<?php

include 'dbconnection.php';

$con=mysqli_connect("localhost","root","","yodas_stuff");

if(isset($_SESSION['email'] )&& isset($_SESSION['pwd']))

{

$email=$_SESSION['email'];

    $query="select * from user_details where email='$email'";

			$result=mysqli_query($con,$query);
			
			while($row=mysqli_fetch_array($result))

	      {
		  ?>
		  
		  <p style=" color:#FFFFFF; font-family:'Monotype Corsiva'; font-size:22px;"><b>Welcome: <font style=" font-size:20px;"> &nbsp; <?php echo $row['name'];?></font></b></p>


          
		  <?php

}

}

?>

</div>


</div><!--right close-->

</div><!--main close-->