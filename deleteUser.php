<?php
if(isset($_GET['delete_id'])) {
  $conn = mysqli_connect("localhost", "root", "", "user");

  $delete_id = mysqli_real_escape_string($conn, $_GET['delete_id']);
  $sql = "DELETE FROM user WHERE id = $delete_id";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    echo "User has been deleted successfully!";
    header("Location: usersDatabase.php");
  } else {
    echo "Error deleting user: " . mysqli_error($conn);
  }

  mysqli_close($conn);
}
?>