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
        <title>Artikel</title>
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
                    <li class="breadcrumb-item active">Artikel</li>
                </ol>
            </div>

            <!-- include sira -->
            <?php
            include "../koneksaun.php";
            include "modal-hatama.php";
            ?>

            <!-- Button Aumenta -->

            <div class="container">
                <a href="#aumenta3" data-toggle="modal" class="btn btn-primary ml-3">Aumenta Dadus (+)</a>
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
                                <th>ID Artigu</th>
                                <th>Naran</th>
                                <th>Email</th>
                                <th>Konteudu Komentariu</th>
                                <th>Estatuto</th>
                                <th>Asaun</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query2 = $conn->query("SELECT * FROM komentariu");
                            while ($koment = $query2->fetch_array()) { ?>
                                <tr>
                                    <td><?php echo $koment['id_artigu']; ?></td>
                                    <td><?php echo $koment['naran']; ?></td>
                                    <td><?php echo $koment["email"];?></td>
                                    <td><?php echo $koment['koment']; ?></td>
                                    <td><?php echo $koment['estatuto']; ?></td>
                                    <td><a href=#editk<?php echo $koment['id_komen']; ?> data-toggle="modal">Edit</a> &emsp;
                                        <a href="apaga_komen.php?id_komen=<?= $koment['id_komen'] ?>" onclick="return confirm_delete()">Delete</a>
                                    </td>

                                </tr>
                                <script type="text/javascript">
                                    function confirm_delete() {
                                        return confirm('Ita boot Hakarak duni atu apaga dadus refere?');
                                    }
                                </script>
                            <?php
                                include "modal-edit-komen.php";
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