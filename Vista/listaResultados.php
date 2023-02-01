<?php
include_once("../Modelo/entidadResultado.php");
$obj = new entidadResultado;
$resultados = $obj->obtenerResultados();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>

<body>
    <?php
        include_once("navbar.php");
        $random = new navbar;
        $random->navbarShow("../index.php");
    ?>
    <h1 class="titulo" style="margin-top: 50px;">Resultados</h1>
    <?php
    for ($i = 0; $i < count($resultados); $i++) {
    ?>


        <div class="container container-main ">
            <?php
                $aux = explode("-", $resultados[$i]["fecha"]);
                $fecha = $aux[2]."-".$aux[1]."-".$aux[0];
            ?>
             <div class="col-6 fecha_hora">
                <p>Fecha: <b><?= $fecha?></b></p>
                <p>Hora: <b><?= $resultados[$i]["hora"]?></b></p>
            </div>
            <div class="col-6 container-form">
                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Análisis</th>
                            <th scope="col">Resultado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Deficiencia de Nitrógeno severo</td>
                            <td><?= $resultados[$i]["r1"] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Exceso de Nitrógeno muy severo</td>
                            <td><?= $resultados[$i]["r2"] ?></td>
                        </tr>

                        <tr>
                            <th scope="row">3</th>
                            <td>Deficiencia de Fósforo LEVE</td>
                            <td><?= $resultados[$i]["r3"] ?></td>
                        </tr>

                        <tr>
                            <th scope="row">4</th>
                            <td>Deficiencia de Fósforo SEVERO</td>
                            <td><?= $resultados[$i]["r4"] ?></td>
                        </tr>

                        <tr>
                            <th scope="row">5</th>
                            <td>Deficiencia de Fósforo MUY SEVERO</td>
                            <td><?= $resultados[$i]["r5"] ?></td>
                        </tr>

                        <tr>
                            <th scope="row">6</th>
                            <td>Deficiencia de Potasio SUAVE</td>
                            <td><?= $resultados[$i]["r6"] ?></td>
                        </tr>

                        <tr>
                            <th scope="row">7</th>
                            <td>Deficiencia de Potasio LEVE</td>
                            <td><?= $resultados[$i]["r7"] ?></td>
                        </tr>

                        <tr>
                            <th scope="row">8</th>
                            <td>Deficiencia de Potasio SEVERO</td>
                            <td><?= $resultados[$i]["r8"] ?></td>
                        </tr>

                        <tr>
                            <th scope="row">9</th>
                            <td>Deficiencia de Potasio MUY SEVERO</td>
                            <td><?= $resultados[$i]["r9"] ?></td>
                        </tr>

                        <tr>
                            <th scope="row">10</th>
                            <td>Deficiencia de Potasio LETAL</td>
                            <td><?= $resultados[$i]["r10"] ?></td>
                        </tr>

                        <tr>
                            <th scope="row">11</th>
                            <td>EXCESO de Potasio</td>
                            <td><?= $resultados[$i]["r11"] ?></td>
                        </tr>

                        <tr>
                            <th scope="row">12</th>
                            <td>Deficiencia de Magnesio SEVERA</td>
                            <td><?= $resultados[$i]["r12"] ?></td>
                        </tr>

                        <tr>
                            <th scope="row">13</th>
                            <td>Deficiencia de Magnesio MUY SEVERA</td>
                            <td><?= $resultados[$i]["r13"] ?></td>
                        </tr>


                    </tbody>
                </table>
            </div>




        </div>

    <?php
    }
    ?>


        <link rel="stylesheet" href="resultados.css?v=<?php echo (rand()); ?>" />

</body>

</html>