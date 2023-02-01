<?php
if(isset($_REQUEST["btnAnalisis"]) == true){

    // Llamamos al "controlRegistrarUsuario"
    include_once("../Vista/formAnalisis.php");

    // Crear un objeto de la clase "controlRegistrarUsuario"
    $objAnalisis = new formAnalisis;
    // Usar el método de la clase "controlRegistrarUsuario"
    $objAnalisis->formAnalisisShow();

} 
?>