<?php
require 'db.php';
$name = $_POST['name'];
$village = $_POST['village'];
$message = $_POST['message'];

$sql= "INSERT INTO queries (name , village , message) VALUES (? ,? ,?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss" , $name,$village,$message);
if($stmt->execute()){
    echo "query submited successfully";
}else{
    echo"error: " . $stmt->error;
}
?>