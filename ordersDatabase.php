<?php
// Connect to the database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "order";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Query to retrieve all users from the database
$sql = "SELECT * FROM orders";
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if (mysqli_num_rows($result) > 0) {
  // If the query was successful, loop through the results and display them
  echo "<table border='1'>";
  echo "<tr>";
  echo "<th>ID</th>";
  echo "<th>Name</th>";
  echo "<th>Items</th>";
  echo "<th>Date</th>";
  echo "<th>Phone</th>";
  echo "<th>Location</th>";
  echo "</tr>";
  
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["name"] . "</td>";
    echo "<td>" . $row["items"] . "</td>";
    echo "<td>" . $row["date"] . "</td>";
    echo "<td>" . $row["phone"] . "</td>";
    echo "<td>" . $row["location"] . "</td>";
    echo "<td><a href='deleteOrder.php?delete_id=" . $row['id'] . "'>Delete</a></td>";
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
