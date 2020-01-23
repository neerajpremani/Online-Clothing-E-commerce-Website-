<?php session_start(); ?>

<?php

if(isset($_POST['submit']))

{

 	include 'dbconnection.php';
	$con=mysqli_connect("localhost","root","","yodas_stuff");

					$email=$_POST['email'];

					$password=$_POST['password'];

					//echo"$email<br>$password";

					$que="select * from user_details where email='$email' and password='$password'";

					//echo"$que<br>";

					$res=mysqli_query($con,$que);

					$count=mysqli_num_rows($res);

				//	echo"QQQQQQQQQQ---------------$count";

					//echo"$res";

					while($data=mysqli_fetch_array($res))

						//echo"$data[name]";

					if($count!=0)

					{

						$_SESSION['email']="$email";

						$_SESSION['pwd']="$password";

						header('location:cartdetails.php');

				}

}

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<title>Yoda's Stuff/login</title>

<link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />

 <script src="themes/1/js-image-slider.js" type="text/javascript"></script>

 <link href="generic.css" rel="stylesheet" type="text/css" />



</head>

<body>



<div style="width:100%; height:auto;">



   <!--header --><div style="height:120px; width:100%; background-color:#8B8A90;border:0px solid #000000;">

  <?php include('header.php'); ?>

   </div>



  <!--menu--> <div style="height:45px; width:100%; background-color:#269FB2; border:0px solid #269FB2;">

    <?php include ('menu.php'); ?>

   </div><!--menu close-->



  <!--cc--><div style="height:auto; width:100%;border:0px solid #269FB2;">



   <!--sliderall--> <div style="height:328px; margin:auto; width:1050px; border:0px solid #990000;  ">

       <?php include ('slider.php');?>



                  </div><!--sliderall close-->







<!--slider down data-->

            <div style="height:500px;; width:1050px;  margin-top:20px; margin:auto; border:0px solid #000000; background-color:#FFFFFF;  ">

            <div style="height:35px; width:1050px; border:0px solid #000000; margin-top:10px; background-color:#F1F0F0; border-radius:5px; color:#1C7582;">

         <font style=" font-size:18px;"><b>Login</b></font>

            </div>

            <form name="form2" method="post">









            <table border="0" style="background-color:#F1F0F0; margin-top:50px ; width:500px; border:1px solid #999999; border-radius:5px; height:300px;" align="center">

<tr><td>



            <table border="0" style="background-color:#F1F0F0; margin-top:10px ; width:400px; border:0px solid #999999; border-radius:5px; height:300px;" align="center">

            <tr><td style="color:#828282; font-size:18px;" colspan="2">Already a Customer</td></tr>

            <tr><td colspan="2">Please Login Below</td></tr>

            <tr><td colspan="2"><b>Email Address</b><br><input type="text" name="email"></td></tr>

            <tr><td colspan="2"><b>Password</b><br><input type="password" name="password"></td></tr>

            <tr><td>

            <input type="submit" name="submit" value="submit" style="border:0px solid #000000; border-radius:5px; background-color:#269FB2; height:25px; color:#FFFFFF;"></td><td><a href="signup.php" style="text-decoration:none; color:#828282; font-size:20px;"><b>New User Sign Up</b></a></td></tr>

            </table>

</td></tr></table>

           </form>



        </div><!--slider down close-->



       



       <!--footer--><div style="width:100%; background-color:#414040; height:150px; border:1px solid #000000; ">

         <?php include('footer.php'); ?>

         </div><!--footer close-->

     </div> <!--center close-->

           </div><!--main close-->





</body>

</html>



