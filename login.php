
<?php
session_start();

include 'dbcon.php';

if (isset($_POST['login'])) {


$user= $_POST['email'];
$pass= $_POST['password'];

$a= "SELECT * from registration where email='$user' && password='$pass'";

$query =mysqli_query($con,$a);

$total= mysqli_num_rows($query);
$data= mysqli_fetch_array($query);

//echo $data['role'];

if ($total==1) {
	$role=$data['role'];
	if ($role=='Admin') {
		$_SESSION['userid']=$data['userid'];
		$_SESSION['name']=$data['firstname'];
		header('location:admin/dashboard.php');
		# code...

	}elseif ($role=='Employee') {
		$_SESSION['userid']=$data['userid'];
		$_SESSION['name']=$data['firstname'];
		header('location:employee/empdashboard.php');
		# code...
	}elseif ($role=='Manager') {
		$_SESSION['userid']=$data['userid'];
		header('location:Manager/mandashboard.php');
		# code...
	}else{
		$_SESSION['error']='Invalid Credentials';
		header('location:index.php');
	}
	

	# code...
}else{
    $_SESSION['error']='Invalid Credentials';
	header('location:index.php');
}

}

?>