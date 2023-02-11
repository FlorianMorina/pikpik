<?php
if(isset($_GET['delete_id'])) {
  $conn = mysqli_connect("localhost", "root", "", "order");

  $delete_id = mysqli_real_escape_string($conn, $_GET['delete_id']);
  $sql = "DELETE FROM orders WHERE id = $delete_id";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    echo "Order has been deleted successfully!";
    header("Location: ordersDatabase.php");
  } else {
    echo "Error deleting user: " . mysqli_error($conn);
  }

  mysqli_close($conn);
}
?>