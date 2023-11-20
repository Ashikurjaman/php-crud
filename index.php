<?php include("includes/Header.php")   ?>
<?php include("db/dbconfig.php")  ?>


        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Crud  -  Project</h4>
                        <a href="register.php" class="btn btn-dark float-right">Register/Add</a>
                    </div>
                    <div class="card-body">
                    <?php   
                    $sql = "SELECT * FROM users";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0) {
                        ?>
                    
                        
                    
                    
                


                    <table class="table table-bordered">
                            <thead>
                                <tr class="text-center">
                                <th scope="col">ID</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Email</th>
                                <th scope="col">Password</th>
                                <th scope="col">Mobile Number</th>
                                <th scope="col">Action</th>
                                <!-- <th scope="col">Delete</th> -->
                                
                                </tr>
                            </thead>
                            <tbody>
                                <?php  
                                while ($row = mysqli_fetch_assoc($result)) {
                                
                                    ?>
                                
                                <tr class="text-center">
                                <th><?php echo $row["id"];   ?></th>
                                <td> <?php echo $row["fname"];   ?></td>
                                <td><?php echo $row["lname"];   ?></td>
                                <td>@<?php echo $row["email"];   ?></td>
                                <td><?php echo $row["password"];   ?></td>
                                <td><?php echo $row["phone"];   ?></td>
                                <td><a href="registrationEdit.php?id=<?php echo $row["id"];   ?>" class="btn btn-info ">Edit</a>
                                 <a href="register.php" class="btn btn-danger ">Delete</a></td>
                                </tr>
                                
                                <?php }  ?>
                            </tbody>
                            </table>
                                    <?php
                        }else{
                    echo"No Record Found";
                }
                    
                    
                    
                    ?>
                    </div>
                </div>
            </div>
        </div>

        </div>



    
 <?php include("includes/Foter.php")   ?>