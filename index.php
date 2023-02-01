<?php

session_start();
// session_destroy();
// session_write_close();
// die();

if(isset($_SESSION["usuario"]) == true){
    session_write_close();
    include_once("Vista/formAnalisis.php");
    $objForm = new formAnalisis;
    $objForm->formAnalisisShow();
    // session_write_close();
    // header("Location: shared/privilegios.php?inicio=true");
}
else{
    session_write_close();
    include_once("Vista/formLogin.php");
    $objForm = new formLogin;
    $objForm->formLoginShow();
}


?>


<link rel="stylesheet" href="style.css?v=<?php echo(rand()); ?>" />
