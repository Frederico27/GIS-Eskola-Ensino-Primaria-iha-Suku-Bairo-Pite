<?php

if ($_GET['module'] == 'home') {
    $title = "Pajina Prinsipal";
} else if  ($_GET['module'] == 'mapa') {
    $title = "Mapamentu";
}else if  ($_GET['module'] == "artigu" OR "main-artigu") {
    $title = "Artigu";
}else if  ($_GET['module'] == 'login') {
    $title = "login";
}