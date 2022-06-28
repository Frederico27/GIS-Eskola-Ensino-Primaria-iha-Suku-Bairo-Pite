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
        <title>Detallu - Hotspot</title>
        <!-- Bootstrap core CSS-->
        <link href="asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="asset/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Page level plugin CSS-->
        <link href="asset/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
        <!-- Custom styles for this template-->
        <link href="asset/css/sb-admin.css" rel="stylesheet">
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
                    <li class="breadcrumb-item active">Detallu no Hostpot</li>
                </ol>
            </div>


            <!-- include sira -->
            <?php
            include "../koneksaun.php";
            include "modal-hatama.php";
            ?>

            <!-- Button Aumenta -->
            <div class="container">
                <a href="#aumenta2" data-toggle="modal" class="btn btn-primary ml-3">Aumenta Dadus (+)</a>
            </div>

            <?php
            if (isset($_GET['susessu'])) {

                echo "<br><div class='p-3 mb-2 bg-success text-white bg-opacity-100'>Dadus Susessu Aumenta</div>";
            }
            ?>


            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID Detallu</th>
                                <th>ID Eskola</th>
                                <th>ID Artikel</th>
                                <th>ID Populasaun</th>
                                <th>Latitude</th>
                                <th>Longitude</th>
                                <th>Lokalizasaun</th>
                                <th>Asaun</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query2 = $conn->query("SELECT * FROM detallu a, artikel b, eskola c WHERE a.id_artikel = b.id_artikel AND a.id_eskola = c.id_eskola");
                            while ($dadus2 = $query2->fetch_array()) { ?>
                                <tr>
                                    <td><?php echo $dadus2['id_detallu']; ?></td>
                                    <td><?php echo $dadus2['id_eskola']."-(".$dadus2['naran_eskola'].")"; ?></td>
                                    <td><?php echo $dadus2['id_artikel']."-(".substr_replace($dadus2['titulu'], "...", 15).")"; ?></td>
                                    <td><?php echo $dadus2['id_populasaun']."-(".$dadus2['naran_eskola'].")"; ?></td>
                                    <td><?php echo $dadus2['longitude']; ?></td>
                                    <td><?php echo $dadus2['latitude']; ?></td>
                                    <td><?php echo $dadus2['lokalizasaun']; ?></td>
                                    <td><a href=#editad<?php echo $dadus2['id_detallu'];?> data-toggle="modal">Edit</a><br>
                                        <a href="apaga_detallu.php?id_det=<?= $dadus2['id_detallu'] ?>" onclick="return confirm_delete()">Delete</a>
                                    </td>
                                </tr>

                                <script type="text/javascript">
                                    function confirm_delete() {
                                        return confirm('Ita boot Hakarak duni atu apaga dadus refere?');
                                    }
                                </script>

                            <?php
                                include "modal-edit_detallu.php";
                            } ?>
                        </tbody>
                    </table>
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