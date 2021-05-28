
<style>
  .navbar-nav{
    margin-left: auto;
  }
  .nav-item{
    margin-right: 10px;
  }
  
</style>

	<title>Employee Management System</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>



  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">  


	
</head>
<body>
<!--navbar start--->
<nav class="navbar navbar-expand-lg navbar-light bg-light ml-auto">
  <div class="container-fluid">
    <a class="navbar-brand" href="dashboard.php">Employee Management System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav" >
        <li class="nav-item" >
        	<a class="nav-link btn btn-warning" href="employeeregistration.php">Employee Registration</a>
        </li>
        <li  class="nav-item">
          <a  class="nav-link btn btn-info" href="assign.php">Assign Task</a>          
        </li>
        
        <li class="nav-item" >
        <a  class="nav-link btn btn-primary " href="assignleave.php">Leave</a>          
        </li >
        <li class="nav-item" >
        <a  class="nav-link btn btn-danger " href="../logout.php">Logout</a>          
        </li >
        <?php
        echo $_SESSION['name'];

        ?>

        
   
        </ul>
    </div>
  </div>
</nav>