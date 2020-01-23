<?php session_start();
$con=mysqli_connect("localhost","root","","yodas_stuff");
?>


<!DOCTYPE html>

<html>
<body>
<hr style="
    display: block;
    margin-top: 0.5em;
    margin-bottom:0.5em;
    margin-left: 1em;
    margin-right: 1em;
    border-style: inset;
    border-width: 10px;"
}


 <center>
            <div style="height:auto; width:1050px;   margin:auto; border:1px solid #EBEBEB; background-color:#ffffff;  ">

            <div style="height:40px; width:1050px; height:auto; border:0px solid #000000; padding-top:5px; background-color:#F1F0F0; border-radius:5px; color:#1C7582;">

         <font style=" font-size:18px;"><center> &nbsp; Your Order Details</center></font>

            </div>

          

            <table border="0" style="width:1050px; height:30px; background-color:#7CE1D6;">

            <tr height="30">

            <td width="75" align="center"><b>S.No.</b></td>

           <td width="75" align="center"><b>Product Name</b></td>

            <td width="300" align="center"><b>Item</b></td>

            <td width="350" align="center"><b>Item Description</b></td>

            <td width="100" align="center"><b>Quantity</b></td>

            <td width="200" align="center"><b>Price(Rs.)</b></td>

            </tr>

            </table>

 
            <table border="0">

        

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
<?php
// page1.php


$_SESSION['var'] = 1;
$_SESSION['favcolor'] = 'green';
$_SESSION['animal']   = 'cat';


?>
</body>
</html>