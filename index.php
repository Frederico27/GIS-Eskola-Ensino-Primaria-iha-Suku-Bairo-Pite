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
            <h2 class="text-center mb-5">Bemvindo mai iha Sistema GIS</h2>
            <div id="carouselBasicExample" class="carousel slide col-lg-8 offset-lg-2" data-bs-ride="carousel">

                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselBasicExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselBasicExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselBasicExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>


                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="imajen/1725723.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Informasaun Konaba Mapa</h5>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="imajen/anime.jpg" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Ajuda fo hotspot</h5>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="imajen/anime.jpg" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Loke Dalan</h5>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
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
            <h2 class="text-center py-4 mt-2">Konaba</h2>
            <div class="card mb-3" style="width: 100%; border: solid black 2px ">
                <div class="card-body text-dark">
                    <h5 class="card-title">Dark card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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