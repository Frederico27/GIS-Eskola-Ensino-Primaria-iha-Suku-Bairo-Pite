<?php
error_reporting(0);
include "../koneksaun.php";

if ($_GET['simu1']) {

    $id_eskola  = $_GET['simu1'];
    $naran      = ucwords($_POST['naran_eskola']);
    $tipo       = $_POST['tipo'];
    $kondisaun  = $_POST['kondisaun'];
    $popula     = $_POST['id_popula'];
    $func1      = $_POST['func1'];
    $func2      = $_POST['func2'];
    $alunu      = $_POST['alunos'];

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
                $edit = $conn->query("UPDATE eskola SET naran_eskola = '$naran', tipu_eskola = '$tipo', kondisaun = '$kondisaun', imajen = '" . $fileName . "' WHERE id_eskola = '$id_eskola'");
                $edit2 = $conn->query("UPDATE populasaun SET funsionariu_estadu = '$func1', funsionariu_kontratadu = '$func2', total_alunos = '$alunu' WHERE id_populasaun = '$popula'");
                if ($edit and $edit2) {
                    echo '            <script>
                    window.alert("Sussesu edita dadus");
                    window.location = "lista-eskola.php";
                </script>';
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
}


if ($_GET['simu2']) {

    $id_artc    = $_GET['simu2'];
    $titulu     = ucwords($_POST['titulu']);
    $kont       = $_POST['konteudu'];
    $stat       = $_POST['stat'];
    $usr        = $_POST['user'];
    $edit3 = $conn->query("UPDATE artikel SET titulu = '$titulu', konteudu = '$kont', status = '$stat' WHERE id_artikel = '$id_artc'");
    echo '            <script>
    window.alert("Sussesu edita dadus");
    window.location = "artikel.php";
</script>';
}

if ($_GET['simu3']) {

    $id_det     = $_GET['simu3'];
    $esc        = $_POST['esc'];
    $popul      = $_POST['popul'];
    $artc       = $_POST['artc'];
    $lat        = $_POST['lat'];
    $lng        = $_POST['lng'];
    $lok        = $_POST['lokal'];
    $edit4 = $conn->query("UPDATE detallu SET id_eskola = '$esc', id_populasaun = '$popul', id_artikel = '$artc', latitude = '$lat', longitude = '$lng', lokalizasaun = '$lok'  WHERE id_detallu = '$id_det'");
    if ($edit4) {
        echo '            <script>
    window.alert("Sussesu edita dadus");
    window.location = "hotspot.php";
</script>';
    } else {
        echo '            <script>
        window.alert("Edita Dadus Falla");
        window.location = "hotspot.php";
    </script>';
    }
}
