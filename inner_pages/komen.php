<?php

include 'koneksaun.php';

$id_artigu = addslashes($_POST['id_artigu']);
$naran     = addslashes($_POST['naran']); 
$email     = addslashes($_POST['email']);
$komentar  = addslashes($_POST['komentar']);
$stat  = 'La Publika';

if(isset($_POST["submit"])) {
    $insert = $conn->query("INSERT INTO komentariu(id_artigu, naran, email, koment, estatuto) 
        VALUES ('$id_artigu','$naran', '$email', '$komentar','$stat')");
    if ($insert) {
        header("Location: main-artigu-$id_artigu&komentariu=susessu.html");
    } else
        header("Location: main-artigu-$id_artigu&komentariu=falla.html");
}

?>