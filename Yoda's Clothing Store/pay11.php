<?php

session_start();
$con=mysqli_connect("localhost","root","","yodas_stuff");
 include('dbconnection.php');

 if(isset($_POST['submitted']))

{


 $name=$_POST['name'];

   $address=$_POST['address'];
   
   $city=$_POST['city'];
   
   $state=$_POST['state'];
   
   
   $postal_code=$_POST['postal_code'];
   
   $country=$_POST['country'];
   
   $email=$_POST['email'];
   
   $phone=$_POST['phone'];
   
   
   
   




				 $query="insert into user_add values('','$name','$address','$city','$state','$postal_code','$country','$email','$phone')";

		 $result=mysqli_query($con,$query);


 if($result )

 		{
			
			 header('location:pay1.php');

 		}
 	



}



?>





<!DOCTYPE html>

<html>

<head>

<title>YODA'S STORE/newuser</title>

<link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />

 <script src="themes/1/js-image-slider.js" type="text/javascript"></script>

 <link href="generic.css" rel="stylesheet" type="text/css" />
 <style>
#block1, #block2
{
    display:inline;
}




@media print
{
.noprint {display:none;}
}

 
</style>

<BODY LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 >

<img  width="200" height="100" style="display: inline-block;
    
    border-radius: 4px;
    padding: 5px;
	float:left;" src="images/shop.png">
	
<img  width="200" height="100" style="display: inline-block;
    
    border-radius: 4px;
    padding: 5px;
	float:right;" src="images/shop.png">
	<br>
<center>
<h1 style="font-family:Arial,sans-serif; font-size:35pt; color:#08185A; font-weight:100; margin-bottom:0.1em;line-height:0%;color:blue;">  Yoda's Store</h1>
 <br>
 <p style="line-height:0%">LBS Marg ,New Delhi</p>
 <p style="line-height:10px">yodas_store@gmail.com,+91-962381000000</p>
    </center>
  <center>
	   <table width="2" height="28" border="0" cellpadding="2" cellspacing="2">
       </table>
	   </center>
	   

	<!--   
<left>	   
	   <h4 style="margin-left: 1em;"> Shipping Address</h4>
</left>

<right>
	   <h4 style="margin-left: 1em;"> Billing Address</h4>

</right>
-->


<style>
#block1, #block2
{
    display:inline-block;
}
 
 
table#t01 {
	
    border: 1px solid black;
	border-radius:5px;
	border-style: outset;
	 align:right;
	 border-color :powerblue;
	
}
 
div table#t02 {
	<!--border-style: outset;-->
    border: 1px solid black;
	

	
	
}

 

</style>
</head>
<br><br>
<div id="block1" align="left" style="margin-left:1em;" >

<h4 Style="font-size:15pt;color:red;"> Shipping Address</h4>


             <?php 

		     include('dbconnection.php');

		

				$email=$_SESSION['email'];
				
             $query="select * from user_add where email='".$email."'";

			 $result=mysqli_query($con,$query);

			 $i=1;

            $amt=0;		

			while($row=mysqli_fetch_array($result))

			{

			

	      ?>
<span style="font-family:Arial,sans-serif; font-size:15pt;  color:#08185A; font-weight:100; margin-bottom:0.1em;line-height:0%;">
           
<table id="t01" style="width:100%">
<tr>
<td>
		   <h6  align="left"><?php echo "<b>Name:   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</b>"; echo $row['name'];?></h6>
</td>
   </tr>       
<tr>
<td>
			<h6  align ="left"><?php echo "Address: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; echo $row ['address'];?></h6>

    </tr>
	
<tr>
<td>
            <h6  align="left"><?php  echo "City:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"  ;echo $row['city'];?></h6>
</td>
</tr>
<tr>
<td>
            <h6  align="left"><?php  echo "State:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "; echo $row['state'];?></h6>
</td>
</tr>
			<tr>

<td>
			<h6  align="left"><?php  echo "Zip Code:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "; echo $row['zip'];?></h6>
			</td>
			</tr>
			<tr>
<td>
			<h6  align="left"><?php echo "Country:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; " ; echo $row['country'];?></h6>
			</td>
			</tr>

			<tr>
			<td>
			<h6  align="left"><?php echo "Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; echo $row['email'];?></h6>
			</td>
			</tr>
			<tr>
		
<td>
			<h6  align="left"><?php   echo "Phone:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "  ;echo $row['phone'];?></h6>
          </td>
		  </tr>
</table>
		  </span>
            


            <?php

		break;
		}

		

		?> 
		
<!--
        <tr style="background-color:#7CE1D6; height:30px; ">

        <td width="100" style="background-color:#FFFFFF;"></td>

       <td width="100" style="background-color:#FFFFFF;"></td>

      <td width="300" style="background-color:#FFFFFF;"></td>

       <td width="350" style="background-color:#FFFFFF;"></td>

       <td  width="100" align="center"><b>Total</b></td>

       <td  width="200" align="center"></td>

            </tr></table>
-->




</div>
<!--
<div id="block2" align="right" >
<h4 style="margin-left:65em;"> Billing Address</h4>

</div>

-->
<hr style="
    display: block;
    margin-top: 0.5em;
    margin-bottom:0.5em;
    margin-left: 1em;
    margin-right: 1em;
    border-style: groove;
    border-width: 2px;"
}


 <center>
            <div style="height:auto; width:1050px;   margin:auto; border:1px solid #EBEBEB; background-color:#ffffff;  ">

            <div style="height:40px; width:1050px; height:auto; border:0px solid #000000; padding-top:5px; background-color:#F1F0F0; border-radius:5px; color:#1C7582;">

         <font style=" font-size:18px;"><center> &nbsp; Your Order Details</center></font>

            </div>

          

            <table border="0" id="t02" style="width:1050px; height:30px; background-color:#7CE1D6;">

            <tr height="30">

            <td width="75" align="center"><b>S.No.</b></td>

           <td width="75" align="center"><b>Product Name</b></td>

            <td width="300" align="center"><b>Item</b></td>

            <td width="350" align="center"><b>Item Description</b></td>

            <td width="100" align="center"><b>Quantity</b></td>

            <td width="200" align="center"><b>Price(Rs.)</b></td>

            </tr>

            </table>

 
            <table border="0" style="width:1050px;">

        

            <tr style=" background-color:#fffff; ">

             <?php 

		     include('dbconnection.php');

		

				$email=$_SESSION['email'];
             $query="select * from shopping_cart where email='".$email."'";

			 $result=mysqli_query($con,$query);

			 $i=1;

            $amt=0;		

			while($row=mysqli_fetch_array($result))

			{

			$price=$row['price']*$row['quantity'];

	      ?>

            <td width="75" align="center"><?php echo $i;?></td>

            <td width="75"  align ="center"><?php echo $row ['product_code'];?></td>

            <td width="300" align="center"><img src="images/<?php echo $row['image1'];?>" height="80" width="110" style="border:0px solid #000000;" ></td>

            <td width="350" align="center"><?php echo $row['product_name'];?></td>

            <td width="100" align="center"><?php echo $row['quantity'];?></td>

             <td width="200" align="center"><?php echo'Rs.'.$price;?></td>

            

             </tr>

            <?php

			$i=$i+1;

$amt=$amt+$price;
$_SESSION['amt']=$amt;

		}

		

		?> 

        <tr style="background-color:#7CE1D6; height:30px; ">

        <td width="100" style="background-color:#FFFFFF;"></td>

       <td width="100" style="background-color:#FFFFFF;"></td>

      <td width="300" style="background-color:#FFFFFF;"></td>

       <td width="350" style="background-color:#FFFFFF;"></td>

       <td  width="100" align="center"><b>Total</b></td>

       <td  width="200" align="center"><?php echo" <font color='#FF0000'> <b>Rs. </b></font>" .$amt;?></td>

            </tr>
			<!--
		<tr style="width:1050px; height:30px; background-color:#7CE1D6;" ">
		<td width="105px" align="center" style="background-color:#FFFFFF;">Payement Option:Cash on Delivery</td>
		
		</td>
			</tr>
			-->
			
			<table border="0" style="width:1050px; height:30px; background-color:#7CE1D6;">

            <tr height="30">

            <td width="75" align="center"><b>Payement Option:Cash on Delivery</b></td>



            </tr>

            </table>

			</table>
<!--
            <div style="width:1050px; height:50px; margin-bottom:20px; border:0px solid #000000; margin-top:50px; margin-right:20px;"align="right">

            <div style="width:300px; height:50px; border:0px solid #000000; " >

            </div>

        </div><!--slider down close-->
 
<span  class="noprint">
<br>
<!--
<form action="index.php" metohd="post" name="form2"> -->


<p>Click here to print Invoice  <button onclick="myFunction()" style="margin-left:0.2em;" class="noprint">Print </button></p>
<form action="clearcart.php" method="post">
    <input type="submit" name="submitted" value="Delete Cart" />
</form>


<script>
function myFunction() {
    window.print();
}
	
</script>



</body>

</html>