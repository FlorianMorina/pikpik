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
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Thank you</title>
    </head>
    <body>
    <li>
        <p>Order completed</p>
        <a href="index.php">Bact to main page</a>
    </li> 
    </body>
    </html>