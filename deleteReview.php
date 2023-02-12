<?php
if(isset($_GET['delete_id'])) {
  $conn = mysqli_connect("localhost", "root", "", "reviews");

  $delete_id = mysqli_real_escape_string($conn, $_GET['delete_id']);
  $sql = "DELETE FROM reviews WHERE id = $delete_id";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    echo "Review has been deleted successfully!";
    header("Location: reviewDatabase.php");
  } else {
    echo "Error deleting review: " . mysqli_error($conn);
  }

  mysqli_close($conn);
}
?>