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
</head>

<?php include("header.php");
?>

<body>

    <?php

    include("content.php");

    ?>

</body>

</html>
<!-- Bootstrap core JS-->
<script src="https://kit.fontawesome.com/7db1126404.js" crossorigin="anonymous"></script>

<?php
if ($_GET['module'] == 'artigu' && 'main-artigu') {
} else {
    include("footer.php");
}
?>