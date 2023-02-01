<?php

class navbar{

    public function navbarShow($link = "../shared/privilegios.php?inicio=1"){

        session_start();
        $usuario = $_SESSION["usuario"];
        // echo "<pre>";
        // print_r($privilegios);
        // echo $privilegios[0]["privilegio"];
        // echo "</pre>";
        session_write_close();
?>

    <!doctype html>
    <html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body>

        <style>
            div a img.logo-img{
                width: 35px;  
                height: 35px;
            }
        </style>

        
        
        <header class="navbar-dark bg-success p-3 mb-1 border-bottom background-header" style="border: none !important">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    
                    <!-- Logo-->
                    <a class="navbar-brand" href="<?=$link?>">
                        Inicio
                    </a>

                    <div class="d-flex align-items-center">
                        <form class="me-3">
                            <label style="color:white"><?=$usuario?></label>
                        </form>
                        <div class="flex-shrink-0 dropdown me-3">
                            <a href="" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
                                <!-- <img src="img/user.png" alt="mdo" width="32" height="32" class="rounded-circle"> -->
                                <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                            </a>
                            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                                <!-- <li><a class="dropdown-item" href="#">New project...</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li> -->
                                <li><a class="dropdown-item" href="Vista/listaResultados.php">Ver Resultados</a></li>
                                <!-- <li><hr class="dropdown-divider"></li> -->
                                <li><a class="dropdown-item" href="Controlador/sesion.php">Cerrar Sesion</a></li>
                            </ul>
                        </div>
                        
                    </div>


                </div>
            </div>
        </header>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        
    </body>
    </html>

    <?php
    }
}

?>