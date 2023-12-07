<?php
 include 'lib/connection.php';
 if(isset($_POST['submit_pre'])){ 
    $patientid = $_POST['patientid'];
    $dose = $_POST['dose'];
    $duration = $_POST['duration'];
    $unit = $_POST['dose_unit'];
    $comment = $_POST['comment'];
    $durationUnit = $_POST['duration_unit'];
    $frequency = $_POST['frequency'];
    $prescription="SELECT * FROM prescription_detail WHERE prescription_id = '$idPrescripation' AND medication_id = '$idMedicine'";
    if ($prescription->num_rows > 0) {
        
        while($prescription_start = $prescription->fetch_assoc()) {
          $patientid = $prescription_start["prescription_id"];
          $sql = "SELECT * FROM medication WHERE id = '$medicineid'";
          $result = $conn->query($sql);
  
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc() ){
                    $doseMin = $row["dosemin"];
                    $doseMax = $row["dosemax"];
                    $doseUnit = $row["doseunit"];
                if($medicine['medication_id']===$row('id')){
                    if($dose<$doseMin){
                        echo "Dose is too low";
                    }
                    elseif($dose>$doseMax){
                        echo "Dose is too high!";
                    }
                    elseif($dose>=$doseMin && $dose<=$doseMax){
                        $summit = "INSERT INTO prescription_detail (prescription_id, medication_id, dose, duration, unit, comment, duration_unit, frequency) VALUES ('$idPrescripation', '$idMedicine', '$dose', '$duration', '$unit', '$comment', '$durationUnit', '$frequency')";
                        if(mysqli_query($conn, $summit)){
                            echo "<script>alert('Prescription added successfully!')</script>";
                        }
                    }
                    else{
                        if($frequency>3){
                            echo "<script>alert('Frequency is too high!')</script>";
                        }
                        else{
                            $summit = "INSERT INTO prescription_detail (prescription_id, medication_id, dose, duration, unit, comment, duration_unit, frequency) VALUES ('$idPrescripation', '$idMedicine', '$dose', '$duration', '$unit', '$comment', '$durationUnit', '$frequency')";
                            if(mysqli_query($conn, $summit)){
                                echo "<script>alert('Prescription added successfully!')</script>";
                            }
                        }
                    
                }
                }
            }
            
        }
    }    
}
 }
?>
<html>
<head>
    <title>Prescription Detail</title>
    
</head>
<script>
    src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"
</script>
<form action="patients_detail.php" method="post">
    <label for="id">Prescription ID:</label><br>
    <input type="text" id="id" name="id"><br>
    <label for="medicine">Medicine ID:</label><br>
    <input type="text" id="medicine" name="medicine"><br>
    <label for="dose">Dose:</label><br>
    <input type="text" id="dose" name="dose"><br>
    <label for="duration">Duration:</label><br>
    <input type="text" id="duration" name="duration"><br>
    <label for="dose_unit">Dose Unit:</label><br>
    <input type="text" id="dose_unit" name="dose_unit"><br>
    <label for="comment">Comment:</label><br>
    <input type="text" id="comment" name="comment"><br>
    <label for="duration_unit">Duration Unit:</label><br>
    <input type="text" id="duration_unit" name="duration_unit"><br>
    <label for="frequency">Frequency:</label><br>
    <input type="text" id="frequency" name="frequency"><br>
    <input type="submit" value="Submit">
</form>
</html>