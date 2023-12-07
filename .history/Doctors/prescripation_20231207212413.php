<?php


include "lib/connection.php";
if(isset($_POST['submit'])){
    $patientId = $_POST['patient_id'];
    $doctorId = $_POST['doctor_id'];
    $date = $_POST['date'];

    $sql = "INSERT INTO prescription (patient_id, doctor_id, date) VALUES ('$patientId', '$doctorId', '$date')";

    if($conn->query($sql)){
        echo "<script>alert('Prescription added successfully!')</script>";
        echo "<script>window.location.href='patients_detail.php'</script>";
    }
    else{
        echo "<script>alert('Prescription added failed!')</script>";
        echo "<script>window.location.href='patients_detail.php'</script>";
    }
    
}
include 'liveSearch.php';
?>

<html>
<body>
    <form method="POST" action="">
        <label for="patient_id">Patient ID:</label>
        <input type="text" name="patient_id" id="patient_id" required><br><br>
        
        <label for="doctor_id">Doctor ID:</label>
        <input type="text" name="doctor_id" id="doctor_id" required><br><br>
        
        <label for="date">Date:</label>
        <input type="date" name="date" id="date" required><br><br>
        
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
