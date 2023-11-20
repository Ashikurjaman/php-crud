<?php include("includes/Header.php")   ?>

<?php include("db/dbconfig.php")  ?>


<?php   
    $id = $_GET["id"];
    $sql = "SELECT * FROM users Where id='$id'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        
        
        
        while ($row = mysqli_fetch_assoc($result)) {
            
            ?>

  



<div class="container  mt-5">
    <div class="row">

    <div class="col-md-10">
        <div class="card ml-3">
            <div class="card-header">
                <h4>User Edit</h4>
            </div>
            <div class="card-body ">
                <form action="db/db.php" method="POST">
                    <div class="form-group">
                    <input value="<?php echo $row["id"]; ?>" type="hidden" name="id" class="form-control" >
                        <label >First Name</label>
                        <input value="<?php echo $row["fname"]; ?>" type="text" name="fname" class="form-control" >
                    <div class="form-group">
                        <label>Last Name</label>
                        <input value="<?php echo $row["lname"]; ?>" type="text" name="lname" class="form-control" >
                    <div class="form-group">
                        <label >Phone Number</label>
                        <input value="<?php echo $row["phone"]; ?>" type="text" name="phone" class="form-control" >
                    <div class="form-group">
                        <label >Email</label>
                        <input value="<?php echo $row["email"]; ?>" type="email" name="email" class="form-control" >
                    
                    </div>
                    <div class="form-group">
                        <label >Password</label>
                        <input value="<?php echo $row["password"]; ?>" name="password" type="password" class="form-control" >
                    </div>
                   
                    <button  type="submit" name="update" class="btn btn-primary">Update</button>
                    <a class="btn btn-secondary ml-3" href="index.php">Cancel</a>
                    </form>     
            </div>
        </div>
    </div>
</div>

</div>

<?php

}

}else{
echo "No data found";
}
?>


    
 <?php include("includes/Foter.php")   ?>