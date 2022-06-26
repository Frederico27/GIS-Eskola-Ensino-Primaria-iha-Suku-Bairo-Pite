<?php

include "../koneksaun.php";
// Include the database configuration file
$statusMsg = '';


// INSERT FORM BA LISTA-ESKOLA


//Dadus foti husi POST
$id_esc     = $_POST['id'];
$naran      = $_POST['naran_eskola'];
$tipu_esc   = $_POST['tipu_eskola'];
$kond_esc   = $_POST['kondisaun_eskola'];
$func_est   = $_POST['func1'];
$func_kont  = $_POST['func2'];
$alunos     = $_POST['alunos'];
$id_popula  = $_POST['id_popula'];

// File upload path
$targetDir = "asset/imajen/";
$fileName = basename($_FILES["imajen"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

if (isset($_POST["submit"]) && !empty($_FILES["imajen"]["name"])) {
    // Allow certain file formats
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
    if (in_array($fileType, $allowTypes)) {
        // Upload file to server
        if (move_uploaded_file($_FILES["imajen"]["tmp_name"], $targetFilePath)) {
            // Insert image file name into database
            $insert = $conn->query("INSERT INTO eskola(id_eskola, naran_eskola, tipu_eskola, kondisaun, imajen) VALUES ('$id_esc', '$naran', '$tipu_esc', '$kond_esc', '" . $fileName . "')");
            $insert2 = $conn->query("INSERT INTO populasaun(id_populasaun, id_eskola, funsionariu_estadu, funsionariu_kontratadu, total_alunos) VALUES ('$id_popula','$id_esc', '$func_est', '$func_kont', '$alunos')");
            if ($insert and $insert2) {
                header("Location: lista-eskola.php?susessu");
            } else {
                $statusMsg = "File upload failed, please try again.";
            }
        } else {
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    } else {
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
} else {
    $statusMsg = 'Please select a file to upload.';
}



// INSERT FORM BA DETALLU NO HOTSPOT POIN


//Dadus foti husi POST
$pop = "SELECT a.id_populasaun FROM populasaun a, eskola b WHERE a.id_eskola = '$_POST[id_esc2]'";
$result = $conn->query($pop);
$row = $result->fetch_assoc();
$id_popula2 = $row['id_populasaun'];
$id2          = $_POST['id2'];
$id_esc2      = $_POST['id_esc2'];
$id_artc2     = $_POST['id_artc2'];
$lat          = $_POST['lat'];
$lng          = $_POST['lng'];
$lokal        = $_POST['lokal'];

if (isset($_POST["submit2"])) {
    $insert3 = $conn->query("INSERT INTO detallu(id_detallu, id_eskola, id_populasaun, id_artikel, latitude, longitude, lokalizasaun) 
    VALUES ('$id2', '$id_esc2', '$id_popula2', '$id_artc2', '$lat', '$lng', '$lokal')");
    if ($insert3) {
        header("Location: hotspot.php?susessu");
    }
}

// INSERT FORM BA ARTIKEL


//Dadus foti husi POST
$id3          = $_POST['id3'];
$titulu       = $_POST['titulu'];
$konteudu     = $_POST['konteudu'];
$stat         = $_POST['stat'];
$editor       = $_POST['editor'];

if (isset($_POST["submit3"])) {
    $insert4 = $conn->query("INSERT INTO artikel(id_artikel, titulu, konteudu, status, id_user) 
    VALUES ('$id3', '$titulu', '$konteudu', '$stat', '$editor')");
    if ($insert4) {
        header("Location: artikel.php?susessu");
    }
}
