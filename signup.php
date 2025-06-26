<?php
require 'db.php';
$name = $_POST('name');
$emai = $_POST('email');
$password = password_hash($_POST['password'],PASSWORD_DEFAULT);

$sql = "INSERT INTO user (name, eamil, password) VALUES (? , ? , ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss",$name,$email,$password);
if ($stmt->execute()){
    echo"Register succesfull";
}else{
    echo"error: ".$stmt->error;
}
?>