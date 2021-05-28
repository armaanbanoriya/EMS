<?php 
include 'session.php';
include 'header.php';

?>

    <!---view employee table--->
        <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>                  
                    <tr class="table-primary">
                      <th style="width: 10px">ID</th>
                      <th>Employee</th>                   
                      <th>Assign by</th>
                      <th>Message</th>
                      <th>Action</th>                      
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include_once 'dbcon.php';
                                   
                   $a = "SELECT * from task join registration on registration.userid=task.employee";

                   $b = mysqli_query($con,$a);
                   while ($result=mysqli_fetch_array($b)) {
                     # code...
                  
                    ?>
                    <tr>
                      <td><?php echo $result['tid']; ?></td>
                      <td><?php echo $result['firstname']; ?> <?php echo $result['lastname']; ?></td>
                      <td><?php echo $result['assign_by']; ?></td>
                      <td><?php echo $result['message']; ?></td>
                      
                     <td>                      
                      <a href="viewtask.php?id=<?php echo $result['tid'] ?>" class="btn btn-primary" >View</a>
                      <a class="btn btn-info" href="">Edit</a>
                      <a href="" class="btn btn-danger" >Delete</a>
                    </td>
                    </tr>
                    <?php
                    }
                    ?>                                       
                    </tbody>
                </table>
                </div>
             