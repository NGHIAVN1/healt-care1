<?php
$medicineName = $_POST['medicineName'];
$sql = "SELECT * FROM medicine WHERE name LIKE '%$medicineName%'";
$result = $conn->query($sql);
?>