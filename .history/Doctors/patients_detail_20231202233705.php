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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>
<div class="container mt-3">
    <div class="card p-3 ">
        <h4>Edit Profile</h4>
        <div class="row">
        <?php
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              ?>
              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="col-md-8">
                <div class="inputs"> <label>Name</label> <input type="text" name="update_name"  value="<?php echo $row['name']; ?>" > </div>
            </div>
            <div class="col-md-6">
                <div class="inputs"> <label>Phone</label> <input type="text" name="update_phone"  value="<?php echo $row['phone']; ?>" > </div>
            </div>
            <div class="col-md-6">
                <div class="inputs"> <label>Age</label> <input type="text" name="update_age"  value="<?php echo $row['age']; ?>" ></div>" >
            <div class="col-md-12">
                <div class="inputs"> <label>Address</label> <input type="text" name="update_address"  value="<?php echo $row['address']; ?>" ></div>
            </div>
            </form>
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