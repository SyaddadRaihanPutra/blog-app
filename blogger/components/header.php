<?php
include('../config/connect.php');

if (!isset($_SESSION['user_id'])) {
    header('location: ../');
}
$user_logged = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM users WHERE id='$_SESSION[user_id]'"));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syaddad Blog</title>

    <link rel="stylesheet" href="../assets/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-white py-3">
        <div class="container">
            <a href=".." class="navbar-brand text-uppercase">blog.dev</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav gap-3 me-auto">
                    <li class="nav-item"><a href="." class="nav-link <?= $title == 'Dashboard' ? 'active' : '' ?>">Dashboard</a></li>
                    <li class="nav-item"><a href="posts.php" class="nav-link <?= $title == 'Posts' ? 'active' : '' ?>">Your Posts</a></li>
                    <li class="nav-item"><a href="create-post.php" class="nav-link <?= $title == 'Create Post' ? 'active' : '' ?>">Create Post</a></li>
                    <li class=" nav-item"><a href="profile.php" class="nav-link <?= $title == 'Profile' ? 'active' : '' ?>">Profile</a></li>
                </ul>
                <ul class="navbar-nav gap-3">
                    <li class="nav-item">
                        <p class="nav-link text-primary">Hi, <?= $user_logged['name'] ?></p>
                    </li>
                    <li class="nav-item"><a href="php/logout.php" class="nav-link active">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>