<?php
include 'dbcon.php';
if (isset($_POST['register'])) {
	$id= $_POST['register'];

$a=	$_POST['firstname'];
$b=	$_POST['lastname'];
$c=	$_POST['email'];
$d=	$_POST['password'];
$e=	$_POST['department'];
$f=	$_POST['role'];

$g = "INSERT INTO registration(firstname,lastname,email,password,department,role)values('$a','$b','$c','$d','$e','$f')";

$query= mysqli_query($con,$g);

if ($query) {
	echo "<script> alert('data inserted') </script>";
}else{
	echo "<script> alert('insert error') </script>";
}
}

?>