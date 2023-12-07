<?php
include 'lib/connection.php';
 
if(isset($_REQUEST["term"])){
    // Prepare a select statement
    $sql = "SELECT * FROM medication WHERE name LIKE ?";
    
    if($stmt = mysqli_prepare($conn, $sql)){    
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_term);
        
        // Set parameters
        $param_term = $_REQUEST["term"] . '%';
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            
            // Check number of rows in the result set
            if(mysqli_num_rows($result) > 0){
                // Fetch result rows as an associative array
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    $nameMedicine = $row["name"];
                    $idMedicine = $row["id"];
                    $doseMin = $row["dosemin"];
                    $doseMax = $row["dosemax"];
                    $doseUnit = $row["doseunit"];
                    echo  "<p>" . $nameMedicine." " . $doseMax . $doseUnit."</p>";
                }
                $_SESSION['nameMedicine'] = $nameMedicine;
                $_SESSION['idMedicine'] = $idMedicine;
                $_SESSION['doseMin'] = $doseMin;
                $_SESSION['doseMax'] = $doseMax;
                $_SESSION['doseUnit'] = $doseUnit;
                header("location: prescription_detail.php");
            } else{
                echo "<p>No matches found</p>";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
}
 
// close connection
mysqli_close($conn);
?>