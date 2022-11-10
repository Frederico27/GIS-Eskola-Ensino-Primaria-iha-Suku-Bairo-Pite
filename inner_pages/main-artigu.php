<!DOCTYPE html>
<html lang="en">

<?php
include "koneksaun.php";
function input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function input2($data2)
{
    $data2 = trim($data2);
    $data2 = stripslashes($data2);
    $data2 = htmlspecialchars($data2);
    return $data2;
}
$id = addslashes(input($_GET['id']));
$query = mysqli_query($conn, "SELECT (a.id_artikel) as id_artikel ,titulu, konteudu, naran, imajen FROM artikel a, eskola b, user c, detallu d WHERE a.id_artikel = d.id_artikel AND b.id_eskola = d.id_eskola AND c.id_user = a.id_user AND a.id_artikel = '$id'");
$data = mysqli_fetch_assoc($query);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="boostrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <title><?= $data['titulu']; ?></title>
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
        <div class="container"><br>
            <h1 class="display-4"><?= $data['titulu']; ?></h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="thumbnail">
                    <nav class="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo $data["titulu"]; ?></li>
                        </ol>
                    </nav>
                    <img src="Admin/asset/imajen/<?php echo $data['imajen']; ?>" width="100%" alt="Cinque Terre">
                    <b>
                        <br><br>
                        <p>Editor: <?= $data['naran']; ?></p>
                        <hr>
                    </b>
                    <div style="text-align: justify; margin-top: -4%;" class="caption">
                        <?php
                        echo nl2br("<br>" . strip_tags(html_entity_decode($data["konteudu"], ENT_QUOTES, "ISO-8859-1"), "<br><p><b><i><u><em><strong><ul><li><h1><h2><h3><h4><h5><h6><ol><a>"));
                        ?>
                        <hr>
                    </div>

                    <?php
                    if (isset($_GET['komentariu'])) {
                        //Mengecek nilai variabel add yang telah di enskripsi dengan method md5()
                        if ($_GET['komentariu'] == 'susessu') {
                            echo "<div class='alert alert-success'>Komentariu susessu manda, hein admin nia konfirmasaun</div>";
                        } else {
                            echo "<div class='alert alert-danger'>Komentariu Falla</div>";
                        }
                    }
                    ?>
                </div>

                <div class="row">
                <?php
                    include 'koneksaun.php';
                    $query = $conn->query("SELECT naran, koment FROM komentariu WHERE id_artigu ='$id' AND estatuto = 'Publika'");
                    while ($komentar = $query->fetch_array()) {
                ?>
                <div class="col-sm-12">
                    <div class="caption">
                        <h5><?php echo $komentar['naran'];?></h5>
                        <div class="row">
                            <div class="col-sm-1">
                                <img src="imajen/user.png" width="100%" alt="Cinque Terre">
                            </div>
                            <div class="col-sm-11">
                                <?php echo $komentar['koment']; ?>
                            </div> 
                        </div>
                        <br><br>
                    </div>
                </div>
                <?php }?>
            </div>

                <div class="comment">
                    <form method="post" action="komen.html">
                        <label>
                            <h2>Rai hela komentariu</h2>
                        </label>
                        <div class="form-group">
                            <input type="hidden" name="id_artigu" value="<?php echo $data['id_artikel']; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Naran:</label>
                            <input type="text" name="naran" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" name="email" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label>Komentariu:</label>
                            <textarea class="form-control" name="komentar" rows="5"></textarea>
                        </div>
                        <div class="form-group mb-3">
                        <button type="submit" class="btn btn-primary" name="submit">Manda Mensajen</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- SIDE-BAR NOTISIA NIAN -->

            <div class="col-sm-4">
                <br>
                <h5>Artigu Sira Seluk:</h5>
                <div class="row">
                    <?php
                    include "koneksaun.php";
                    $sql = "SELECT (a.id_artikel) as id_artc, titulu, konteudu, status, naran, imajen FROM artikel a, user b, eskola c, detallu d WHERE a.id_artikel = d.id_artikel AND a.id_user = b.id_user AND c.id_eskola = d.id_eskola AND a.id_artikel != '$id' ORDER BY d.id_artikel DESC LIMIT 5";
                    $result = mysqli_query($conn, $sql);
                    while ($data2 = mysqli_fetch_array($result)) :
                    ?>
                        <div class="col-sm-12">
                            <div class="caption">
                                <br>
                                <h5><a class="text-dark" href="main-artigu-<?php echo $data2['id_artc']; ?>.html"><?php echo $data2['titulu']; ?></a></h5>
                                <div class="row">
                                    <div class="col-xl-3">
                                        <img src="Admin/asset/imajen/<?php echo $data2['imajen']; ?>" width="100%" alt="Cinque Terre">
                                    </div>
                                    <div class="col-sm-9">
                                        <?php
                                        $ambil = $data2["konteudu"];
                                        $panjang = strip_tags(html_entity_decode($ambil, ENT_QUOTES, "ISO-8859-1"));

                                        echo substr_replace($panjang, "...", 150);
                                        ?>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                    <?php endwhile; ?>

                </div>
            </div>


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