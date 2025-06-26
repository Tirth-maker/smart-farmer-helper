<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'farmer_helper';

$conn = new mysqli($host , $user , $pass , $db);
if ($conn->connect_error){
    die("connect failed: " . $conn->connect_error);
}
?>