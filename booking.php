<?php
include('dbConnect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nameOnCard = $_POST["nameOnCard"];
    $daysToStay = $_POST["daysToStay"];
    $hotelName =   $_POST["hotelName"];

    // Insert data into the database
    $sql = "INSERT INTO booking (nameOnCard, daysToStay,hotelName) VALUES ('$nameOnCard', '$daysToStay','$hotelName')";

    if ($conn->query($sql) === TRUE) { echo "Booking data inserted
successfully"; } else { echo "Error: " . $sql . "<br />" . $conn->error; }
$conn->close(); } ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <title>Booking || CHECKINN</title>
    <link rel="stylesheet" href="booking.css" />
  </head>
  <body>
    <div class="container">
      <form action="invoice.html" method="POST">
        <div class="row">
        
          
            <!-- Your billing address form fields here -->
         
          <div class="col">
            <h3 class="title">payment</h3>

            <div class="inputBox">
              <span>cards accepted :</span>
              <img src="./card.png" alt="cards" />
            </div>
            <div class="inputBox">
              <span>Hotel Name for Re-Confirmation</span>
              <input
                type="text"
                name="hotelName"
                placeholder="Hotel Name"
                required
              />
            </div>
            <div class="inputBox">
              <span>name on card :</span>
              <input
                type="text"
                name="nameOnCard"
                placeholder="Your Card Name"
                required
              />
            </div>
            <div class="inputBox">
              <span>Days to Stay:</span>
              <input type="number" name="daysToStay" placeholder="0" required />
            </div>
            
          </div>
        </div>

        <input type="submit" value="proceed to checkout" class="submit-btn" />
      </form>
    </div>
  </body>
</html>
