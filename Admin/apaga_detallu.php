<?php
include '../koneksaun.php';
// rai variable
$id_det   = $_GET['id_det'];
// query SQL untuk apaga data
$query = "DELETE from detallu where id_detallu ='$id_det'";
mysqli_query($conn, $query);
// fila ba index artikel.php
header("location:hotspot.php");
?>