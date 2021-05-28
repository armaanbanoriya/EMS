

<?php include 'session.php';
 include 'header.php';
 ?>

    <!---view employee table--->
        <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>                  
                    <tr class="table-primary">
                      <th>Sr. No</th>                
                      <th>Task</th>
                      <th>Assign by</th>
                      <th>Date</th>

                      <th>Action</th>                      
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include_once 'dbcon.php';
                    $i=1;
                   $a = "SELECT * from task where employee ='".$_SESSION['userid']."'";
                   $b = mysqli_query($con,$a);
                   while ($result=mysqli_fetch_array($b)) {
                     # code...
                  
                    ?>
                    <tr><td><?php echo $i++; ?></td>
                      <td><?php echo $result['message']; ?></td>
                      <td><?php echo $result['assign_by']; ?></td>
                      <td><?php echo $result['created_at']; ?></td>
                      
                     <td>                      
                      <a href="viewtask.php?id=<?php echo $result['tid'] ?>" class="btn btn-primary" >View</a>
                      
                    </td>
                    </tr>
                    <?php
                    }
                    ?>                                       
                    </tbody>
                </table>
                </div>
