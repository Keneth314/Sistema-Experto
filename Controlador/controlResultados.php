<?php
    // echo "<pre>";
    // print_r($_GET);
    // print_r($_POST);
    // session_start();
    // print_r($_SESSION);
    // die();
    // echo "</pre>";

    // die();

    include_once("../Modelo/entidadResultado.php");
    $objtUsuario = new entidadResultado;
    $objtUsuario->insertarDatos();

    header("Location: ../index.php");


?>