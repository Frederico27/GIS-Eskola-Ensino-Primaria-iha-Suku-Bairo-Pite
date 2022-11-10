<head>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="boostrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

</head>

<style>
    .jumbotron {
        padding: 2rem 1rem;
        margin-bottom: 2rem;
        background-color: #e9ecef;
        border-radius: .3rem;
    }
</style>

<body>
    <div class="jumbotron text-center">
        <div class="container">
            <h1 class="display-4"><br>Portal Informasaun</h1>
            <p class="lead">Artigu ba Informasaun sira konaba Eskola</p>
        </div>
    </div>




    <div class="container">

        <div class="row">
            <style>
                .caption h3 {
                    -webkit-line-clamp: 3;
                    overflow: hidden;
                    display: -webkit-inline-box;
                    -webkit-box-orient: vertical;
                    text-decoration: none;
                }
            </style>
            <?php include "koneksaun.php";
            $sql = "SELECT (a.id_artikel) as id_artc, titulu, konteudu, naran, imajen FROM artikel a, user b, eskola c, detallu d WHERE a.id_artikel = d.id_artikel AND a.id_user = b.id_user AND c.id_eskola = d.id_eskola AND status = 'Publika'";
            $result = mysqli_query($conn, $sql);
            $total = mysqli_num_rows($result);
            if ($total > 0) {
                while ($data = mysqli_fetch_array($result)) :
            ?>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <a href="main-artigu.php?id=<?php echo $data['id_artc']; ?>"><img src="Admin/asset/imajen/<?php echo $data['imajen']; ?>" width="100%" height="100%" alt="Cinque Terre"></a>
                            <div class="caption">
                                <h3><?php echo $data['titulu']; ?></h3>
                                <p style="text-align: justify;">
                                    <?php
                                    $foti = $data["konteudu"];
                                    $naruk = strip_tags(html_entity_decode($foti, ENT_QUOTES, "ISO-8859-1"));
                                    echo substr_replace($naruk, "...", 100); ?>
                                </p>
                                <p><a href="main-artigu-<?php echo $data['id_artc']; ?>.html" class="btn btn-success btn-block" role="button">Kontinua le'e</a></p>
                            </div>
                        </div>
                    </div>

            <?php
                endwhile;
            } else {
                echo "<div class='alert alert-warning'> Laiha artikel iha kategoria ne'e.</div>";
            };
            ?>
        </div>
    </div>

    <div class="jumbotron text-center" style="margin-bottom:0;">
        <p>Copyright 2022</p>
    </div>
</body>

<!-- Script --->
<script src="boostrap/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/7db1126404.js" crossorigin="anonymous"></script>
<script src="Admin/asset/vendor/jquery/jquery.min.js"></script>


</html>
