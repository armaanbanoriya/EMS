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
		<a href="allassigntask.php" class="btn btn-success" >All Task's</a>	
	</div>
	<div class="col-md-6 ">
		<div class="card" >
		<div class="card-body">
		<div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="message">
  </textarea>
  <br>
  <label for="floatingTextarea">Assign Task</label>
  <div class="">
 <input type="submit" class="btn btn-primary" name="submit" value="Assign">
  </div>
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
 $c = $_POST['message'];
 $a = $_POST['employee'];
// print_r($a);



foreach($a as $employeelist){



$d= "INSERT into task(employee,message,assign_by)values('$employeelist','$c','$b')";
$query= mysqli_query($con,$d);

if ($query) {
	echo "<script>alert('data inserted') </script>";
	# code...
}else{
		echo "<script>alert('insert error!') </script>";

}
}

}

?>
