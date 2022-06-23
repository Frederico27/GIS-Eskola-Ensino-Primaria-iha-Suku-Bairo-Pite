<?php
include '../koneksaun.php';
// rai variable
$id_esc   = $_GET['id_esc'];
// query SQL untuk apaga data
$img = "SELECT imajen FROM eskola WHERE id_eskola = '$id_esc'";
$result = $conn->query($img);
$row = $result->fetch_assoc();
if (file_exists("asset/imajen/$row[imajen]")) {
    $apaga = $conn->query("DELETE from eskola where id_eskola ='$id_esc'");
    unlink("asset/imajen/$row[imajen]");
}

// fila ba index artikel.php
header("location:lista-eskola.php");
