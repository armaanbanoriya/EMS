

<?php
include 'session.php';
 include 'header.php';
 ?>

    <!---view employee table--->
        <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>                  
                    <tr class="table-primary">
                      <th>ID</th>                
                      <th>Valid From</th>
                      <th>Valid TO</th>
                      <th>Earning Leave</th>
                      <th>Medical Leave</th>
                      <th>Casual leave</th> 
                                       
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include_once 'dbcon.php';
                    $i=0;
                   
                   $a = "SELECT * from assignleave where employee='".$_SESSION['userid']."'";
                   $b = mysqli_query($con,$a);
                   while ($result=mysqli_fetch_array($b)) {
                     # code...
                  
                    ?>
                    <tr><td><?php echo $i++ ?></td>
                      <td><?php echo $result['valid_from']; ?></td>
                      <td><?php echo $result['valid_to']; ?></td>
                      <td><?php echo $result['earning_leave']; ?></td>
                      <td><?php echo $result['medical_leave']; ?></td>
                      <td><?php echo $result['casual_leave']; ?></td>

                      
                      
                     
                    </tr>
                    <?php
                    }
                    ?>                                       
                    </tbody>
                </table>
                </div>

                
<div class="col-md-6 offset-3 "> 
    <div class="card" >
    <div class="card-body">
      <form method="post">
      <input type="hidden" name="userid" value="<?php echo $_SESSION['userid'] ?>" >
      
    <label>Leave From</label> 
    <input type="date" class="form-control" name="leave_from" required>
    <label>Leave to</label>
    <input type="date" class="form-control" name="leave_to" required>
    <label>Earning Leave</label>  
    <input type="text" class="form-control" name="earning_leave" required>
    <label>Medical Leave</label>  
    <input type="text" class="form-control" name="medical_leave" required>
    <label>Casual Leave</label> 
    <input type="text" class="form-control" name="casual_leave" required>
    <br>

  <div class="form-group">
 <input type="submit" class="btn btn-primary" name="submit" value="Apply Leave">
  </div>
</form>
</div>
</div>
</div>

<?php
include 'dbcon.php';
if (isset($_POST['submit'])) {
  $id=$_POST['submit'];

  $a= $_POST['userid'];
 $b=  $_POST['leave_from'];
 $c=  $_POST['leave_to'];
 $d= $_POST['earning_leave'];
 $e=  $_POST['medical_leave'];
 $f= $_POST['casual_leave'];
 $status = "pending";

 $ed= "INSERT INTO applyleave(applyleave,leave_from,leave_to,earning_leave,medical_leave,casual_leave,status)values('$a','$b','$c','$d','$e','$f','$status')";
$query= mysqli_query($con,$ed);

if ($query) {

  echo "<script>alert('data inserted')</script>";
  # code...
}else{
    echo "<script>alert('insert error!')</script>";

}


}
  

?>


