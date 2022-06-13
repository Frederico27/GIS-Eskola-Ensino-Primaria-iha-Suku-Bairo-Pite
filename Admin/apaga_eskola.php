<?php
include '../koneksaun.php';
// rai variable
$id_esc   = $_GET['id_esc'];
// query SQL untuk apaga data
$query = "DELETE from eskola where id_eskola ='$id_esc'";
mysqli_query($conn, $query);
// fila ba index artikel.php
header("location:lista-eskola.php");
?>