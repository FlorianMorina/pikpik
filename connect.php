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
    echo "Order is complete...."; 
    header

    $stmt->close();
    $conn->close();
}

?>