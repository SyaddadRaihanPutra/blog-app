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

if (isset($_POST['action'])) {
    $title      = $_POST['title'];
    $slug       = strtolower(strtr($title, $check));
    $user_id    = $_SESSION['user_id'];
    $body       = $_POST['body'];
    $date       = date('Y-m-d');

    $image      = $_FILES['image']['name'];
    $temp       = $_FILES['image']['tmp_name'];

    $image_file = strtolower(strtr($title, $check)) . ".jpg";

    if ($_POST['action'] == 'add') {
        $query = mysqli_query($connect, "INSERT INTO posts SET title='$title', slug='$slug', user_id='$user_id', body='$body', date_publish='$date', image='$image_file'");

        copy($temp, "../../assets/img/post/" . $image_file);

        header('location: ../posts.php');
    } else if ($_POST['action'] == 'edit') {
        $id         = $_POST['id'];
        if (!empty($image)) {
            $query = mysqli_query($connect, "UPDATE posts SET title='$title', slug='$slug', user_id='$user_id', body='$body', date_publish='$date', image='$image_file' WHERE id = '$id'");
            copy($temp, "../../assets/img/post/" . $image_file);
        } else {
            $query = mysqli_query($connect, "UPDATE posts SET title='$title', slug='$slug', user_id='$user_id', body='$body', date_publish='$date' WHERE id = '$id'");
        }

        header('location: ../posts.php');
    }
} else {
    if ($_GET['action'] == 'delete') {
        $id = $_GET['id'];
        $query = mysqli_query($connect, "DELETE FROM posts WHERE id = '$id'");

        header('location: ../posts.php');
    }
}
