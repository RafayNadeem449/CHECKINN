<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./index.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <title>CHECKINN</title>
  </head>
  <style>
    .disFlx{
      display: flex;
    flex-direction: column;
    align-items: center;

    }

    .bookBtn
    {
      width:104%
    }

    .mainCard
    {
      margin-left: 6%;
    margin-top: 6%;
    width: 25%;
    }
    </style>
  <body>
    <nav class="navbar navbar-expand-lg navColor" style="background: linear-gradient(to right, #ffc107, #cc2e2e);">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="./checkinn.png" alt="checkinn" class="logoImg" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#">Availaible Hotels</a>

            <a class="nav-link" href="../checkInn/login.php">Login</a>
            <a class="nav-link" href="#">Sign Up</a>
          </div>
        </div>
      </div>
    </nav>

    <!-- Start of Carousel -->
    <div id="carouselExample" class="carousel slide">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./h4.avif" class="d-block w-100" alt="..." height="500px" />
        </div>
        <div class="carousel-item">
          <img src="./h1.avif" class="d-block w-100" alt="..." height="500px" />
        </div>
        <div class="carousel-item">
          <img src="./h3.avif" class="d-block w-100" alt="..." height="500px" />
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExample"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExample"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- End of Carousel -->

    <!-- <main>
      <div class="mainCard">
        <div class="card" style="width: 18rem">
          <img src="./hotel.jpeg" class="card-img-top" alt="hotelImg" />
          <div class="card-body cardFlx">
            <h5 class="card-title" style="text-align: center">Holiday Inn</h5>
            <p class="card-text">
              This is a new Product and can be added and Removed as the App
              moves in Progress.
            </p>
            <h6 style="text-align: center">Price: $200 (Per Day)</h6>

            <button type="button" class="btn btn-warning">Book Now</button>
          </div>
        </div>
        <div class="card" style="width: 18rem">
          <img src="./hotel.jpeg" class="card-img-top" alt="hotelImg" />

          <div class="card-body cardFlx">
            <h5 class="card-title" style="text-align: center">Holiday Inn</h5>
            <p class="card-text">
              This is a new Product and can be added and Removed as the App
              moves in Progress.
            </p>
            <h6 style="text-align: center">Price: $200 (Per Day)</h6>

            <button type="button" class="btn btn-warning">Book Now</button>
          </div>
        </div>
        <div class="card" style="width: 18rem">
          <img src="./hotel.jpeg" class="card-img-top" alt="hotelImg" />

          <div class="card-body cardFlx">
            <h5 class="card-title" style="text-align: center">Holiday Inn</h5>
            <p class="card-text">
              This is a new Product and can be added and Removed as the App
              moves in Progress.
            </p>
            <h6 style="text-align: center">Price: $200 (Per Day)</h6>
            <button type="button" class="btn btn-warning">Book Now</button>
          </div>
        </div>
      </div>
      <div class="mainCard">
        <div class="card" style="width: 18rem">
          <img src="./hotel.jpeg" class="card-img-top" alt="hotelImg" />
          <div class="card-body cardFlx">
            <h5 class="card-title" style="text-align: center">Holiday Inn</h5>
            <p class="card-text">
              This is a new Product and can be added and Removed as the App
              moves in Progress.
            </p>
            <h6 style="text-align: center">Price: $200 (Per Day)</h6>

            <button type="button" class="btn btn-warning">Book Now</button>
          </div>
        </div>
        <div class="card" style="width: 18rem">
          <img src="./hotel.jpeg" class="card-img-top" alt="hotelImg" />

          <div class="card-body cardFlx">
            <h5 class="card-title" style="text-align: center">Holiday Inn</h5>
            <p class="card-text">
              This is a new Product and can be added and Removed as the App
              moves in Progress.
            </p>
            <h6 style="text-align: center">Price: $200 (Per Day)</h6>

            <button type="button" class="btn btn-warning">Book Now</button>
          </div>
        </div>
        <div class="card" style="width: 18rem">
          <img src="./hotel.jpeg" class="card-img-top" alt="hotelImg" />

          <div class="card-body cardFlx">
            <h5 class="card-title" style="text-align: center">Holiday Inn</h5>
            <p class="card-text">
              This is a new Product and can be added and Removed as the App
              moves in Progress.
            </p>
            <h6 style="text-align: center">Price: $200 (Per Day)</h6>

            <button type="button" class="btn btn-warning">Book Now</button>
          </div>
        </div>
      </div> -->


      

<?php
include "dbConnect.php";

$selectQuery = "SELECT * FROM hotel";
$result = mysqli_query($conn, $selectQuery);

if (mysqli_num_rows($result) > 0) {
    echo '<div class="row">';

    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="col-md-4 mainCard">
                <div class="card mb-3 disFlx">
                    <img src="h1.avif' . $row['h_image'] . '" class="card-img-top" alt="Hotel Image">
                    <div class="card-body">
                        <h3 class="card-title" style="text-align:center">' . $row['h_name'] . '</h3>
                        <p class="card-text" style="text-align:center"><b>Ratings:</b> ' . $row['h_ratings'] . '</p>
                        <p class="card-text" style="text-align:center"><b>Price:</b> $' . $row['h_price'] . ' (Per-Day) </p>
                        <p class="card-text" style="text-align:center"><b>Location:</b> ' . $row['h_location'] . '</p>
                        <a href="booking.php" class="btn btn-warning bookBtn">Book Now</a>
                    </div>
                </div>
            </div>';
    }

    echo '</div>';
} else {
    echo "No hotels found.";
}

mysqli_close($conn);
?>




    </main>
  </body>
  <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
    integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
    crossorigin="anonymous"
  ></script>
</html>
