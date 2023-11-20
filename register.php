<?php include("includes/Header.php")   ?>



<div class="container  mt-5">
    <div class="row">

    <div class="col-md-10">
        <div class="card ml-3">
            <div class="card-header">
                <h4>Registration</h4>
            </div>
            <div class="card-body ">
                <form action="db/db.php" method="POST">
                    <div class="form-group">
                        <label >First Name</label>
                        <input type="text" name="fname" class="form-control" >
                    <div class="form-group">
                        <label >Last Name</label>
                        <input type="text" name="lname" class="form-control" >
                    <div class="form-group">
                        <label >Phone Number</label>
                        <input type="text" name="phone" class="form-control" >
                    <div class="form-group">
                        <label >Email</label>
                        <input type="email" name="email" class="form-control" >
                    
                    </div>
                    <div class="form-group">
                        <label >Password</label>
                        <input name="password" type="password" class="form-control" >
                    </div>
                   
                    <button  type="submit" name="register_btn" class="btn btn-primary">Submit</button>
                    <a class="btn btn-secondary ml-3" href="index.php">Cancel</a>
                    </form>     
            </div>
        </div>
    </div>
</div>

</div>




    
 <?php include("includes/Foter.php")   ?>