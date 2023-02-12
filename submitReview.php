<?php
session_start();

// Connect to the user database
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

// Get the user's information from the database
$email = $_SESSION['femail'];
$sql = "SELECT id, email FROM user WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

$conn->close();

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get the review from the form
  $review = $_POST['review'];

  // Connect to the reviews database
  $servername1 = "localhost";
  $username1 = "root";
  $password1 = "";
  $dbname1 = "reviews";
  $conn = new mysqli($servername1, $username1, $password1, $dbname1);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Insert the review into the database
  $sql = "INSERT INTO reviews (user_id, email, review) VALUES (?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("iss", $user['id'], $user['email'], $review);

  if ($stmt->execute()) {
    echo "Review submitted successfully!";
  } else {
    echo "Error submitting review: " . $stmt->error;
  }

  $conn->close();
}
?>

<!-- <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <textarea name="review"></textarea>
  <input type="submit" value="Submit">
</form> -->


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=width-device, initial-scale=1.0">
    <title>Review | pikpik</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
<div class="signIn-wrapper">
        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap" style="width: 100%;">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="myForm" class="sign-in-form">
                        <div class="logo">
                            <a href="index.php"><img src="images/logo/black-logo.png" alt="logo"></a>
                        </div>

                        <div class="heading">
                            <h2>Write a Review</h2>
                        </div>

                        <div class="actual-form">
                           
                            <textarea class="input-field" name="review" style="height: 200px;" placeholder="Write here..."></textarea>
                            <input class="btn green" style="border: transparent; font-weight: 600; margin-top: 5%;" type="submit" value="Submit">
                            <p>
                                <a href="index.php" style="color: #CCCCCC; font-size:14px;">Return to home page</a>  
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
