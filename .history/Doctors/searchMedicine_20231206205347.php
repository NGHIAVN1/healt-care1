<?php
include "lib/connection.php";
$name = $_POST['name']??'';
$sql = "SELECT * FROM medication WHERE name LIKE '%$name%';";
$result = $conn->query($sql);
?>

