<?php
$name = $_POST['name'];
$items = $_POST['items'];
$date = $_POST['date'];
$phone = $_POST['phone'];
$location = $_POST['location'];

$conn = new mysqli('localhost','root','','order');

if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into orders(name, items, date, phone, location)
    values(?, ?, ?, ?, ?)");
    $stmt->bind_param("sssis", $name, $items, $date, $phone, $location);
    $stmt->execute();
    
   

    $stmt->close();
    $conn->close();
    
  
}

?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=width-device, initial-scale=1.0">
        <title>Order Completed | pikpik</title>
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
                    <form action="connect.php" method="post" name="myForm" class="sign-in-form">
                        <div class="logo">
                            <a href="index.php"><img src="images/logo/black-logo.png" alt="logo"></a>
                        </div>

                        <div class="heading" style="margin-top: 10%;">
                            <h2>Thank you!
                            </h2>

                        </div>

                        <div class="actual-form">
                           
                                <!-- <input class="input-field" type="text" name="name" placeholder="Enter your name..." required> <br><br>
                                <input class="input-field" type="text" name="items" placeholder="Choose the items..." required> <br><br>
                                <input class="input-field" type="text" name="date" placeholder="Enter the delivery date..." required> <br><br>
                                <input class="input-field" type="text" name="phone" placeholder="Enter you phone number..." required> <br><br>
                                <input class="input-field" type="text" name="location" placeholder="Enter your location..." required> <br><br>
                               -->
                        
                                <!-- <input class="btn green" style="border: transparent; font-weight: 600;" type="submit" name="orderBtn" value="Complete Order"> <br><br> -->
                                <img src="images/scooter with delivery bag.png" alt="main-image" style="height:250px;">
                                <a href="index.php" class="btn green" style="margin-top:10px;">Go back to main page!</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>