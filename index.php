
<?php include_once 'header.php';
session_start();
 ?>
<link rel="stylesheet" type="text/css" href="login.css">
<head>

	<style>

 .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }


	</style>
</head>

<body class="text-center" style="background-image: url(img/FreeVector-Abstract-Floral-Background.jpg); background-repeat: no-repeat; background-size: cover; ">
<div class="container" >
	<div class="row">

    <main class="form-signin">
		<form method="post" action="login.php" >
			<div class="col-md-4 mx-auto mt-5 " >

				<img src="img/tenor.gif" width="150"> <br>
					<!-- <h1 class="h3 mb-3" >Login</h1> -->
					<br>
					<label class="visually-hidden" >Email</label>
					<input type="email" class="form-control  " placeholder="Email Address " name="email" required autofocus>
					<label class="visually-hidden">Password</label>
					<input type="password" class="form-control  " placeholder="Password" name="password" required>
				<br>
				<br>
				<button type="submit" name="login" class="btn btn-primary w-100 " >Login</button>
				</div>
				</div>
			</div>
		</form>
    </main>
		 <div class="login-logo" style="color: red;" >


    <?php
   if(isset($_SESSION['userid']))
   {
     echo $_SESSION['userid'];
     unset( $_SESSION['userid']);
   }elseif(isset($_SESSION['error'])) {
      # code...
      echo $_SESSION['error'];
      unset($_SESSION['error']);
    }
     ?>
   </div>

	</div>
</div>
</body>
