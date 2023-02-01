<?php


// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";

include_once("navbar.php");
class formAnalisis extends navbar{

    public function formAnalisisShow($num = 1)
    {
        $this->navbarShow();
?>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Formulario</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        </head>

        <body>

        <style>
            /* .label-pregunta::before { content: '\A'; white-space: pre;} */
            .margin-btn{
                margin-top: 20px;
            }
        </style>

        <?php if($num == 1){?>
            <div class="container">
                <div class="container-main col-8">
                    <h1 class="title">Formulario de Análisis</h1>
                    <div class="progress" style="height: 2px; margin-bottom:10px; margin-top:30px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress" style="height: 25px; font-size: 15px">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Nitrógeno</div> <br>
                    </div>
                    
                    <form action="getAnalisis.php?num=2" method="POST" class="col-10 centrar" style="margin-top:30px;">
                        <!---------------------- NITROGENO ------------------------>
                        <!-- <p>Análisis del nitrógeno</p> -->
                        <label class="form-label label-pregunta">
                            1. Las hojas presentan un color amarillento o clorosis
                        </label>
                        <!-- style="margin-left: 60px;" -->
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p1" value="true" id="p1-si">
                            <label class="form-check-label" for="p1-si">Sí</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p1" value="false" id="p1-no">
                            <label class="form-check-label" for="p1-no">No</label>
                        </div>

                        <label class="form-label label-pregunta">
                            2. En los peciolos presenta un color rosado
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p2" value="true" id="p2-si">
                            <label class="form-check-label" for="p2-si">Sí</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p2" value="false" id="p2-no">
                            <label class="form-check-label" for="p2-no">No</label>
                        </div>

                        <label class="form-label label-pregunta">
                            3. Peciolos pasan de rosa a violeta
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p3" value="true" id="p3-si">
                            <label class="form-check-label" for="p3-si">Sí</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p3" value="false" id="p3-no">
                            <label class="form-check-label" for="p3-no">No</label>
                        </div>

                        <label class="form-label label-pregunta">
                            4. Retraso del crecimiento en las vainas foliares
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p4" value="true" id="p4-si">
                            <label class="form-check-label" for="p4-si">Sí</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p4" value="false" id="p4-no">
                            <label class="form-check-label" for="p4-no">No</label>
                        </div>

                        <label class="form-label label-pregunta">
                            5. Pseudotallo delgados
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p5" value="true" id="p5-si">
                            <label class="form-check-label" for="p5-si">Sí</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p5" value="false" id="p5-no">
                            <label class="form-check-label" for="p5-no">No</label>
                        </div>

                        <label class="form-label label-pregunta">
                            6. Peciolos y hojas pequeños
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p6" value="true" id="p6-si">
                            <label class="form-check-label" for="p6-si">Sí</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p6" value="false" id="p6-no">
                            <label class="form-check-label" for="p6-no">No</label>
                        </div>

                        <label class="form-label label-pregunta">
                            7. La hoja de banano cerca de la nervadura central presenta un severo quemado
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p7" value="true" id="p7-si">
                            <label class="form-check-label" for="p7-si">Sí</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p7" value="false" id="p7-no">
                            <label class="form-check-label" for="p7-no">No</label>
                        </div>

                        <div class="d-grid gap-2 container-btn margin-btn">
                            <input type="submit" class="btn btn-success" name="btnConfirmar" value="Confirmar">
                        </div>
                    </form>
                </div>
            </div>           
        <?php }?>

        <?php if($num == 2){?>
            <div class="container">
                <div class="container-main col-8">
                    <h1 class="title">Formulario Análisis</h1>
                    <div class="progress" style="height: 2px; margin-bottom:10px; margin-top:30px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress" style="height: 25px; font-size: 15px">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Fósforo</div> <br>
                    </div>
                    
                    <form action="getAnalisis.php?num=3" method="POST" class="col-10 centrar" style="margin-top:30px;">

                        <!---------------------- NITROGENO ------------------------>
                        <!-- <p>Análisis del nitrógeno</p> -->
                        <label class="form-label label-pregunta">
                            8. Clorosis en sus bordes
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p8" value="true" id="p8-si">
                            <label class="form-check-label" for="p8-si">Sí</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p8" value="false" id="p8-no">
                            <label class="form-check-label" for="p8-no">No</label>
                        </div>

                        <label class="form-label label-pregunta">
                            9. Manchas marrones y purpuras
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p9" value="true" id="p9-si">
                            <label class="form-check-label" for="p9-si">Sí</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p9" value="false" id="p9-no">
                            <label class="form-check-label" for="p9-no">No</label>
                        </div>

                        <label class="form-label label-pregunta">
                            10. Las hojas se rizan
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p10" value="true" id="p10-si">
                            <label class="form-check-label" for="p10-si">Sí</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p10" value="false" id="p10-no">
                            <label class="form-check-label" for="p10-no">No</label>
                        </div>

                        <label class="form-label label-pregunta">
                            11. Los peciolos se quiebran
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p11" value="true" id="p11-si">
                            <label class="form-check-label" for="p11-si">Sí</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p11" value="false" id="p11-no">
                            <label class="form-check-label" for="p11-no">No</label>
                        </div>

                        <label class="form-label label-pregunta">
                            12. De color verde profundo se tornan las hojas jóvenes
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p12" value="true" id="p12-si">
                            <label class="form-check-label" for="p12-si">Sí</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p12" value="false" id="p12-no">
                            <label class="form-check-label" for="p12-no">No</label>
                        </div>

                        <label class="form-label label-pregunta">
                            13. Las hojas se hace tipo roseta
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p13" value="true" id="p13-si">
                            <label class="form-check-label" for="p13-si">Sí</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p13" value="false" id="p13-no">
                            <label class="form-check-label" for="p13-no">No</label>
                        </div>

                        <label class="form-label label-pregunta">
                            14. Las hojas viejas se vuelven irregularmente necróticas
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p14" value="true" id="p14-si">
                            <label class="form-check-label" for="p14-si">Sí</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p14" value="false" id="p14-no">
                            <label class="form-check-label" for="p14-no">No</label>
                        </div>

                        <label class="form-label label-pregunta">
                            15. La producción de hojas se reduce
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p15" value="true" id="p15-si">
                            <label class="form-check-label" for="p15-si">Sí</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p15" value="false" id="p15-no">
                            <label class="form-check-label" for="p15-no">No</label>
                        </div>

                        <label class="form-label label-pregunta">
                            16. Aparece una clorosis marginal
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p16" value="true" id="p16-si">
                            <label class="form-check-label" for="p16-si">Sí</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p16" value="false" id="p16-no">
                            <label class="form-check-label" for="p16-no">No</label>
                        </div>

                        <label class="form-label label-pregunta">
                            17. Muerte prematura
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p17" value="true" id="p17-si">
                            <label class="form-check-label" for="p17-si">Sí</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p17" value="false" id="p17-no">
                            <label class="form-check-label" for="p17-no">No</label>
                        </div>


                        <div class="d-grid gap-2 container-btn margin-btn">
                            <input type="submit" class="btn btn-success" name="btnConfirmar" value="Confirmar">
                        </div>
                    </form>
                </div>
            </div>           
        <?php }?>

        <?php if($num == 3){?>
            <div class="container">
                <div class="container-main col-8">
                    <h1 class="title">Formulario Análisis</h1>
                    <div class="progress" style="height: 2px; margin-bottom:10px; margin-top:30px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress" style="height: 25px; font-size: 15px">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Potasio</div> <br>
                    </div>
                    
                    <form action="getAnalisis.php?num=4" method="POST" class="col-10 centrar" style="margin-top:30px;">
                        <!---------------------- POTASIO ------------------------>
                        <p>Análisis del potasio</p>
                        <label class="form-label label-pregunta">
                            18. Se torna amarilla la punta de las hojas más viejas
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p18" value="true" id="p18-si">
                            <label class="form-check-label" for="p18-si">Sí</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p18" value="false" id="p18-no">
                            <label class="form-check-label" for="p18-no">No</label>
                        </div>

                        19. Se rasga y curva hacia abajo las hojas
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p19" value="true" id="p19-si">
                            <label class="form-check-label" for="p19-si">Sí</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p19" value="false" id="p19-no">
                            <label class="form-check-label" for="p19-no">No</label>
                        </div>

                        20. Las hojas presentan una apariencia con arrugas
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p20" value="true" id="p20-si">
                            <label class="form-check-label" for="p20-si">Sí</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p20" value="false" id="p20-no">
                            <label class="form-check-label" for="p20-no">No</label>
                        </div>

                        21. En los bordes de la hoja se necrosa
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p21" value="true" id="p21-si">
                            <label class="form-check-label" for="p21-si">Sí</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p21" value="false" id="p21-no">
                            <label class="form-check-label" for="p21-no">No</label>
                        </div>

                        22. Las franjas necróticas llegan hasta la nervadura central de la hoja
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p22" value="true" id="p22-si">
                            <label class="form-check-label" for="p22-si">Sí</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p22" value="false" id="p22-no">
                            <label class="form-check-label" for="p22-no">No</label>
                        </div>

                        23. Las hojas se desecan y a continuación se curva
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p23" value="true" id="p23-si">
                            <label class="form-check-label" for="p23-si">Sí</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p23" value="false" id="p23-no">
                            <label class="form-check-label" for="p23-no">No</label>
                        </div>

                        24. La mayor porción de la hoja se necrosa y dobla
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p24" value="true" id="p24-si">
                            <label class="form-check-label" for="p24-si">Sí</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p24" value="false" id="p24-no">
                            <label class="form-check-label" for="p24-no">No</label>
                        </div>

                        25. Las hojas se curvan hacia el interior y luego mueren
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p25" value="true" id="p25-si">
                            <label class="form-check-label" for="p25-si">Sí</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p25" value="false" id="p25-no">
                            <label class="form-check-label" for="p25-no">No</label>
                        </div>

                        26. En la base de los peciolos surgen manchas de color marrón
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p26" value="true" id="p26-si">
                            <label class="form-check-label" for="p26-si">Sí</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p26" value="false" id="p26-no">
                            <label class="form-check-label" for="p26-no">No</label>
                        </div>

                        27. El centro del cormo muestra áreas con estructuras celulares desintegradas, color marrón
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p27" value="true" id="p27-si">
                            <label class="form-check-label" for="p27-si">Sí</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p27" value="false" id="p27-no">
                            <label class="form-check-label" for="p27-no">No</label>
                        </div>

                        28. Los racimos de frutas en plantas son cortos, delgados y deformados

                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p28" value="true" id="p28-si">
                            <label class="form-check-label" for="p28-si">Sí</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p28" value="false" id="p28-no">
                            <label class="form-check-label" for="p28-no">No</label>
                        </div>

                        29. Progresión lenta, aspecto macizo y entrenudos acortados

                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p29" value="true" id="p29-si">
                            <label class="form-check-label" for="p29-si">Sí</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p29" value="false" id="p29-no">
                            <label class="form-check-label" for="p29-no">No</label>
                        </div>

                        30. La hoja se torna amarilla en forma precoz y son más pequeñas
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p30" value="true" id="p30-si">
                            <label class="form-check-label" for="p30-si">Sí</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p30" value="false" id="p30-no">
                            <label class="form-check-label" for="p30-no">No</label>
                        </div>

                        31. Hoja de color “azulado”
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p31" value="true" id="p31-si">
                            <label class="form-check-label" for="p31-si">Sí</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p31" value="false" id="p31-no">
                            <label class="form-check-label" for="p31-no">No</label>
                        </div>


                        <div class="d-grid gap-2 container-btn margin-btn">
                            <input type="submit" class="btn btn-success" name="btnConfirmar" value="Confirmar">
                        </div>
                    </form>
                </div>
            </div>           
        <?php }?>

        <?php if($num == 4){?>
            <div class="container">
                <div class="container-main col-8">
                    <h1 class="title">Formulario Análisis</h1>
                    <div class="progress" style="height: 2px; margin-bottom:10px; margin-top:30px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress" style="height: 25px; font-size: 15px">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Magnesio</div> <br>
                    </div>
                    
                    <form action="getAnalisis.php?num=5" method="POST" class="col-10 centrar" style="margin-top:30px;">

                        <!---------------------- MAGNESIO ------------------------>
                        <!-- <p>Análisis del magnesio</p> -->
                        32. En la zona del centro de la hoja presenta clorosis
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p32" value="true" id="p32-si">
                            <label class="form-check-label" for="p32-si">Sí</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p32" value="false" id="p32-no">
                            <label class="form-check-label" for="p32-no">No</label>
                        </div>

                        33. Se mantienen verdes los bordes del centro de la nervadura
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p33" value="true" id="p33-si">
                            <label class="form-check-label" for="p33-si">Sí</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p33" value="false" id="p33-no">
                            <label class="form-check-label" for="p33-no">No</label>
                        </div>

                        34. Manchas púrpuras en los peciolos
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p34" value="true" id="p34-si">
                            <label class="form-check-label" for="p34-si">Sí</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p34" value="false" id="p34-no">
                            <label class="form-check-label" for="p34-no">No</label>
                        </div>

                        35. Desunión del pseudotallo en las vainas foliares

                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p35" value="true" id="p35-si">
                            <label class="form-check-label" for="p35-si">Sí</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p35" value="false" id="p35-no">
                            <label class="form-check-label" for="p35-no">No</label>
                        </div>



                        <div class="d-grid gap-2 container-btn margin-btn">
                            <input type="submit" class="btn btn-success" name="btnConfirmar" value="Confirmar">
                        </div>
                    </form>
                </div>
            </div>       
        <?php }?>
    
    












        </body>

        </html>
        <link rel="stylesheet" href="../Vista/formAnalisis.css?v=<?php echo (rand()); ?>" />

<?php
    }
}



?>