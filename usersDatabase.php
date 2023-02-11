<?php
// Connect to the database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "user";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Query to retrieve all users from the database
$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if (mysqli_num_rows($result) > 0) {
  // If the query was successful, loop through the results and display them
  echo "<table border='1'>";
  echo "<tr>";
  echo "<th>ID</th>";
  echo "<th>Name</th>";
  echo "<th>Email</th>";
  echo "<th>Password</th>";
  echo "</tr>";
  
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["name"] . "</td>";
    echo "<td>" . $row["email"] . "</td>";
    echo "<td>" . $row["password"] . "</td>";
    echo "<td><a href='deleteUser.php?delete_id=" . $row['id'] . "'>Delete</a></td>";
    echo "</tr>";
  }
  
  echo "</table>";
} else {
  // If the query was not successful, show an error message
  echo "No users found in the database";
}

// Close the database connection
mysqli_close($conn);
?>