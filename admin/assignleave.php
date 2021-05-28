<?php 
include 'session.php';
include 'header.php';
?>
<style>
	

</style>

<div class="container" >
	<div class="row mt-5 " >

	<div class="col-md-4 ms-md-auto ">

		<div class="card">
		Employee's:
		<div class="card-body" >
			<form method="post"  >

			<?php
			include 'dbcon.php';
			$a = "SELECT * from registration where role='Employee' order by userid desc;  ";
			$b = mysqli_query($con,$a);
			while ($c= mysqli_fetch_array($b)) {
				# code...
			


			?>
			<input type="checkbox" value="<?php echo $c['userid'] ?>" name="employee[]"> <?php echo $c['firstname'] ?>	
			<br>
			<?php
			}
			?>
			<input type="hidden" name="assign_by" value="<?php echo $_SESSION['userid'] ?>">

		</div>
		</div>	
		<br>
		<a href="alleave.php" class="btn btn-warning" >All leaves's</a>	
	</div>

	<!-------------------------form start ------------------------>
	<div class="col-md-6 ">
		<div class="card" >
		<div class="card-body">
		<label>Valid From</label>	
		<input type="date" class="form-control" name="valid_from" required>
		<label>Valid to</label>
		<input type="date" class="form-control" name="valid_to" required>
		<label>Earning Leave</label>	
		<input type="text" class="form-control" name="earning_leave" required>
		<label>Medical Leave</label>	
		<input type="text" class="form-control" name="medical_leave" required>
		<label>Casual Leave</label>	
		<input type="text" class="form-control" name="casual_leave" required>

  <div class="form-group">
 <input type="submit" class="btn btn-primary" name="submit" value="Assign">
  </div>
  <!-----------------------form end------------------------------->
  </form>  
</div>

		</div>
		</div>
	</div>
	</div>
</div>
<?php
include 'dbcon.php';
if (isset($_POST['submit'])) {

 $b = $_POST['assign_by'];

  $d= $_POST['valid_from'];
  $e= $_POST['valid_to'];
 $f= $_POST['earning_leave'];
 $g= $_POST['medical_leave'];
 $h= $_POST['casual_leave'];


  $a = $_POST['employee'];
// print_r($a);

foreach($a as $employeelist){

$ds= "INSERT into assignleave(employee,assign_by,valid_from,valid_to,earning_leave,medical_leave,casual_leave)values('$employeelist','$b','$d','$e','$f','$g','$h')";
$query= mysqli_query($con,$ds);

if ($query) {
	echo "<script>alert('data inserted') </script>";
	# code...
}else{
		echo "<script>alert('insert error!') </script>";

}
}

}

?>
