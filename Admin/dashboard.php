<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: ../login.php");
}

?>
<DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Bemvindo</title>
        <!-- Bootstrap core CSS-->
        <link href="asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="asset/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Page level plugin CSS-->
        <link href="asset/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
        <!-- Custom styles for this template-->
        <link href="asset/css/sb-admin.css" rel="stylesheet">
        <!-- CSS MAPA -->
        <link rel="stylesheet" href="../assets/lealflet/leaflet.css" />

        <!-- Script Mapa -->
        <script src="../assets/lealflet/leaflet.js"></script>
    </head>

    <body class="fixed-nav sticky-footer bg-dark" id="page-top">
        <?php include 'side-bar.php'; ?>

        <div class="content-wrapper">
            <div class="container-fluid">
                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="dashboard.php">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Pajina Prinsipal</li>
                </ol>
                <!-- Icon Cards-->
                <!-- DATABASE BA COUNT ICON -->
                <?php
                include "../koneksaun.php";
                ?>
                <div class="row">
                    <!-- Karta Eskola -->
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-graduation-cap"></i>
                                </div>
                                <?php
                                include "../koneksaun.php";
                                $sql = "SELECT COUNT(id_eskola) as total1 FROM eskola";
                                $hasil = mysqli_query($conn, $sql);
                                while ($data = mysqli_fetch_array($hasil)) :
                                ?>

                                    <div class="mr-5">Total Eskola (<?= $data['total1']; ?>)</div>

                                <?php endwhile; ?>
                            </div>
                            <?php if ($_SESSION['user']) { ?>
                                <a class="card-footer text-white clearfix small z-1" href="lista-eskola.php">
                                    <span class="float-left">Haree Detallu</span>
                                    <span class="float-right">
                                        <i class="fa fa-angle-right"></i>
                                    </span>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                    <!-- Karta Mapa -->
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-success o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-map-marker"></i>
                                </div>
                                <?php
                                include "../koneksaun.php";
                                $sql2 = "SELECT COUNT(id_detallu) as total2 FROM detallu";
                                $hasil2 = mysqli_query($conn, $sql2);
                                while ($data2 = mysqli_fetch_array($hasil2)) :
                                ?>
                                    <div class="mr-5">Total Hotspot iha Mapa (<?= $data2['total2']; ?>)</div>
                                <?php endwhile; ?>
                            </div>
                            <?php if ($_SESSION['user']) { ?>
                                <a class="card-footer text-white clearfix small z-1" href="hotspot.php">
                                    <span class="float-left">Haree Detallu</span>
                                    <span class="float-right">
                                        <i class="fa fa-angle-right"></i>
                                    </span>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                    <!-- Karta Dadus Eskola -->
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-danger o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-newspaper-o"></i>
                                </div>

                                <?php include "../koneksaun.php";
                                $sql3 = "SELECT COUNT(id_artikel) as total3 FROM artikel";
                                $hasil3 = mysqli_query($conn, $sql3);
                                while ($data3 = mysqli_fetch_array($hasil3)) :
                                ?>
                                    <div class="mr-5">Tabela Dadus Artikel (<?= $data3['total3']; ?>)</div>
                                <?php endwhile; ?>
                            </div>
                            <?php if ($_SESSION['user']) { ?>
                                <a class="card-footer text-white clearfix small z-1" href="artikel.php">
                                    <span class="float-left">Haree Detallu</span>
                                    <span class="float-right">
                                        <i class="fa fa-angle-right"></i>
                                    </span>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                    <!-- Karta Informasaun Admin -->
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-warning o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-users"></i>
                                </div>
                                <?php include "../koneksaun.php";
                                $sql4 = "SELECT COUNT(id_user) as total4 FROM user";
                                $hasil4 = mysqli_query($conn, $sql4);
                                while ($data4 = mysqli_fetch_array($hasil4)) :
                                ?>
                                    <div class="mr-5">Total Admin (<?= $data4['total4']; ?>)</div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <style>
                    #mapa {
                        height: 500px;
                        width: 100%;
                    }
                </style>

                <!-- Mapa Leaflet -->

                <div class="container">
                    <div class="card my-5">
                        <div class="card-header">Mapa</div>

                        <div class="card-body">
                            <div class="container" id="mapa">

                                <script>
                                    var map = L.map('mapa').setView([-8.556580, 125.564343], 13);

                                    var tiles = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                                        maxZoom: 18,
                                        attribution: '<a>Developed by DEI 2022</a>',
                                        id: 'mapbox/streets-v11',
                                        tileSize: 512,
                                        zoomOffset: -1

                                    }).addTo(map);

                                    var polygon = L.polygon([
                                        [-8.554916277195758, 125.54126253075957],
                                        [-8.557379111616621, 125.54130144564904],
                                        [-8.56076548293407, 125.54149602009656],
                                        [-8.563151317362609, 125.54130144564904],
                                        [-8.56712446810838, 125.54134036053857],
                                        [-8.57066467399861, 125.54091229675407],
                                        [-8.572396284439527, 125.5391611267265],
                                        [-8.573319806782456, 125.53811042470998],
                                        [-8.574281806836625, 125.53760453114644],
                                        [-8.57852419802056, 125.53740995669892],
                                        [-8.579486184896348, 125.5416127647651],
                                        [-8.5805251279852, 125.5445702963672],
                                        [-8.581525589013772, 125.54830612575931],
                                        [-8.581063838097375, 125.5513025722509],
                                        [-8.580602086619445, 125.55632259299652],
                                        [-8.579447705468102, 125.56079780528918],
                                        [-8.577677647554376, 125.56367750711227],
                                        [-8.57498406533839, 125.5645336346813],
                                        [-8.572675265383843, 125.56468929423934],
                                        [-8.562323973246835, 125.56546759202935],
                                        [-8.56005357782834, 125.56465037934983],
                                        [-8.556436309696478, 125.56414448578631],
                                        [-8.5549355181514, 125.56406665600731],
                                        [-8.554512216902767, 125.56402774111778],
                                        [-8.554512216902767, 125.56402774111778],
                                        [-8.554916277195758, 125.54126253075957]
                                    ]).addTo(map).bindPopup('Area Suku Bairo-Pite.');

                                    <?php
                                    include "../koneksaun.php";
                                    $query = $conn->query("SELECT * FROM eskola a, populasaun b, detallu c WHERE a.id_eskola = c.id_eskola AND b.id_populasaun = c.id_populasaun");
                                    while ($dadus = $query->fetch_array()) {
                                        $lng = $dadus['longitude'];
                                        $lat = $dadus['latitude'];
                                        $naran = $dadus['naran_eskola'];
                                        $img = $dadus['imajen'];
                                        $tipu = $dadus['tipu_eskola'];
                                        $kond = $dadus['kondisaun'];
                                        $func1 = $dadus['funsionariu_estadu'];
                                        $func2 = $dadus['funsionariu_kontratadu'];
                                        $aln = $dadus['total_alunos'];
                                    ?>

                                        //leaflet marker
                                        var marker = L.marker([<?php echo $lat; ?>, <?php echo $lng; ?>]).addTo(map).
                                        bindPopup("<center><b><?php echo $naran; ?></b><hr><?php echo "<img src='asset/imajen/" . $img; ?>'width='130px'><hr></center><pre style= 'font-family: Cambria; text-align: justify;'><?php echo 'Tipu-Eskola: ' . $tipu ?><br><?php echo 'Kondisaun: ' . $kond ?><br><?php echo 'Total Funsionariu-Estadu: ' . $func1 ?><br><?php echo 'Total Funsionariu-Kontratadu: ' . $func2 ?><br><?php echo 'Total Alunos: ' . $aln ?></pre>");
                                    <?php } ?>
                                </script>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /.container-fluid-->
            <!-- /.content-wrapper-->
            <footer class="sticky-footer">
                <div class="container">
                    <div class="text-center">
                        <small>Copyright © 2022</small>
                    </div>
                </div>
            </footer>
            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fa fa-angle-up"></i>
            </a>

            <!-- Bootstrap core JavaScript-->
            <script src="asset/vendor/jquery/jquery.min.js"></script>
            <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- Core plugin JavaScript-->
            <script src="asset/vendor/jquery-easing/jquery.easing.min.js"></script>
            <!-- Page level plugin JavaScript-->
            <script src="asset/vendor/chart.js/Chart.min.js"></script>
            <script src="asset/vendor/datatables/jquery.dataTables.js"></script>
            <script src="asset/vendor/datatables/dataTables.bootstrap4.js"></script>
            <!-- Custom scripts for all pages-->
            <script src="asset/js/sb-admin.min.js"></script>
            <!-- Custom scripts for this page-->
            <script src="asset/js/sb-admin-datatables.min.js"></script>
            <script src="asset/js/sb-admin-charts.min.js"></script>

        </div>
    </body>

    </html>