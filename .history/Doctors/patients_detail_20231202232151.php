<?php

 include'header.php';
 include'lib/connection.php';

 $sql = "SELECT * FROM patients";
 $result = $conn -> query ($sql);

 if(isset($_POST['update_update_btn'])){
  $name = $_POST['update_name'];
  $age = $_POST['update_age'];
  $address = $_POST['update_address'];
  $phone = $_POST['update_phone'];
  $update_id = $_POST['update_id'];
  $update_quantity_query = mysqli_query($conn, "UPDATE `patients` SET age = '$age' , name='$name' , address='$address' ,phone='$phone'  WHERE id = '$update_id'");
  if($update_quantity_query){
     header('location:all_product.php');
  };
};

 if(isset($_GET['remove'])){
  $remove_id = $_GET['remove'];
  mysqli_query($conn, "DELETE FROM `patients` WHERE id = '$remove_id'");
  header('location:all_product.php');
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/pending_orders.css">

</head>
<body>
<div class="container mt-3">
    <div class="card p-3 text-center">
        <div class="d-flex flex-row justify-content-center mb-3">
            <div class="image"> <img src="https://i.imgur.com/hczKIze.jpg" class="rounded-circle"> <span><i class='bx bxs-camera-plus'></i></span> </div>
            <div class="d-flex flex-column ms-3 user-details">
                <h4 class="mb-0">Zenda Grace</h4>
                <div class="ratings"> <span>4.0</span> <i class='bx bx-star ms-1'></i> </div> <span>Pro Member</span>
            </div>
        </div>
        <h4>Edit Profile</h4>
        <div class="row">
        <?php
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              ?>
            <div class="col-md-6">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="inputs"> <label>Name</label> <input class="form-control" type="text" placeholder="Name" name="update_name"> </div>
                <div class="inputs"> <label>Name</label> <input name="update_name" class="form-control" type="text" placeholder="Name"> </div>
            </div>
            <div class="col-md-6">
                <div class="inputs"> <label>Phone</label> <input type="text" name="update_phone"  value="<?php echo $row['phone']; ?>" > </div>
            </div>
            <div class="col-md-6">
                <div class="inputs"> <label>City</label> <input type="text" name="update_age"  value="<?php echo $row['age']; ?>" ></div>" >
            <div class="col-md-6">
                <div class="inputs"> <label>Country</label> <input type="text" name="update_address"  value="<?php echo $row['address']; ?>" ></div>
            </div>
            <?php 
    }
        } 
        else 
            echo "0 results";
        ?>

        <div class="row">
            <div class="col-md-12">
                <div class="about-inputs"> <label>About</label> <textarea class="form-control" type="text" placeholder="Tell us about yourself"> </textarea> </div>
            </div>
        </div>
        <div class="mt-3 gap-2 d-flex justify-content-end"> <button class="px-3 btn btn-sm btn-outline-primary">Cancel</button> <button class="px-3 btn btn-sm btn-primary">Save</button> </div>
    </div>
</div>
</body>
</html>