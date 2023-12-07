<?php
    session_start();

include "lib/connection.php";
    if (isset($_POST['submit'])) 
    {
        $phone = $_POST['phone_number'];
        $pass = ($_POST['password']);
        echo $email;
        echo $pass;

        $loginquery="SELECT * FROM doctors WHERE phone='$phone' AND password='$pass'";
        $loginres = $conn->query($loginquery);

        echo $loginres->num_rows;

        if ($loginres->num_rows > 0) 
        {

            while ($result=$loginres->fetch_assoc()) 
            {
                $username=$result['name'];
            }

            $_SESSION['username']=$username;
            $_SESSION['auth']=1;
            header("location:home.php");
        }
        else
        {
            echo "invalid";
        }
    }



?>
<!-- FILEPATH: /c:/xampp/htdocs/healt-care1/Doctors/login.php -->
<!-- BEGIN: abpxx6d04wxr -->
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .container {
      width: 300px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .container h2 {
      text-align: center;
    }
    .container input[type="text"],
    .container input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .container input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .container input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Login</h2>
    <form method="POST" action="login.php">
      <input type="text" name="phone_number" placeholder="Phone Number" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="submit" name="submit" value="Login">
    </form>
  </div>
</body>
</html>
<!-- END: abpxx6d04wxr -->
