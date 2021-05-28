

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
                      <th>Status</th>
                      <th>Comments</th>
                                       
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                   
                    include_once 'dbcon.php';
                    $i=0;
                   $userid=$_SESSION['userid'];
                   $a = "SELECT * from applyleave where applyleave=$userid ";
                   $b = mysqli_query($con,$a);
                   while ($result=mysqli_fetch_array($b)) {
                     # code...
                  
                    ?>
                    <tr><td><?php echo $i++ ?></td>
                      <td><?php echo $result['leave_from']; ?></td>
                      <td><?php echo $result['leave_to']; ?></td>
                      <td><?php echo $result['earning_leave']; ?></td>
                      <td><?php echo $result['medical_leave']; ?></td>
                      <td><?php echo $result['casual_leave']; ?></td>
                      <td> <input type="submit" class="btn btn-danger" value="<?php echo $result['status'] ?>" ></td>
                      <td><?php echo $result['comments'] ?></td>


                      
                      
                     
                    </tr>
                    <?php
                    }
                    ?>                                       
                    </tbody>
                </table>
                </div>
