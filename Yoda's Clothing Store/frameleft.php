<?php


$con=mysqli_connect("localhost","root","","yodas_stuff");
 include('dbconnection.php');
 ?>
 
<!DOCTYPE html>

<html>

<head>


#block1, #block2
{
    display:inline;
}




@media print
{
.noprint {display:none;}
}

 
</style>
   

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
	align:right;

	
	
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
<span style="font-family:Arial,sans-serif;  color:#08185A; font-weight:100; margin-bottom:0.1em;line-height:0%;">
 
		   <p align="left"><?php echo "<b>Name:   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</b>"; echo $row['name'];?></p>
</br>
			<p align="left"><?php echo "Address: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; echo $row ['address'];?></p>
</br>
						<p align="left"><?php  echo "City:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"  ;echo $row['city'];?></p>
</br>
        <p align="left">   <?php  echo "State:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "; echo $row['state'];?></p>
</br>
	<p align="left">		<?php  echo "Zip Code:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "; echo $row['zip'];?></p>
</br>
			<p align="left"><?php echo "Country:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; " ; echo $row['country'];?></p>
	</br>
		<p align="left">	<?php echo "Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; echo $row['email'];?></p>
</br>
			<p align="left"><?php   echo "Phone:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "  ;echo $row['phone'];?></p>
</br>
</pre>
		  </span>
            


            <?php

		break;
		}

		

		?> 
		</div>
		</html>