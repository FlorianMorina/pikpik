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
        <title>Admin Panel | pikpik</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="styles.css">
    </head>
<body>
    <p>Hello Admin</p>
</body>
</html>