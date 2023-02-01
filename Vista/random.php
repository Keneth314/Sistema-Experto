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


    <div class="container">
        <div class="container-main col-8">

            <div class="progress" style="height: 2px; margin-bottom:10px; margin-top:20px;">
                <div class="progress-bar" role="progressbar" style="width: 33%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress" style="height: 25px; font-size: 15px">
                <div class="progress-bar" role="progressbar" style="width: 33%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Nitrogeno</div> <br>
            </div>
            <h1 class="title">Formulario Análisis</h1>
            <form action="controladorAnalisis.php" method="POST" class="col-10 centrar">
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

                <div class="d-grid gap-2 container-btn">
                    <input type="submit" class="btn btn-primary" name="btnConfirmar" value="Confirmar">
                </div>
            </form>

            <div class="progress" style="height: 1px; margin-bottom:10px; margin-top:20px;">
                <div class="progress-bar" role="progressbar" style="width: 66%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress" style="height: 20px;">
                <div class="progress-bar" role="progressbar" style="width: 66%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Potasio</div> <br>


            </div>
            <h1 class="title">Formulario Análisis</h1>
            <form action="controladorAnalisis.php" method="POST" class="col-10 centrar">
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

                <div class="d-grid gap-2 container-btn">
                    <input type="submit" class="btn btn-primary" name="btnConfirmar" value="Confirmar">
                </div>
            </form>

            <div class="progress" style="height: 1px; margin-bottom:10px; margin-top:20px;">
                <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress" style="height: 20px;">
                <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Magnesio</div> <br>
            </div>
            <h1 class="title">Formulario Análisis</h1>
            <form action="controladorAnalisis.php" method="POST" class="col-10 centrar">
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

                <div class="d-grid gap-2 container-btn">
                    <input type="submit" class="btn btn-primary" name="btnConfirmar" value="Confirmar">
                </div>
            </form>


        </div>
    </div>

    
</body>

</html>
<link rel="stylesheet" href="Vista/formAnalisis.css?v=<?php echo (rand()); ?>" />