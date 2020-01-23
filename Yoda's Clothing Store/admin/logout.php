<?php$con=mysqli_connect("localhost","root","","yodas_stuff");
session_start();

	
unset($_SESSION['name']);
session_destroy();

header('Location:index.php');
?>
