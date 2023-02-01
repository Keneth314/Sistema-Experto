<?php

// session_start();
// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";
// session_write_close();

// include_once("../shared/navbar.php");
class privilegios{
    // 
    public function privilegiosShow(){  
        $this->navbarShow();
?>

        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <title>Privilegios</title>
        </head>
        <body>

        <?php 
            if(isset($_SESSION["usuario"]) == true && isset($_SESSION["privilegios"]) == true){
                $privilegios = $_SESSION["privilegios"];
                // echo "<pre>";
                // var_dump($privilegios);
                // echo "</pre>";
                // die();
        ?>
                <div class="col-md-5 container-form">

                    <h1 class="titulo">Privilegios</h1>

            
                    <form style="text-align: center" action="../shared/formPrincipal.php" method="POST">
                            

                    <!-- <table class="table table-dark table-hover table-striped table-bordered">
                        <thead class="align-middle">
                            <tr> 
                                <th scope="col">#</th>
                                <th scope="col">Privilegio</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>

                        <tbody> -->


                    <?php
                        /* session_start();
                        echo "<pre>";
                        print_r($_SESSION);
                        echo "</pre>";
                        session_write_close(); */

                        for ($i=0; $i < count($privilegios) ; $i++) { 
                    ?>

                    <?php 
                        // En la BD tiene que escribirse así: Reservar Mesa
                        $privilegio = str_replace(' ', '', $privilegios[$i]["privilegio"]);
                    ?>

                        <!-- <tr>
                            <th scope="row"><?=($i+1)?></th>
                            <td><?= $privilegios[$i]["privilegio"]?></td>
                            
                            <td> -->
                            <input class=" mb-4 btn btn-primary btnEnviar" type="submit" name="btn<?= $privilegio?>" value="<?=$privilegios[$i]["privilegio"]?>"><br>
                            <!-- </td>
                        </tr> -->
                            
                    <?php 
                        } 
                    ?>
                        <!-- </tbody>
                    </table> -->

                            <!-- <input type="submit" name="btnValidarReserva" value="Validar reserva de mesa"><br> -->

                    </form> 

                </div>
                
                
        <?php } else{



            include_once("../shared/mensajeSistema.php");
            $objmensaje = new mensajeSistema;   
            $objmensaje->mensajeSistemaShow("No tienes los privilegios necesarios", "../index.php");  
            
        } ?>


        <link rel="stylesheet" href="../plantilla.css?v=<?php echo(rand()); ?>" />

        <script></script>
        </body>
        </html>


<?php
    }

}

if(isset($_GET["inicio"]) == true){
    $objInicio = new privilegios;
    $objInicio->privilegiosShow();
}

?> 



