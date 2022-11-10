<?php
error_reporting(0);
include 'koneksaun.php';

function input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function input2($data2)
{
    $data2 = trim($data2);
    $data2 = stripslashes($data2);
    $data2 = htmlspecialchars($data2);
    return $data2;
}

$username = mysqli_real_escape_string($conn,input($_POST['username']));
$password = mysqli_real_escape_string($conn,input2($_POST['password']));

$query = mysqli_query($conn, "SELECT * FROM user WHERE username='$username' and password='$password'");
$cek = mysqli_num_rows($query);
do {
    if ($cek > 0) {
        session_start();
        $_SESSION['user'] = $username;
        $_SESSION['id_user'] = $dadus['id_user'];
        echo '<script>window.alert("Bemvindo Login Susessu");window.location = "Admin/dashboard.php";</script>';
    } else {
        echo '<script>window.alert("Password ho Username Sala");window.location = "login.html";</script>';
    }
} while ($dadus = $query->fetch_array());
