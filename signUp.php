<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if (isset($_POST['submit'])) {
    $name = $_POST['fname'];
    $email = $_POST['femail'];
    $password = $_POST['fpassword'];
    
    // Write the query
    $sql = "INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$password')";
    
    // Run the query
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header('location: index.html');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=width-device, initial-scale=1.0">
    <title>Sign Up | pikpik</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="signIn-wrapper">
        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap">
                    <form action="<?=$_SERVER['PHP_SELF']?>" method="post" name="myForm" autocomplete="off" class="sign-in-form">
                        <div class="logo">
                            <a href="index.html"><img src="images/logo/black-logo.png" alt="logo"></a>
                        </div>

                        <div class="heading">
                            <h2>Get Started</h2>
                            <h6>Alredy Have An Account?</h6>
                            <a href="signIn.html" class="toggle">Sign In</a>
                        </div>

                        <div class="actual-form">
                            <div class="input-wrap">
                                <input name="fname" type="text"
                                minlength="4"
                                class="input-field"
                                autocomplete="off"
                                placeholder="Enter your Name"
                                required>
                            </div>
                            <div class="input-wrap">
                                <input name="femail" type="email"
                                class="input-field"
                                autocomplete="off"
                                placeholder="Enter your Email"
                                required>
                            </div>
                            <div class="input-wrap">
                                <input name="fpassword" type="password"
                                minlength="4"
                                class="input-field"
                                autocomplete="off"
                                placeholder="Enter your Password"
                                required>
                                <!-- <label>Password</label> -->
                            </div>
                            <input class="btn green" name="submit" type="submit" value="Submit" style="border: transparent; font-weight: 600;">
                            <p class="text">Forgot Password? 
                            <a href="#">Get Help</a> Signing In</p>
                        </div>
                    </form>

                    <form action="signIn.html" autocomplete="off" class="sign-up-form">
                        <div class="logo">
                            <img src="images/logo/black-logo.png" alt="logo">
                        </div>

                        <div class="heading">
                            <h2>Get Started</h2>
                            <h6>Alredy Have An Account?</h6>
                            <a href="#" class="toggle">Sign In</a>
                        </div>

                    </form>
                </div>

                <div class="carousel">
                    <div class="mySlides fade">
                      <img src="images/signIn_register/img1.png" class="image img-1 show" alt="">
                    </div>
                    <div class="mySlides fade">
                      <img src="images/signIn_register/img2.png" class="image img-2" alt="">
                    </div>
                    <div class="mySlides fade">
                      <img src="images/signIn_register/img3.png" class="image img-3" alt="">
                    </div>
                  </div>
            </div>
        </div>
    </div>
    <script src="main.js"></script>
</body>
</html>