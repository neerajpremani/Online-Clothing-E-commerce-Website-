<?php 

	$con=mysqli_connect("localhost","root","","yodas_stuff");
session_start();
 $email=(isset($_SESSION['email']));

	$pwd=(isset($_SESSION['pwd']));
	
	
	

	  include('dbconnection.php');
$code=$_REQUEST['code'];
	
	
	   
    ?>




<!DOCTYPE html>

<html>

<head>

<title>Yoda's Store/viewcart</title>

<link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />

 <script src="themes/1/js-image-slider.js" type="text/javascript"></script>

 <link href="generic.css" rel="stylesheet" type="text/css" />

</head>

<body>



<div style="width:100%; height:auto;">



   <!--header --><div style="height:120px; width:100%; background-color:#8B8A90;border:0px solid #000000;">

  <?php include ('header.php'); ?>

   </div>



  <!--menu--> <div style="height:45px; width:100%; background-color:#269FB2; border:0px solid #269FB2;">

    <?php include ('menu.php'); ?>

   </div><!--menu close-->

  

  <!--cc--><div style="height:auto; width:100%;border:0px solid #269FB2;">

  

    <!--sliderall--> <div style="height:328px; margin:auto; width:1050px; border:0px solid #990000;  ">

       <?php include ('slider.php');?>

       

                  </div><!--sliderall close-->

 

 

  

  

<!--slider down data-->

            <table style="height:auto; width:1050px; margin:auto;   border:0px solid #000000; background-color:#FFFFFF; ">

           <tr><td>

            <div style="height:35px; width:1050px; border:0px solid #000000; padding-top:5px; background-color:#D3D1D1; border-radius:5px; color:#1C7582;">

         <font style=" font-size:18px; margin-left:10px;"><b>My Account</b></font>

            </div>

            <div style="margin-top:10px; width:1045px;">

           

           <div style="width:200px; height:248px;background-color:#FFFFFF;border:1px #CCCCCC solid;float:left;"><?php include('left.php'); ?></div>

            

            <!--registration form--><div style="border:0px solid #999999; border-radius:5px; height:auto; width:780px; float:left; margin-left:5px; margin-bottom:10px;">

            <div style="height:35px; width:770px; border:0px solid #000000; margin-top:5px; background-color:#F1F0F0; border-radius:5px; color:#1C7582;">

         <font style=" font-size:18px;">Ratings!!</font>

            </div>

          
			<form action="tryit.php" method="post"></br>
			<b>Product</b> &nbsp &nbsp<input type="text" name="product" value="<?php  echo htmlspecialchars($code);	?>" readonly="readonly" /></br>
			 <b>Rate:</b> &nbsp; &nbsp; &nbsp;  <input type="text" name="term" placeholder="Rate This!" />
			</br><input type="submit" name="submit" value="Submit!" />
			</br>
			</form>

            <div style="width:770px; height:70px; border:0px solid #000000; margin-top:20px;">

            </div>
 

            </div><!--registration form-->
   
   </td> </tr>            

        </table><!--slider down close-->


       <!--footer--><div style="width:100%; background-color:#414040; height:150px; border:1px solid #000000; ">

         <?php include('footer.php'); ?>

         </div><!--footer close-->

     </div> <!--center close-->

           </div><!--main close-->





</body>

</html>

