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
		 
		

		 if($result)

 		{
			 $quer="select * from shopping_cart where email='".$email."'";

			 $resul=mysqli_query($con,$quer);
			 while($row=mysqli_fetch_array($resul))
			 {
			 $pn=$row['product_name'];
			 $pc=$row['product_code'];
			 $im=$row['image1'];
			 $qn=$row['quantity'];
			 $pr=$row['price'];
   
   
				 $queryins="insert into history_acc values('','$email','$pc','$pn','$im','$qn','$pr','')";
				 $qins=mysqli_query($con,$queryins);
                 
   
			 }

			
			 header('location:login.php');

 		}
 	



}



?>




<!DOCTYPE html>

<html>

<head>

<title>Yoda's Stuff/Search</title>

<link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />

 <script src="themes/1/js-image-slider.js" type="text/javascript"></script>

 <link href="generic.css" rel="stylesheet" type="text/css" />

 <script type="text/javascript" src="clients.js"></script>



</head>



<body>



<div style="width:100%; height:auto;">



   <!--header --><div style="height:120px; width:100%; background-color:#8B8A90;border:0px solid #000000;">

  <?php include ('header.php'); ?>

   </div>

  

  <!--cc--><div style="height:auto; width:100%;border:0px solid #269FB2;">

 

<!--
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">-->
<style>
	h1       { font-family:Arial,sans-serif; font-size:24pt; color:#08185A; font-weight:100; margin-bottom:0.1em}
    h2 co    { font-family:Arial,sans-serif; font-size:24pt; color:#FFFFFF; margin-top:0.1em; margin-bottom:0.1em; font-weight:100}
    h3.co    { font-family:Arial,sans-serif; font-size:16pt; color:#000000; margin-top:0.1em; margin-bottom:0.1em; font-weight:100}
    h3       { font-family:Arial,sans-serif; font-size:16pt;background-color:#ff0000 color:#08185A; margin-top:0.1em; margin-bottom:0.1em; font-weight:100}
    body     {
	font-family:Verdana,Arial,sans-serif;
	font-size:11px;
	color:#08185A;
	background-color: #FFFFFF;
}
	form th 		,body th { font-size:12px;background:#015289;color:#FFFFFF;font-weight:bold;height:30px;}
	form td 	 ,	 { font-size:12px;background:#DDE8F3}
	.pageTitle { font-size:24px;}
.style2 {color: #FFFFFF}
a:link {
	color: #FFFFFF;
}
body,td,th {
	color: #003399;
}
.style10 {color: #FFFFFF; font-style: italic; }
.style11 {font-family: Verdana, Arial, Helvetica, sans-serif; color: #FFFFFF;}
</style>
</HEAD>
<script language="JavaScript">
function validate(){
	
	var frm = document.frmTransaction;
	var aName = Array();
	aName['account_id'] = 'Account ID';
	aName['reference_no'] = 'Reference No';
	aName['amount'] = 'Amount';
	aName['description'] = 'Description';
	aName['name'] = 'Billing Name';
	aName['address'] = 'Billing Address';
	aName['city'] = 'Billing City';
	aName['state'] = 'Billing State';
	aName['postal_code'] = 'Billing Postal Code';
	aName['country'] = 'Billing Country';
	aName['email'] = 'Billing Email';
	aName['phone'] = 'Billing Phone Number';
	aName['ship_name']='Shipping Name';
	aName['ship_address']='Shipping Address';
	aName['ship_city']='Shipping City';
	aName['ship_state']='Shipping State';
	aName['ship_postal_code']='Shipping Postal code';
	aName['ship_country']='Shipping Country';
	aName['ship_phone']='Shipping Phone';
	aName['return_url']='Return URL';
	

	for(var i = 0; i < frm.elements.length ; i++){
		if((frm.elements[i].value.length == 0)||(frm.elements[i].value=="Select Country")){
						if((frm.elements[i].name=='country')||(frm.elements[i].name=="ship_country"))
					alert("Select the " + aName[frm.elements[i].name]);
					/*else
						
					alert("Enter the " + aName[frm.elements[i].name]);
				frm.elements[i].focus();
				return false;*/
			}
			if(frm.elements[i].name=='account_id'){
			
			if(!validateNumeric(frm.elements[i].value)){
					alert("Account Id must be NUMERIC");
			frm.elements[i].focus();
			return false;
			}
			}
			
			if(frm.elements[i].name=='amount'){
			if(!validateNumeric(frm.elements[i].value)){
					alert("Amount should be NUMERIC");
			frm.elements[i].focus();
			return false;
			}
			}
			if((frm.elements[i].name=='postal_code')||(frm.elements[i].name == 'ship_postal_code'))
			{
			if(!validateNumeric(frm.elements[i].value)){
					alert("Postal code should be NUMERIC");
			frm.elements[i].focus();
			return false;
			}
			}	
			
			if((frm.elements[i].name=='phone')||(frm.elements[i].name =='ship_phone')){
			if(!validateNumeric(frm.elements[i].value)){
					alert("Enter a Valid CONTACT NUMBER");
			frm.elements[i].focus();
			return false;
			}
			}		
    	
    
	
		if((frm.elements[i].name == 'name')||(frm.elements[i].name == 'ship_name'))
		{
		
		if(validateNumeric(frm.elements[i].value)){
					alert("Enter your Name");
			frm.elements[i].focus();
			return false;
			}
		}
		
				
		if(frm.elements[i].name=='ship_postal_code'){
			if(!validateNumeric(frm.elements[i].value)){
					alert("Postal code should be NUMERIC");
			frm.elements[i].focus();
			return false;
			}
			}		
    
			
							
		if(frm.elements[i].name == 'email'){
				if(!validateEmail(frm.elements[i].value)){
					alert("Invalid input for " + aName[frm.elements[i].name]);
					frm.elements[i].focus();
					return false;
				}		
			}
			
	}  
	return true;
}

	function validateNumeric(numValue){
		if (!numValue.toString().match(/^[-]?\d*\.?\d*$/)) 
				return false;
		return true;		
	}

function validateEmail(email) {
    //Validating the email field
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	//"
    if (! email.match(re)) {
        return (false);
    }
    return(true);
}


Array.prototype.inArray = function (value)
// Returns true if the passed value is found in the
// array.  Returns false if it is not.
{
    var i;
    for (i=0; i < this.length; i++) {
        // Matches identical (===), not just similar (==).
        if (this[i] === value) {
            return true;
        }
    }
    return false;
};

</script>
<BODY LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 >
<center>

 <table width='100%' cellpadding='0' cellspacing="0" ><tr><th width='90%'><h2 class='co'>&nbsp;Payment Integration Page</h2></th></tr></table>
    
  <center>
	   <table width="2" height="28" border="0" cellpadding="2" cellspacing="2">
       </table>
	   <h3> Required Details</h3>
	   <table width="600" border="0" cellpadding="2" cellspacing="2">
         <tr>
           <th colspan="2"><span class="style2" style="background:#015289">FOR ANY QUERIES,KINDLY BROWSE</span> <span class="style2" style="background:#015289">OUR KNOWLEDGEBASE </span><span class="style10"><a href="http://support.ebs.in/index.php?_m=knowledgebase&_a=view" target="_ blank" class="style11" >CLICK HERE</a></span></th>
         </tr>
		 
       </table>
       <p>&nbsp;</p>
     
  </center>
<form  method="post" action="pay1.php" name="frmTransaction" id="frmTransaction" onSubmit="return validate()">
  <table width="600" cellpadding="2" cellspacing="2" border="0">

  <tr>
    <th colspan="2"><span class="style2">Billing Address</span></th>
  </tr>
  <tr>
    <td class="fieldName" ><span class="error">*</span>Name</td>
    <td align="left">
	<input name="name" type="text" maxlength="255" /> </td>
  </tr>
  <tr>
    <td class="fieldName"><span class="error">*</span>Address</td>
    <td align="left"><input name="address" type="text" />    </td>
  </tr>
  <tr>
    <td class="fieldName"><span class="error">*</span>City</td>
    <td align="left"><input name="city" type="text" />    </td>
  </tr>
  <tr>
    <td class="fieldName"><span class="error">*</span>State/Province</td>
    <td align="left"><input name="state" type="text" />    </td>
  </tr>
  <tr>
    <td class="fieldName"><span class="error">*</span>ZIP/Postal Code</td>
    <td align="left"><input name="postal_code" type="text" />    </td>
  </tr>
  <tr>
    <td class="fieldName"><span class="error">*</span>Country</td>
    <td align="left"><select name="country">
      <option value="Select Country" selected="">Select Country</option>
      
      <option value="AUS">Australia</option>
      <option value="AUT">Austria</option>
     
      <option value="IND">India</option>
      <option value="IOT">British Indian Ocean Territory</option>
      <option value="IRL">Ireland</option>
     
    </select>    </td>
  </tr>
  <tr>
    <td class="fieldName"><span class="error">*</span>Email</td>
    <td align="left"><input name="email" type="text" />    </td>
  </tr>
  <tr>
    <td class="fieldName"><span class="error">*</span>Telephone</td>
    <td align="left"><input name="phone" type="text" maxlength="20"/></td>
  </tr>
  <tr>
    <th colspan="2"><span class="style2">Shipping Address </span></th>
  </tr>
  <tr>
    <td class="fieldName"><span class="error">*</span> Name</td>
    <td align="left"><input name="ship_name" type="text" /></td>
  </tr>
  <tr>
    <td class="fieldName"><span class="error">*</span>Address</td>
    <td align="left"><input name="ship_address" type="text" />    </td>
  </tr>
  <tr>
    <td class="fieldName"><span class="error">*</span>City</td>
    <td align="left"><input name="ship_city" type="text" />    </td>
  </tr>
  <tr>
    <td class="fieldName"><span class="error">*</span>State/Province</td>
    <td align="left"><input name="ship_state" type="text" />    </td>
  </tr>
  <tr>
    <td class="fieldName"><span class="error">*</span>ZIP/Postal Code</td>
    <td align="left"><input name="ship_postal_code" type="text" />    </td>
  </tr>
  <tr>
    <td class="fieldName"><span class="error">*</span>Country</td>
    <td align="left"><select name="ship_country">
      <option value="Select Country" selected="">Select Country</option>
      <option value="AUS">Australia</option>
      <option value="AUT">Austria</option>
     
      <option value="IND">India</option>
      <option value="IOT">British Indian Ocean Territory</option>
      <option value="IRL">Ireland</option>
     
    </select>    </td>
  </tr>
  <tr>
    <td class="fieldName"><span class="error">*</span>Telephone</td>
    <td align="left"><input name="ship_phone" type="text" /></td>
  </tr>

  <tr>
    
    <input name="secure_hash" type="hidden" value="" />
  </tr>

   <tr>
    <td valign="top" align="center" colspan="2"><input name="submitted" value="Submit" type="submit" /> <!--<input type="submit" name="continue" value="Continue" style="border:1px solid #999999; border-radius:5px; height:25Spx; width:80px; font-size:16px; margin-right:25px;" align="middle"> -->
      &nbsp;
      <input name="reset" type="reset" value="Reset" />    </td>
  </tr>
  <tr>
    <th height="30" colspan="2"><span class="style2">*DENOTES </span><a href="https://support.ebs.in/index.php?_m=knowledgebase&_a=viewarticle&kbarticleid=183&nav=0,5,2" target="_blank" class="style2"><em>mandatory fields</em></a></th>
  </tr>
    </table>
</form>
</center>
</table>


       <!--footer--><div style="width:100%; background-color:#414040;background:#414040; height:150px; border:1px solid #000000; ">

         <?php include('footer.php'); ?>

         </div><!--footer close-->

     </div> <!--center close-->

           </div><!--main close-->
</body>

</html>