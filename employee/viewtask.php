<?php
include 'session.php';
 include 'header.php';
?>

<div class="container">
	<div class="row mt-5">
	<div class="col-md-6 offset-md-3">
<!---------------------------Admin message print--------------------------------------->
		<div class="card">
			<div class="card-title">
				Assigned Tasks:
			<div class="card-body" style="border: 2px solid;">
				<?php
				include 'dbcon.php';

			 if (isset($_GET['id'])) {
    			 $id = $_GET['id'];

   				 $a = "SELECT * from task where tid=$id";
   				 $b = mysqli_query($con,$a);
			     $c = mysqli_fetch_assoc($b);
    }
    ?>
    		<h3><?php echo $c['message'] ?></h3>					
				
<!-----------------------------------Admin message end--------------------------->				
			</div>
			</div>
			
		</div>
		<br><br>
<!----------------------------------reply UI------------------------------------------->
		<div class="card">
			<form method="post" >
			<div class="card-title">
				Enter message
				<div class="card-body">

					<input type="hidden" name="userid" value="<?php echo $_SESSION['userid'] ?>">

					<input type="hidden" name="tid" value="<?php echo $id; ?>">
					 <textarea class="form-control mb-4" placeholder="Assign Task Here..." name="m_reply"></textarea>
            <button type="submit" name="submit" class="btn btn-outline-success">Reply</button>
					
				</div>				
			</div>
<!-----------------------------------end reply UI--------------------------------------->
			</form>		
<!----------------------------- Admin message show---------------------------------------->
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
<!-------------------------------Admin Message End-------------------------------------->

		</div>
		</div>		
	</div>	
</div>
<?php
include 'dbcon.php';
if (isset($_POST['submit'])) {

$a =$_POST['userid'];
$b =mysqli_real_escape_string($con, $_POST['m_reply']);
$c =$_POST['tid'];


$b= "INSERT INTO taskreply(userid,tid,m_reply)values('$a','$c','$b')";
$query=	mysqli_query($con,$b);

if ($query) {
	echo "<script>alert('reply sent')</script>";
}else{
	echo "<script>alert('insert error')</script>";

}


	}
?>
