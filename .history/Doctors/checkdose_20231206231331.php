<?if($dose<$doseMin){
    echo "<script>alert('Dose is too low!')</script>";
    echo "<script>window.location.href='patients_detail.php'</script>";
}
elseif($dose>$doseMax){
    echo "<script>alert('Dose is too high!')</script>";
    echo "<script>window.location.href='patients_detail.php'</script>";
}
elseif($dose>=$doseMin && $dose<=$doseMax){
    $summit = "INSERT INTO prescription_detail (prescription_id, medication_id, dose, duration, unit, comment, duration_unit, frequency) VALUES ('$idPrescripation', '$idMedicine', '$dose', '$duration', '$unit', '$comment', '$durationUnit', '$frequency')";
    if(mysqli_query($conn, $summit)){
        echo "<script>alert('Prescription added successfully!')</script>";
        echo "<script>window.location.href='patients_detail.php'</script>";
    }
}
else{
    if($frequency>3){
        echo "<script>alert('Frequency is too high!')</script>";
        echo "<script>window.location.href='patients_detail.php'</script>";
    }
    else{
        $summit = "INSERT INTO prescription_detail (prescription_id, medication_id, dose, duration, unit, comment, duration_unit, frequency) VALUES ('$idPrescripation', '$idMedicine', '$dose', '$duration', '$unit', '$comment', '$durationUnit', '$frequency')";
        if(mysqli_query($conn, $summit)){
            echo "<script>alert('Prescription added successfully!')</script>";
            echo "<script>window.location.href='patients_detail.php'</script>";
        }
    }
}
?>   