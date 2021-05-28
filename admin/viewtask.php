<?php
include 'session.php';
 ?>

<?php include 'header.php'; ?>

<div class="container">
<div class="card-body" >
	<?php
	include 'dbcon.php';

	if (isset($_GET['id'])) {
		$id=$_GET['id'];	# code...
	
$a=	"SELECT * from registration where role='Employee'";
$b= mysqli_query($con,$a);
$c = mysqli_fetch_array($b);

	?>
			<form method="post"  >
			
			<input type="hidden" value="<?php echo $c['userid'] ?>" name="employee">
				
			<br>
		
			<input type="hidden" name="assign_by" value="<?php echo $_SESSION['userid'] ?>">

		</div>
		<div class="col-md-6 ">
		<div class="card" >
		<div class="card-body">
		<div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="message">
  </textarea>
  <label for="floatingTextarea">Assign Task</label>
  <div class="">
 <input type="submit" class="btn btn-primary" name="submit" value="Assign">
  </div>
  <?php
}
  ?>
  </form> 
  <?php
include 'dbcon.php';
if (isset($_POST['submit'])) {

 $b = $_POST['assign_by'];
 $c = $_POST['message'];
 $a = $_POST['employee'];
// print_r($a);






$d= "INSERT into task(employee,message,assign_by)values('$a','$c','$b')";
$query= mysqli_query($con,$d);

if ($query) {
	echo "<script>alert('data inserted') </script>";
	# code...
}else{
		echo "<script>alert('insert error!') </script>";

}
}



?>
 



<?php
		include 'dbcon.php';

	if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $a = "SELECT * from task where tid=$id";
   		$b = mysqli_query($con,$a);
		$c = mysqli_fetch_assoc($b);    
?>
	<div class="row mt-5">
	<div class="col-md-6 offset-md-3">

		<div class="card">
			<div class="card-title">
				Assigned Task:
			<div class="card-body" style="border: 2px solid;">
				<h3><?php echo $c['message'] ?></h3>
				
<?php
}
?>
    <br>
<?php
	include 'dbcon.php';		 
    $id = $_GET['id'];
   	$a = "SELECT * from taskreply where tid=$id";
   	$b = mysqli_query($con,$a);
   	while ($c = mysqli_fetch_array($b)) {				 	
?>
	
	<h2 class="alert alert-info"><?php echo $c['m_reply'] ?></h2>
<?php
}
?>
				
				
			</div>
			</div>
			
		</div>
		<br><br>

		
		</div>		
	</div>	
</div>
