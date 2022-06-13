<?php
include '../koneksaun.php';
// rai variable
$id_artigu   = $_GET['idartc'];
// query SQL untuk apaga data
$query = "DELETE from artikel where id_artikel ='$id_artigu'";
mysqli_query($conn, $query);
// fila ba index artikel.php
header("location:artikel.php");
?>