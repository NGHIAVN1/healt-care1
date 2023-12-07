<?php
 include 'lib/connection.php';
 if(isset($_POST['submit'])){
    $idPrescripation = $_POST['id'];
    $idMedicine = $_POST['medicine'];
    $dose = $_POST['dose'];
    $duration = $_POST['duration'];
    $unit = $_POST['dose_unit'];
    $comment = $_POST['comment'];
    $durationUnit = $_POST['duration_unit'];
    $frequency = $_POST['frequency'];

        if($dose<$doseMin){
            echo "<script>alert('Dose is too low!')</script>";
           
        }
        elseif($dose>$doseMax){
            echo "<script>alert('Dose is too high!')</script>";
           
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
                    echo "<script>window.location.href='patients_detail.php'</script>";
                }
            }   
        }
}
?>
<html>
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