<?php

if ($_GET['module'] == 'mapa') {
    include 'inner_pages/mapa.php';
} else if ($_GET['module'] == 'artigu') {
    include 'inner_pages/artigu.php';
} else if ($_GET['module'] == 'login') {
    include 'inner_pages/login.php';
} else if ($_GET['module'] == 'asaun') {
    include 'inner_pages/asaun-login.php';
} else if ($_GET['module'] == 'main-artigu') {
    include 'inner_pages/main-artigu.php';
} else if ($_GET['module'] == 'komen') {
    include 'inner_pages/komen.php';
} else {
    echo "Page Not Found";
}
