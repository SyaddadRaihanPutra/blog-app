<?php include('config/connect.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syaddad Blog</title>

    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-white py-3">
        <div class="container">
            <a href="." class="navbar-brand text-uppercase">syaddad.dev</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav gap-3 mx-auto">
                    <li class="nav-item"><a href="." class="nav-link active">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Services</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">About Us</a></li>
                </ul>
                <ul class="navbar-nav gap-3">
                    <?php
                    if (isset($_SESSION['user_id'])) {
                        $query = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM users WHERE id = '$_SESSION[user_id]'"));
                        $name = $query['name'];
                        echo "<li class='nav-item'><p class='m-0 nav-link active'>Hi, $name</p></li>";
                        echo "<li class='nav-item'><a href='blogger/' class='m-0 nav-link'>Dashboard</a></li>";
                    } else {
                    ?>
                        <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
                        <li class="nav-item"><a href="register.php" class="btn btn-primary rounded-pill fw-medium px-4 py-2">Register</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>