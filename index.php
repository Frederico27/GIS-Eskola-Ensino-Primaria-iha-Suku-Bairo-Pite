<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Sistema GIS</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="boostrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <?php
    include 'header.php';
    ?>

    <!-- Page content-->
    <div class="container-fluid carousel-contain py-5">
        <div class="container">
            <div id="carouselBasicExample" class="carousel slide col-lg-6 offset-lg-0" data-bs-ride="carousel" style="width: 100%;">

                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselBasicExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselBasicExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselBasicExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>


                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="imajen/mapa.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Informasaun Konaba Mapa</h5>
                            <p>Ajuda fo sai lokalizasaun husi eskola sira liu husi grafiku mapa.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="imajen/school.jpg"alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Fornese Informasaun sira konaba Eskola</h5>
                            <p>Ajuda fasilita informasaun konaba eskola ne'ebe relata ba populasaun no kondisaun.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="imajen/aluno.jpg" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Artigu konaba Eskola</h5>
                            <p>Fornese artigu konaba eskola ne'ebe relata ba istoria no aktividade husi eskola refere.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselBasicExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden"> Previous </span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carouselBasicExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden"> Next </span>
                </button>
            </div>
            <h2 class="text-center py-4 mt-2">Konaba Sistema</h2>
            <div class="container">
            <div class="card mb-3" style="width: 100%; border: solid black 2px ">
                    <div class="card-body text-dark" style="text-align: justify ;" class="caption">
                        <h5 class="card-title">Introdusaun</h5>
                        <p class="card-text"><b>Sistema GIS (Geografical Information System) konaba eskola sira iha Suku Bairo-Pite </b> ida ne'e nu'udar aplikasaun
                            ne'ebe ami estudante <b>DEI (Departamentu Informatika UNTL)</b> kria nu'udar webiste ida ba iha ami nia traballu final ba projetu traballu Base Dados nian
                            Iha website ne'e ami kria hodi fornese informasaun ba lokalizasaun eskola ne'ebe eziste iha suku Biro-Pite no mos dadus Populasaun ne'ebe kompostuhusi
                            mestre no alunos sira, nune'e mos ami aserta mos ho kondisaun eskola nian ne'ebe akumula iha grafiku chart nian husi dadus ne'ebe ita input.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include 'footer.php';
    ?>

    <!-- Bootstrap core JS-->
    <script src="boostrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/7db1126404.js" crossorigin="anonymous"></script>
</body>

</html>