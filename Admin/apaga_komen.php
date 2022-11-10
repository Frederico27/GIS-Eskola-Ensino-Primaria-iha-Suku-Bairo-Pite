<?php
include '../koneksaun.php';
// rai variable
$id_komen   = $_GET['id_komen'];
// query SQL untuk apaga data
$query = "DELETE from komentariu where id_komen ='$id_komen'";
mysqli_query($conn, $query);
// fila ba index artikel.php
header("location:komentariu.php");
?>