<?php

// require_once "dbConnect.php";
// if($_SERVER["REQUEST_METHOD"] == "POST")
// {
//   $name = $_POST["name"];
//   $password = $_POST["password"];
//   $email = $_POST["email"];


//   $sql="INSERT INTO `users` (`name`, `email`, `password`, `role`) VALUES ($name, $email, $password, 'user')";
//   $result = mysqli_query($conn,$sql);
// }

error_reporting(E_ALL);
ini_set('display_errors', 1);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | CHECKINN</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="../javascript/index.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background: linear-gradient(to right, #ffc107, #cc2e2e);">

<?php

include "dbConnect.php";

if(isset($_POST["submit"])) {
  $name = mysqli_real_escape_string($conn, $_POST["name"]);
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $password = mysqli_real_escape_string($conn, $_POST["password"]);
  $role="user";
  $pass = password_hash($password, PASSWORD_BCRYPT);

  $emailQuery = "SELECT * FROM registration WHERE email = '$email'";
  $query = mysqli_query($conn, $emailQuery);

  $emailCount = mysqli_num_rows($query);

  if ($emailCount > 0) {
    echo("Email Exists");
  } else {
    $insertQuery = "INSERT INTO registration (name, email, password,role) VALUES ('$name', '$email', '$pass','$role')";
    $iquery = mysqli_query($conn, $insertQuery);

    if ($iquery) {
      echo("Insertion Successful");
    } else {
      echo("Insertion Not Successful");
    }
  }
}
?>



    <div class="row fullwidth">

     <div class="col-md-4 col-lg-4 "></div>
     <div class="col-md-4 col-lg-4 MainScreen ">
      <div class="docenter">


</div>
 
<img src="./checkinn.png" alt="checkin" class="adjustLogo"/>

  <h5 class="docenter">SIGN UP</h5>
   




<hr class="w50">

  <div class="fieldsAndButton M17"  >
          
  <!-- username  -->
    <div class="form-outline ">
      <form action="login.php" method="POST">
  <input type="text" id="name" placeholder="Enter Full Name" name="name" class="form-control fieldColor" required />


  <input type="email" id="email" placeholder="Enter Email" name="email" class="form-control fieldColor" required/>

  <input type="password" id="password" placeholder="Enter Password" name="password" class="form-control fieldColor" required />

  
  

<!-- Login Button  -->

<div class="d-grid gap-2  ">

 <button type="submit" name="submit" class="btn btn-warning btn-block mt3">Sign Up</button>
</form>
</div>
<!-- Forgot Password link  -->

<a href="./login.php" style="text-decoration: none">
  <div class="doEnd">
    <button type="button" class="btn btn-link" style="color: black;">Log In</button>
  </div>
</a>

</div>

</div>

</div>
   
  </div>

  <div class="col-md-4 col-lg-4 "></div>

     


 </div>



   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
     crossorigin="anonymous"></script>
 
</body>
</html>