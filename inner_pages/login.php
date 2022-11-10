<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="boostrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Script Mapa Leaflet nian --->
    <script src="boostrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/7db1126404.js" crossorigin="anonymous"></script>
</head>
<section class="vh-80 bg-login h-100" style="background-color: white;">
    <div class="container py-5 mt-3">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card text-white" style=" background-color:#134643; border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <form action="asaun-login.html" method="post">
                            <div class="mb-md-0 mt-md-0 pb-5">
                                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                <p class="text-white-50 mb-5">Halo Favor Prenxe Username ho Password!</p>

                                <div class="form-outline form-white mb-4">
                                    <input type="username" name="username" class="form-control form-control-lg" />
                                    <label class="form-label">Username</label>
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <input type="password" name="password" class="form-control form-control-lg" />
                                    <label class="form-label">Password</label>
                                </div>

                                <button class="btn btn-outline-light btn-lg px-5" type="submit" value="Login">Login</button>

                            </div>


                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</html>