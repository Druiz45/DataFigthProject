<?php

// require_once __DIR__ . "./../../views/layout.php";

session_start();

require_once __DIR__ . "./../../vendor/autoload.php";

// require_once __DIR__ . "./../../views/layout.php";

// if(isset($_SESSION['idUser'])){
//     require_once __DIR__ . "/../views/layout.php";
// }
// else{
//     header("Location: ./");
// }

use App\usuario\LoginUsuario;

$login = new LoginUsuario(null, null);

$login->validarLogin();