<?php
include('../../config/connect.php');

if (!isset($_SESSION['user_id'])) {
    header('location: ../../login.php');
}

$check = array(
    " " => "-",
    ":" => "",
    "," => "",
    "." => "",
    "-" => "",
    "/" => "",
    "`" => "",
    "'" => "",
    '"' => ""
);

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$description = $_POST['description'];

$photo      = $_FILES['photo']['name'];
$temp       = $_FILES['photo']['tmp_name'];

$photo_file = strtolower(strtr($name, $check)) . ".jpg";

if (!empty($photo)) {
    if ($password != '') {
        $query = mysqli_query($connect, "UPDATE users SET name='$name', email='$email', password='$password', description='$description', photo='$photo_file' WHERE id = '$_SESSION[user_id]'");
    } else {
        $query = mysqli_query($connect, "UPDATE users SET name='$name', email='$email', description='$description', photo='$photo_file' WHERE id = '$_SESSION[user_id]'");
    }
    copy($temp, "../../assets/img/user/" . $photo_file);
} else {
    if ($password != '') {
        $query = mysqli_query($connect, "UPDATE users SET name='$name', email='$email', password='$password', description='$description' WHERE id = '$_SESSION[user_id]'");
    } else {
        $query = mysqli_query($connect, "UPDATE users SET name='$name', email='$email', description='$description' WHERE id = '$_SESSION[user_id]'");
    }
}

header('location: ../profile.php');
