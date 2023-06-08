<?php



error_reporting(E_ALL);
ini_set('display_errors', 1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | CHECKINN</title>
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

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Retrieve user from the database
    $selectQuery = "SELECT * FROM registration WHERE email = ?";
    $stmt = mysqli_prepare($conn, $selectQuery);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        $hashedPassword = $user["password"];
        $role = $user["role"];

        // Verify the entered password
        if (password_verify($password, $hashedPassword)) {
            // Password is correct, handle role-based redirection
            if ($role === "admin") {
                header("Location: adminSide.php");
                exit();
            } elseif ($role === "user") {
                header("Location: userlanding.php");
                exit();
            } else {
                echo "Unrecognized role";
            }
        } else {
            echo "Incorrect password";
        }
    } else {
        echo "Email not found";
    }
}
?>




      <div class="row fullwidth" >

     <div class="col-md-4 col-lg-4 "></div>
     <div class="col-md-4 col-lg-4 MainScreen " style="background:white">
      <div class="docenter">

</div>

    <img src="./checkinn.png" alt="checkin" class="adjustLogo"/>

  <h5 class="docenter">LOGIN</h5>
  
 

<hr class="w50">

  <div class="fieldsAndButton M17"  >
          
  <!-- username  -->
    <div class="form-outline ">
      <form action="login.php" method="post">
  <input type="email" id="typeText" placeholder="Enter Email" name="email" class="form-control fieldColor" />

  <input type="password"  placeholder="Enter Your Password" name="password" class="form-control fieldColor" />
  
  

<!-- Login Button  -->

<!-- <a href="./userLanding.php" style="text-decoration: none;"> -->
<div class="d-grid gap-2  ">

 <button type="submit" name="submit" class="btn btn-warning btn-block mt3" >LOGIN</button>
</div>
<!-- </a> -->
</form>
<!-- Forgot Password link  -->

<a href="./signup.php" style="text-decoration: none;">
<div class="doEnd">
  <button type="button" class="btn btn-link" style="color: black;">Sign Up</button>
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