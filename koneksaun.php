<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'info_escola';

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    trigger_error('Database Falla Konekta: '.$conn->connect_error, E_USER_ERROR);
}

?>