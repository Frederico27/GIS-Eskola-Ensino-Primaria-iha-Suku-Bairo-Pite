<?php
include("header.php");
include("dynamic_title.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $title ?></title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="boostrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <?php

    include("inner_pages/home.php");

    ?>

</body>

</html>
<!-- Bootstrap core JS-->
<script src="boostrap/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/7db1126404.js" crossorigin="anonymous"></script>

<?php include("footer.php"); ?>