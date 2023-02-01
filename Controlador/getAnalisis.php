<?php

if(isset($_POST["btnConfirmar"]) == true ){
    $num = $_GET["num"];

    if($num == 2){ // fomr 1
        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";

        session_start();
        // session_destroy();
        $_SESSION["preguntas"] = array();
        array_push($_SESSION["preguntas"], $_POST);
        // echo "random";
        //     echo "<pre>";
        // var_dump($_SESSION["preguntas"]);
        // echo "</pre>";
        session_write_close();

        include_once("../Vista/formAnalisis.php");
        $objmensaje = new formAnalisis;
        $objmensaje->formAnalisisShow($num);
    }
    if($num == 3){ // fomr 2
        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";

        session_start();
        // session_destroy();
        array_push($_SESSION["preguntas"], $_POST);
        // echo "random";
        //     echo "<pre>";
        // var_dump($_SESSION["preguntas"]);
        // echo "</pre>";
        session_write_close();

        include_once("../Vista/formAnalisis.php");
        $objmensaje = new formAnalisis;
        $objmensaje->formAnalisisShow($num);
    }
    if($num == 4){ // fomr 3
        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";

        session_start();
        // session_destroy();
        array_push($_SESSION["preguntas"], $_POST);
        // echo "random";
        //     echo "<pre>";
        // var_dump($_SESSION["preguntas"]);
        // echo "</pre>";
        session_write_close();

        include_once("../Vista/formAnalisis.php");
        $objmensaje = new formAnalisis;
        $objmensaje->formAnalisisShow($num);
    }
    if($num == 5){ // fomr 4
        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";

        session_start();
        // session_destroy();
        array_push($_SESSION["preguntas"], $_POST);
        // echo "random";
        // echo "<pre>";
        // var_dump($_SESSION["preguntas"]);
        // echo "</pre>";
        session_write_close();

        include_once("controladorAnalisis.php");
        
    }




    

}
else{
    include_once("../Vista/mensajeSistema.php");
    $objmensaje = new mensajeSistema;
    $objmensaje->mensajeSistemaShow("Error, acceso no permitido", "../index.php");
}
?>