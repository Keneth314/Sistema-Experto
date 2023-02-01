<?php

    session_start();
    $_SESSION["usuario"] = NULL;
    $_SESSION["preguntas"] = NULL;
    session_destroy();
    session_write_close();
    header("Location: ../index.php")
?>