

<!DOCTYPE html>
<html>
  <head>
            <meta charset="UTF-8">
        <meta name="viewport" content="width=width-device, initial-scale=1.0">
        <title>Home | pikpik</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="styles.css">
    <style>
      table {
        border-collapse: collapse;
        width: 100%;
      }
      
      th, td {
        text-align: left;
        padding: 8px;
      }
      
      th {
        background-color: #1982C4;
        color: white;
      }
      
      tr:nth-child(even) {
        background-color: #f2f2f2;
      }
    </style>
  </head>
  <body>
    

    <div class="signIn-wrapper" style="background-color: #1982C4;">
        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap">
                    <form action="<?=$_SERVER['PHP_SELF']?>" name="myForm" method="post" autocomplete="off" class="sign-in-form">
                        <div class="logo">
                            <a href="#"><img src="images/logo/black-logo.png" alt="logo"></a>
                        </div>

                        <div class="heading">
                            <h2>Scroll down for the List of Orders</h2>
                            <h6>Do you want to go back to </h6>
                            <a href="logout.php" class="toggle">Log Out?</a>
                        </div>

                        <div class="actual-form">
                            <div class="input-wrap">
                                <a href="adminPanel.php" class="btn blue">Go Back To Admin Panel</a>
                             </div>
                            <div class="input-wrap">
                            <a href="usersDatabase.php" class="btn blue">Go To Users List</a>
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
                      <img src="images/signIn_register/orderList.png" class="image img-1 show" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="main.js"></script>
    <section class="menu-section" id="menu-section">
        <div class="wrapper">
            <h6 style="color:#1982C4;">Orders Database</h6>
            <h2>Manage and Delete the Orders</h2>
        </div>
      <div style="margin-left:10%; margin-right:10%;">
    <?php
      // Connect to the database and retrieve orders
      $host = "localhost";
      $username = "root";
      $password = "";
      $dbname = "order";

      $conn = mysqli_connect($host, $username, $password, $dbname);

      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

      $sql = "SELECT * FROM orders";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
        // Display the orders in a table
        echo "<table>";
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
        echo "No orders found in the database";
      }

      mysqli_close($conn);
    ?>
      </div>

        <div class="wrapper">
            <h6 style="color:#1982C4;">For any issue contact Dev Team</h6>
        </div>
    </section>
  </body>
</html>
