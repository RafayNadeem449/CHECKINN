<?php

include "dbConnect.php";

// Retrieve all users
$query = "SELECT * FROM registration";
$result = mysqli_query($conn, $query);

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin | Red Store</title>
    <link rel="stylesheet" href="adminLanding.css" />
    <link rel="stylesheet" href="../javascript/index.js" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
    />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
  </head>

  <style>
.addHotelBtn
{
  background: #ffc30f;
    border: #ffc30f;
    padding: 12px;
    border-radius: 13px;
    width: 38%;
}

/* Start of Properties For The Form Section */
.m3 {
  margin-top: 3%;
}

.margin {
  margin-bottom: 20%;
}
#new {
  font-weight: bolder !important;
  border: 2px solid black !important;
}
#output {
  border: 4px solid white !important;
}

.All-Fields {
  background-color: white;
  height: 88%;
}

.m2 {
  margin-top: 2%;
}

#data {
  display: flex;
  justify-content: center;
  box-shadow: #ff5454;
  border-color: #ff5454;
}

#new-form {
  background-color: #eaebec;
  color: black;
  margin-top: 30%;
}

.flex {
  display: flex;
  justify-content: center;
}

#ml70 {
  margin-left: 70%;
}

#mail {
  background-color: #eaebec;
  color: black "
}

#work
{
  background-color: #EAEBEC;
   color:#5E6278";
}

#username {
  background-color: #eaebec;
  color: black 
}

#security
{
  background-color: #EAEBEC;
   color:#5E6278"
}

select {
  appearance: none;
  border: none;
  background: rgb(0, 0, 0) url("../images/DropDown.svg") no-repeat;
  background-position: right 3px top 50%;
}

.addFlx
{
  display: flex;
    flex-direction: column;
    align-items: center;

}

/* End of Properties For The Form Section */

</style>
  
  <body>
    <div class="container-fluid">
      <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 sidebarmain">
          <div
            class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100"
            style="width: 86%"
          >
            <div class="logoAndText d-none d-sm-flex mb6">
              <img
                src="./checkinn.png"
                alt="checkinn"
                height="40px"
                class="mb6 adminImg"
              />
            </div>

            <ul
              class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start sidebarMainDiv"
              id="menu"
            >
              <li class="nav-item">
                <a href="adminSide.php" class="nav-link px-0 align-middle active">
                  <i class="bi bi-people"></i>
                  <span class="ms-1 d-none d-sm-inline">Users</span>
                </a>
              </li>

              <li class="nav-item">
                <a href="Hotel.php" class="nav-link px-0 align-middle active">
                  <i class="bi bi-card-text"></i>
                  <span class="ms-1 d-none d-sm-inline">Hotels</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="addHotel.php" class="nav-link px-0 align-middle active">
                  <i class="bi bi-card-text"></i>
                  <span class="ms-1 d-none d-sm-inline">Add Hotels</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="deleteHotel.php" class="nav-link px-0 align-middle active">
                  <i class="bi bi-card-text"></i>
                  <span class="ms-1 d-none d-sm-inline">Delete Hotels</span>
                </a>
              </li>
            </ul>
            <hr />
          </div>
        </div>
        <div class="col">
          <div class="row topHeader">
            <div class="col-md-6 col-lg-6 col-sm-6 headerFirstSection">
              <div>
                <h5>User</h5>
                <p>All Users</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-6">
              <div class="dropdown headerSecondSection">
                <a
                  href="#"
                  class="d-flex align-items-center secondary text-decoration-none dropdown-toggle"
                  id="dropdownUser1"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <p>Admin</p>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <img
                    src="https://github.com/mdo.png"
                    alt="hugenerd"
                    width="30"
                    height="30"
                    class="rounded-circle"
                  />
                </a>
                <ul
                  class="dropdown-menu dropdown-menu-dark text-small shadow"
                  aria-labelledby="dropdownUser1"
                >
                  <!-- <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li> -->
                  <li>
                    <a class="dropdown-item" href="login.php">Sign out</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div>

           <h1 style="text-align:center">Hotels Available for Deletion</h1>
          <?php
include "dbConnect.php";

if (isset($_GET['id'])) {
    $hotelId = $_GET['id'];

    $deleteQuery = "DELETE FROM hotel WHERE h_id = ?";
    $stmt = mysqli_prepare($conn, $deleteQuery);
    mysqli_stmt_bind_param($stmt, "i", $hotelId);
    $success = mysqli_stmt_execute($stmt);

    if ($success) {
        echo "Hotel deleted successfully.";
    } else {
        echo "Error deleting hotel.";
    }
}

// Fetch and display the updated hotel table
$selectQuery = "SELECT * FROM hotel";
$result = mysqli_query($conn, $selectQuery);

echo '<table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Ratings</th>
                <th scope="col">Price</th>
                <th scope="col">Location</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>';

while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>
            <th scope="row">' . $row['h_id'] . '</th>
            <td>' . $row['h_name'] . '</td>
            <td>' . $row['h_ratings'] . '</td>
            <td>' . $row['h_price'] . '</td>
            <td>' . $row['h_location'] . '</td>
            <td>
                <a href="deleteHotel.php?id=' . $row['h_id'] . '" class="btn btn-warning btn-sm">Delete</a>
            </td>
        </tr>';
}

echo '</tbody>
    </table>';

mysqli_close($conn);
?>



    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
