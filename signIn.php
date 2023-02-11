<?php
session_start();

if (isset($_POST['femail']) && isset($_POST['fpassword'])){
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

$email = mysqli_real_escape_string($conn, $_POST['femail']);
$password = mysqli_real_escape_string($conn, $_POST['fpassword']);

    // Write the query
    $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    
    // Run the query and store the result
    $result = $conn->query($sql);
    
    // If there's a match, sign in the user
    if ($result->num_rows > 0) {
        session_start();
        $_SESSION['femail'] = $email;
        header("Location: index.php");
        exit();
    } else {
        // If there's no match, show an error message
        echo "Incorrect email or password. If you are not a user please Sign Up";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=width-device, initial-scale=1.0">
    <title>Sign In | pikpik</title>
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
                    <form action="<?=$_SERVER['PHP_SELF']?>" name="myForm" method="post" autocomplete="off" class="sign-in-form">
                    <div class="logo">
                            <a href="#"><img src="images/logo/black-logo.png" alt="logo"></a>
                        </div>

                        <div class="heading">
                            <h2>Welcome Back</h2>
                            <h6>Not Registred?</h6>
                            <a href="signUp.php" class="toggle">Sign Up</a>
                        </div>

                        <div class="actual-form">
                            <div class="input-wrap">
                                <input name="femail" type="text"
                                minlength="4"
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
                            </div>
                            <input class="btn green" type="submit" value="Submit" style="border: transparent; font-weight: 600;">
                            <br> <br>
                            <div class="heading">
                                <h6>Are you Admin?</h6>
                                <a href="signinAdmin.php" class="toggle">Sign In</a>
                            </div>
                            
                        </div>
                    </form>

                    <form action="signIn.php" autocomplete="off" class="sign-up-form">
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