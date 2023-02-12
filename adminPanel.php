<?php
session_start();

if (!isset($_SESSION['femail'])) {
  // If the admin is not logged in, redirect to the signin page
  header("Location: signinAdmin.php");
  exit;

  // Check if the username starts with "ramazan" or "florian"
if (substr($_SESSION['femail'], 0, 7) != "ramazan" && substr($_SESSION['femail'], 0, 7) != "florian") {
    // If the username does not start with "ramazan" or "florian", show an error message
    echo "You are not authorized to access this page";
    exit;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=width-device, initial-scale=1.0">
        <title>Home | pikpik</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
    <div class="signIn-wrapper" style="background-color: #1982C4;">
        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap">
                    <form>
                        <div class="logo">
                            <a href="#"><img src="images/logo/black-logo.png" alt="logo"></a>
                        </div>

                        <div class="heading">
                            <h2>Welcome in Admin Panel</h2>
                            <h6>Do you want to go back to Sign In?</h6>
                            <a href="logout.php" class="toggle">Log Out</a>
                        </div>

                        <div class="actual-form">
                            <div class="input-wrap">
                                <button class="btn blue" style="border: transparent; font-weight: 600;" type="button" onclick="location.href='usersDatabase.php'">Go To Users List</button>
                            </div>
                            <div class="input-wrap">
                                <button class="btn blue" style="border: transparent; font-weight: 600;" type="button" onclick="location.href='ordersDatabase.php'">Go To Orders List</button>
                            </div>
                            <!-- <div class="heading">
                                <h6>Are you User?</h6>
                                <a href="signIn.php" class="toggle">Sign In</a>
                            </div> -->
                        </div>
                    </form>
                </div>

                <div class="carousel">
                    <div class="mySlides fade" style="background-color: #1982C4;">
                      <img src="images/signIn_register/imgAdmin.png" class="image img-1 show" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="main.js"></script>
    </body>
</html>