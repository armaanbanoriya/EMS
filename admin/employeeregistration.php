<?php include 'session.php'; ?>
<?php include 'header.php'; ?>
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
	<form class="row g-3" method="post" action="insertreg.php" >
  
  <div class="col-md-6">
	<label >First Name</label>
	<input type="text" name="firstname" class="form-control" name="firstname">			
  </div>
  <div class="col-md-6">
    <label>Last Name</label>
	<input type="text" class="form-control" name="lastname">
  </div>
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-12">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-md-6" >
  <label>Department</label>
  <select class="form-select" name="department">
  <option>Select </option>
  <option>Front-end Web Developer</option>
  <option>Back-end Web Developer</option>  
  </select>
  </div>
  <div class="col-md-6" >
  <label>Role</label>
  <select class="form-select" name="role" >
  <option>Select</option>
  <option>Admin</option>
  <option>Manager</option>	
  <option>Employee</option>
  </select>
  	
  </div>
    <button type="submit" name="register" class="btn btn-primary">Register</button>
  </div>
</form>
</div>
</div>
</body>
</html>