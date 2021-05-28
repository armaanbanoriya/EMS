

<?php include 'header.php';
 ?>

    <!---view employee table--->
        <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>                  
                    <tr class="table-primary">
                      <th>ID</th>
                      <th>Employee</th>                
                      <th>Valid From</th>
                      <th>Valid TO</th>
                      <th>Earning Leave</th>
                      <th>Medical Leave</th>
                      <th>Casual leave</th> 
                      <th>Status</th>
                      <th>Comments</th>
                      <th></th>
                                        
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    session_start();
                    include_once 'dbcon.php';
                    $i=0;
                   $userid=$_SESSION['userid']; 
                   $a = "SELECT * from applyleave join registration on registration.userid=applyleave.applyleave";
                   $b = mysqli_query($con,$a);
                   while ($result=mysqli_fetch_array($b)) {
                     # code...
                  
                    ?>
                    <tr><td><?php echo $i++ ?></td>
                      <td><?php echo $result['firstname'] ?> <?php echo $result['lastname'] ?></td>
                      <td><?php echo $result['leave_from']; ?></td>
                      <td><?php echo $result['leave_to']; ?></td>
                      <td><?php echo $result['earning_leave']; ?></td>
                      <td><?php echo $result['medical_leave']; ?></td>
                      <td><?php echo $result['casual_leave']; ?></td>
                      <td> <input type="submit" class="btn btn-danger" value="<?php echo $result['status'] ?>" ></td>
                      <td>
                        <form method="post">

                          <textarea name="comments" class="form-control"></textarea>       
                      </td>
                      <input type="hidden" name="aid" value="<?php echo $result['aid'] ?>" >
                      <td>
                        <button type="submit" name="appoorved" class="btn btn-success" >Approoved</button>
                        <button type="submit" name="rejected"  class="btn btn-danger" >Rejected</button>

                     </form>   

                      </td>
                     
                      


                      
                      
                     
                    </tr>
                    <?php
                    }
                    ?>                                       
                    </tbody>
                </table>
                </div>
<?php
include 'dbcon.php';

if (isset($_POST['appoorved'])) {

$status='Appoorved';

 $a= $_POST['comments'];
 $aid=$_POST['aid'];

 $ad= "UPDATE applyleave set status='$status',comments='$a' where aid=$aid";
  mysqli_query($con,$ad);
}

if (isset($_POST['rejected'])) {

$status='Rejected';

 $a= $_POST['comments'];
 $aid=$_POST['aid'];

 $ad= "UPDATE applyleave set status='$status',comments='$a' where aid=$aid";
  mysqli_query($con,$ad);
}
?>

