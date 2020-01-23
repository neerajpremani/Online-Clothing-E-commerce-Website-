<?php $con=mysqli_connect("localhost","root","","yodas_stuff");session_start();
 ?>
<?php
include ('dbconnection.php');
if(isset($_POST["btnupdate"]))
{ 
 //echo "QQQQQQ-----$code1";

$pname=$_POST['pname'];$pcode=(isset($_POST['pcode']) ? $_POST['pcode'] : '');
$pcat=(isset($_POST['pcat']) ? $_POST['pcat'] : '');
$price=(isset($_POST['pprice']) ? $_POST['pprice'] : '');
$desc=$_POST['desc'];
$brand=(isset($_POST['brand']) ? $_POST['brand'] : '');
$category=$_POST['category'];
$features=$_POST['features'];
$Ratings=(isset($_POST['ratings']) ? $_POST['ratings'] : '');
$model=$_POST['model'];
$type=$_POST['type'];
$display=$_POST['display'];
$waranty=$_POST['waranty'];
$shipping_time=$_POST['shipping_time'];
$price=$_POST['price'];
$offer_price=$_POST['offer_price'];
$save=$_POST['save'];$quantity=$_POST['quantity'];

$code2=$_SESSION['CODE'];
$image=$_FILES["image"]["name"];
$size=$_FILES["image"]["size"];
//echo"WWWWWWWW-$image";
//echo"WWWWWWWW-$size";

if($size)
{
	include ('dbconnection.php');
	move_uploaded_file($_FILES["image"]["tmp_name"],"images/".$_FILES["image"]["name"]);

	$squery="Update product set product_name='$pname',product_price='$price',product_code='$pcode',description='$desc', brand='$brand',category='$category',features='$features',Ratings='$Ratings',model='$model',type='$type',display='$display',waranty='$waranty',shipping_time='$shipping_time',price='$price',offer_price='$offer_price',save='$save',image1='$image',quantity='$quantity' where product_code='$pcode'";
//echo"$squery";
$res=mysqli_query($con,$squery);

	if($res)
	{
		echo "<script>alert('record updated with image $code1');</script>".'<br>';
	}
}
else
{
include ('dbconnection.php');
	$squery="Update product set product_name='$pname',product_price='$price',description='$desc', brand='$brand',category='$category',features='$features',Ratings='$Ratings',model='$model',type='$type',display='$display',waranty='$waranty',shipping_time='$shipping_time',price='$price',offer_price='$offer_price',save='$save' where product_code='$code2'";
$res=mysqli_query($con,$squery);
	if($res)
	{
		echo "<script>alert('record updated');</script>".'<br>';
	}
}


}

?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ShoppingMyChoice</title>

<link rel="stylesheet" href="style.css" type="text/css" />


</head>
<body>
<form action="" method="post" enctype="multipart/form-data" name="form2">
<?php include('header.php');?>
  <!--middle-->
      <div style="width:1050px; height:auto; margin:auto;border:#000099 1px solid;">
   
<!--left-->
<div ><?php include('left.php'); ?></div>
<!--right-->
<div style="width:810px; height:auto; float:left; margin:auto; border:1px solid #999999; border-radius:5px; margin-top:5px; margin-left:5px; ">

 <div style=" width:810px; float:left; height:30px;  border:solid 1px #999900; background-color:#006699; border-radius:5px; color:#FFFFFF;" align="right">
<a href="update1.php" style="text-decoration:none; color:#FFFFFF;"><input type="button" name="back" value="BACK" style="width:100px; height:25px; color:#FFFFFF; border:#FFFFFF 1px solid; background-color:#000033; border-radius:5px;"></a>
</div>
    
<div style=" width:600px; float:left; height:auto;  border:solid 1px #999900;">

              <table width="600" style="margin-top:0px;" border="1">
             
              
               <tr >
                <?php
			 include('dbconnection.php');
			 $code1=$_GET['x'];
			 $_SESSION['CODE']=$code1;
			// echo "QQQQQQ-----$code1";
			 $cate=(isset($_POST['category']) ? $_POST['category'] : '');
			 $query="select * from product where product_code='$code1'";
			 
			 $result=mysqli_query($con,$query);
		
				while($row=mysqli_fetch_array($result))
				{
		?>
               
              <td >Product_Name:</td>
               <td width="349"><input type="text" name="pname" value="<?php echo $row['product_name'];?>"/></td>			    <td >Product_Code:</td>               <td width="349"><input type="text" name="pcode" value="<?php echo $row['product_code'];?>"/></td>
             </tr>
             
            
              <td>Product_Price:</td><td width="349"><input type="text" name="pprice" value="<?php echo $row['product_price'];?>"/></td>
              <td>Description:</td><td width="349"><input type="text" name="desc" value="<?php echo $row['description'];?>"/>
              </tr>
              
               <tr></td>
                   <td>Brand:</td><td width="349"><input type="text" name="brand" value="<?php echo $row['brand'];?>"/></td>
                   <td>Category:</td><td width="349"><input type="text" name="category" value="<?php echo $row['category'];?>"/></tr>
                   
             <tr></td>
               <td>Features:</td><td width="349"><input type="text" name="features" value="<?php echo $row['features'];?>"/></td>
               <td>Ratings</td><td width="349"><input type="text" name="ratings" value="<?php echo $row['Ratings'];?>"/></tr>
               
               <tr></td>
                 <td>Model:</td><td width="349"><input type="text" name="model" value="<?php echo $row['model'];?>"/></td>
                 <td>Type:</td><td width="349"><input type="text" name="type" value="<?php echo $row['type'];?>"/></tr>
                 
                 <tr></td>
                 <td>Display:</td><td width="349"><input type="text" name="display" value="<?php echo $row['display'];?>"/></td>
                 <td>Waranty:</td><td width="349"><input type="text" name="waranty" value="<?php echo $row['waranty'];?>"/></tr>
                 
                 <tr></td>
                    <td>Shipping_time:</td><td width="349"><input type="text" name="shipping_time" value="<?php echo $row['shipping_time'];?>"/></td>
                    <td>Price:</td><td width="349"><input type="text" name="price" value="<?php echo $row['price'];?>"/></tr>
                    
                   <tr></td>
                    <td>Offer_price:</td><td width="349"><input type="text" name="offer_price" value="<?php echo $row['offer_price'];?>"/></td>
                    <td>Save:</td><td width="349"><input type="text" name="save" value="<?php echo $row['save'];?>"/></tr>
                  <td>Quantity:</td><td width="349"><input type="text" name="quantity" value="<?php echo $row['quantity'];?>"/></tr>
               <tr style="margin-top:20px;"><td></td><td></td></tr>
               </table>
</div > 
   <!----------------------------------------------------image------------------------------------------------------>
    
    <div style="width:200px; height:200px; border:1px solid #999999; float:right;">
    <div style="width:150px; height:200px; border:1px solid #999999;border-radius:5px;"><img src='<?php echo"images/$row[image1]";?>' style="height:130px; width:150px;"></div><br />
    <input type="file" name="image" /></div>      
    
               
 
    
   
    <div  style=" width:810px; float:left; height:30px;  border:solid 0px #999900; background-color:#ffffff; border-radius:5px; color:#FFFFFF;" align="center" >
     <input type="submit" name="btnupdate" value="Update" style="width:100px; height:25px; color:#FFFFFF; border:#FFFFFF 1px solid; background-color:#006699; border-radius:5px;">
    </div>
     <?php 
				}
				?>
                </form>
 
</div>

 </div>
</div>
</div>
</body>
</html>

