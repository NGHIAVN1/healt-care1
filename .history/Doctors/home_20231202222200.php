
<?php
include 'header.php';
include "lib/connection.php";
$sql = "SELECT * FROM patients";
$result = $conn->query($sql);
?>
<?php 
include "patients.php";
?>