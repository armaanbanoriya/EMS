<?php include 'header.php'; ?>
<?php
include 'dbcon.php';
if (isset($_GET['id'])) {
     $id=$_GET['id'];
  # code...

$a = "SELECT * from registration where userid=$id";
$b = mysqli_query($con,$a);
$c= mysqli_fetch_assoc($b);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>

<br>
<br>

<div class="container" >
	<div class="card-body mx-auto " style="border: 2px solid;" >
	<form class="row g-3" method="post" enctype="multipart-form-data">
    <input type="hidden" name="userid" value="<?php echo $c['userid'] ?>" >
  
  <div class="col-md-6">
	<label >First Name</label>
	<input type="text" name="firstname" value="<?php echo $c['firstname']; ?>" class="form-control" name="firstname">			
  </div>
  <div class="col-md-6">
    <label>Last Name</label>
	<input type="text" class="form-control" value="<?php echo $c['lastname']; ?>" name="lastname">
  </div>
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" name="email" value="<?php echo $c['email'] ?>" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-12">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" name="password" value="<?php echo $c['password'] ?>" class="form-control" id="inputPassword4">
  </div>
  <div class="col-md-6" >
  <label>Department</label>
  <select class="form-select" name="department">
  <option >Select </option>
  <option value="Front-end Web Developer" <?php if ($c['department']=='Front-end Web Developer') {
    echo "selected";
  } ?> >Front-end Web Developer</option>
  <option value="Back-end Web Developer" <?php if ($c['department']=='Back-end Web Developer') {
    echo "selected";
  } ?>  >Back-end Web Developer</option>  
  </select>
  </div>
  <div class="col-md-6" >
  <label>Role</label>
  <select class="form-select" name="role" >
  <option>Select</option>
  <option value="Admin" <?php if ($c['role']=='Admin') {
    echo "selected";
  } ?> >Admin</option>

  <option value="Manager" <?php if ($c['role']=='Manager') {
    echo "selected";
  } ?> >Manager</option>

  <option value="Employee" <?php if ($c['role']=='Employee') {
    echo "selected";
  } ?> >Employee </option>
  </select>
  	
  </div>
    <button type="submit" name="update" class="btn btn-primary">UPDATE</button>
  </div>
</form>
</div>
</div>
</body>
</html>
<?php
include 'dbcon.php';
if (isset($_POST['update'])) {
  $id=$_POST['userid'];

$a= $_POST['firstname'];
$b= $_POST['lastname'];
$c= $_POST['email'];
$d= $_POST['password'];
$e= $_POST['department'];
$f= $_POST['role'];

$g = "UPDATE registration set firstname='$a',lastname='$b',email='$c',password='$d',department='$e',role='$f' where userid=$id";

$query= mysqli_query($con,$g);

if ($query) {
  header('location:admin/dashboard.php');

  # code...
}else{
  echo "<script>alert('insert error') </script>";
}
}


?>