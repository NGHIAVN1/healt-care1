<?php
session_start();
if (isset($_SESSION['auth'])) {
    if ($_SESSION['auth'] == 1) {
        header("location:index.php");
    }
}
include "lib/connection.php";
if (isset($_POST['submit'])) {
    $phone = $_POST['phone_number'];
    $pass = md5($_POST['password']);

    $loginquery = "SELECT * FROM patients WHERE phone='$phone' AND password='$pass'";
    $loginres = $conn->query($loginquery);

    echo $loginres->num_rows;

    if ($loginres->num_rows > 0) {

        while ($result = $loginres->fetch_assoc()) {
            $username = $result['name'];
            $userid = $result['id'];
        }

        $_SESSION['username'] = $username;
        $_SESSION['id'] = $userid;
        $_SESSION['auth'] = 1;
        header("location:index.php");
    } else {
        echo "invalid";
    }
}
?>


<!DOCTYPE html>
<html data-bs-theme="light" lang="en">
  <head><meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>health care</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/styles.min.css?h=d45ecc3232b7eb6ca50bcf9960990024">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
  </head>

  <body><!-- Start: login full page bs4 -->
    <div class="container-fluid main-panel">
      <div class="row">
        <div class="col"><!-- Start: Login Form Basic -->
          <section class="position-relative py-4 py-xl-5">
            <div class="container"><div class="row mb-5">
              <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2>Log in</h2>
                <p class="w-lg-50">Curae hendrerit donec commodo hendrerit egestas tempus, turpis facilisis nostra nunc. Vestibulum dui eget ultrices.</p>
              </div>
            </div>
            <div class="row d-flex justify-content-center">
              <div class="col-md-6 col-xl-4">
                <div class="card mb-5"><div class="card-body d-flex flex-column align-items-center"><div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"></path>
</svg></div><form class="text-center" method="post"><div class="mb-3"><input class="form-control" type="email" name="phone_number" placeholder="Phone"></div><div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password"></div><div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Login</button></div><p class="text-muted">Forgot your password?</p></form></div></div></div></div></div></section><!-- End: Login Form Basic --></div></div></div><!-- End: login full page bs4 --><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/jquery.tablesorter.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-filter.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script><script src="/assets/js/script.min.js?h=13b77c4c24e2b1bed1889bb37d61cd95"></script></body></html>