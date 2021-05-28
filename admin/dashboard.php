<?php
include 'session.php';
?>
<?php include 'header.php';?>

    <!---view employee table--->
        <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>                  
                    <tr class="table-primary">
                      <th style="width: 10px">ID</th>
                      <th>First Name</th>                   
                      <th>Last Name</th>
                      <th>Email</th>
                      <th>Password</th>
                      <th>Department</th>
                      <th>Role</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include_once 'dbcon.php';
                   $a = "SELECT * from registration";
                   $b = mysqli_query($con,$a);
                   while ($result=mysqli_fetch_array($b)) {
                     # code...
                  
                    ?>
                    <tr>
                      <td><?php echo $result['userid']; ?></td>
                      <td><?php echo $result['firstname']; ?></td>
                      <td><?php echo $result['lastname']; ?></td>
                      <td><?php echo $result['email']; ?></td>
                      <td><?php echo $result['password']; ?></td>
                      <td><?php echo $result['department']; ?></td>
                      <td><?php echo $result['role']; ?></td>
                     <td>                      
                      <a href="" class="btn btn-primary" >View</a>
                      <a class="btn btn-info" href="../editregistration.php?id=<?php echo $result['userid'] ?>">Edit</a>
                      <a href="" class="btn btn-danger" >Delete</a>
                    </td>
                    </tr>
                    <?php
                    }
                    ?>                                       
                    </tbody>
                </table>
                </div>
             