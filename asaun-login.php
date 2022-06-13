<?php
include 'koneksaun.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($conn, "SELECT * FROM user WHERE username='$username' and password='$password'");
$cek = mysqli_num_rows($query);
while ($dadus = $query->fetch_array()) {
if ($cek > 0) {
    session_start();
    $_SESSION['user'] = $username;
    $_SESSION['id_user'] = $dadus['id_user'];
    echo '<script>window.alert("Bemvindo Login Susessu");window.location = "Admin/dashboard.php";</script>';
} else {
    echo '<script>window.alert("Password ho Username Sala");window.location = "login.php";</script>';
}

}
