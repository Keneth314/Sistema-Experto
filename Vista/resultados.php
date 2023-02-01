<?php
include_once("navbar.php");
class resultados extends navbar{

    public function resultadosShow($resultado1, $resultado2, $resultado3, $resultado4, $resultado5, $resultado6, $resultado7, $resultado8, $resultado9, $resultado10, $resultado11, $resultado12, $resultado13){

    $this->navbarShow();
?>
    <!DOCTYPE html>
    <html lang="es">


    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultados</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="../Vista/resultados.css?v=<?php echo(rand()); ?>" />
    </head>

    <body>
        <?php
        ?>

        
        <div class="container container-main ">
            <h1 class="titulo">Resultados</h1>
            <?php
                date_default_timezone_set('America/Lima');
                $fecha = date("Y-m-d");
                $aux = explode("-", $fecha);
                $fecha = $aux[2]."-".$aux[1]."-".$aux[0];
                $hora = date("H:i:s");
            ?>
            <div class="col-6 fecha_hora">
                <p>Fecha: <b><?= $fecha?></b></p>
                <p>Hora: <b><?= $hora?></b></p>
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
                            <td><?= $resultado1 ?></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Exceso de Nitrógeno muy severo</td>
                            <td><?= $resultado2 ?></td>
                        </tr>

                        <tr>
                            <th scope="row">3</th>
                            <td>Deficiencia de Fósforo LEVE</td>
                            <td><?= $resultado3 ?></td>
                        </tr>

                        <tr>
                            <th scope="row">4</th>
                            <td>Deficiencia de Fósforo SEVERO</td>
                            <td><?= $resultado4 ?></td>
                        </tr>

                        <tr>
                            <th scope="row">5</th>
                            <td>Deficiencia de Fósforo MUY SEVERO</td>
                            <td><?= $resultado5 ?></td>
                        </tr>

                        <tr>
                            <th scope="row">6</th>
                            <td>Deficiencia de Potasio SUAVE</td>
                            <td><?= $resultado6 ?></td>
                        </tr>

                        <tr>
                            <th scope="row">7</th>
                            <td>Deficiencia de Potasio LEVE</td>
                            <td><?= $resultado7 ?></td>
                        </tr>

                        <tr>
                            <th scope="row">8</th>
                            <td>Deficiencia de Potasio SEVERO</td>
                            <td><?= $resultado8 ?></td>
                        </tr>

                        <tr>
                            <th scope="row">9</th>
                            <td>Deficiencia de Potasio MUY SEVERO</td>
                            <td><?= $resultado9 ?></td>
                        </tr>

                        <tr>
                            <th scope="row">10</th>
                            <td>Deficiencia de Potasio LETAL</td>
                            <td><?= $resultado10 ?></td>
                        </tr>

                        <tr>
                            <th scope="row">11</th>
                            <td>EXCESO de Potasio</td>
                            <td><?= $resultado11 ?></td>
                        </tr>

                        <tr>
                            <th scope="row">12</th>
                            <td>Deficiencia de Magnesio SEVERA</td>
                            <td><?= $resultado12 ?></td>
                        </tr>

                        <tr>
                            <th scope="row">13</th>
                            <td>Deficiencia de Magnesio MUY SEVERA</td>
                            <td><?= $resultado13 ?></td>
                        </tr>

                    
                    </tbody>
                </table>

                <div class="d-grid gap-2 container-btn">
                <a href="controlResultados.php?r1=<?=$resultado1?>&r2=<?=$resultado2?>&r3=<?=$resultado3?>&r4=<?=$resultado4?>&r5=<?=$resultado5?>&r6=<?=$resultado6?>&r7=<?=$resultado7?>&r8=<?=$resultado8?>&r9=<?=$resultado9?>&r10=<?=$resultado10?>&r11=<?=$resultado11?>&r12=<?=$resultado12?>&r13=<?=$resultado13?>">
                    <button class="btn btn-success btnConfirmar" name="btnConfirmar" value="Registrar">Registrar resultados</button>
                </a>
                
            </div>
            </div>

            

        </div>




        

    </body>

    </html>

<?php
    }
}


?>