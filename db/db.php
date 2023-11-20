<?php include("dbconfig.php")  ?>

<?php   

  if(isset($_POST["register_btn"])) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $password = $_POST["password"];

 
    

    $sql = "INSERT INTO users (fname,lname,phone,email,password) VALUES ('$fname','$lname','$phone','$email','$password')";

    $result = mysqli_query($conn, $sql);
  
    if($result){
      header("location:../index.php");
    }else{
      echo "Something went wrong" . mysqli_error($conn);
    }
  }

  if(isset($_POST["update"])) {
    $id = $_POST['id'];
    $fname = $_POST["fname"]; 
    $lname = $_POST["lname"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $password = $_POST["password"];
  
  $sql = "UPDATE users SET fname='$fname', lname='$lname', phone='$phone',email='$email',password='$password' WHERE id='$id'";
  $result = mysqli_query($conn, $sql);
  if($result){

    header("location:../index.php");
  }else{
    echo "Something wrong". mysqli_error($conn);
  }
  
  }













?>