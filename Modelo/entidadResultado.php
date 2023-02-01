<?php

include_once("../Modelo/conexion.php");
class entidadResultado extends conexion{

    public function insertarDatos(){

        $r1 = $_GET["r1"];
        $r2 = $_GET["r2"];
        $r3 = $_GET["r3"];
        $r4 = $_GET["r4"];
        $r5 = $_GET["r5"];
        $r6 = $_GET["r6"];
        $r7 = $_GET["r7"];
        $r8 = $_GET["r8"];
        $r9 = $_GET["r9"];
        $r10 = $_GET["r10"];
        $r11 = $_GET["r11"];
        $r12 = $_GET["r12"];
        $r13 = $_GET["r13"];

        // Obtengo el idUsuario
        //Obtengo el nombre
        session_start();
        $nombre = $_SESSION["usuario"];
        session_write_close();

        $con = $this->conectar();
    
        $sql = "SELECT idUsuario
        FROM usuarios WHERE usuario = '$nombre'";

        $query = mysqli_query($con, $sql);
        $usuario = array(); // Crea la variable $filas y se le asigna un array vacío
        $usuario = mysqli_fetch_array($query, MYSQLI_ASSOC);
        $this->desconectar();

        // echo "<pre>";
        // var_dump($usuario);
        // echo "</pre>";
        // die();
        $idUsuario = $usuario["idUsuario"];
        date_default_timezone_set('America/Lima');
        $fecha = date("Y-m-d");
        $hora = date("H:i:s");
        // var_dump($fecha);
        // var_dump($hora);

    

        
        $con = $this->conectar();

        // ---- Registrar usuario
        $sql="INSERT INTO resultados (r1, r2, r3, r4, r5, r6, r7, r8, r9, r10, r11, r12, r13, idUsuario, fecha, hora)
        VALUES('$r1', '$r2', '$r3', '$r4', '$r5', '$r6', '$r7', '$r8', '$r9', '$r10', '$r11', '$r12', '$r13', '$idUsuario', '$fecha', '$hora')";
        
        $query= mysqli_query($con,$sql);
        $con = $this->desconectar();
    }

    public function obtenerResultados(){

        // Obtengo el idUsuario
        //Obtengo el nombre
        session_start();
        $nombre = $_SESSION["usuario"];
        session_write_close();

        $con = $this->conectar();
    
        $sql = "SELECT idUsuario
        FROM usuarios WHERE usuario = '$nombre'";

        $query = mysqli_query($con, $sql);
        $usuario = array(); // Crea la variable $filas y se le asigna un array vacío
        $usuario = mysqli_fetch_array($query, MYSQLI_ASSOC);
        $this->desconectar();

        // echo "<pre>";
        // var_dump($usuario);
        // echo "</pre>";
        // die();
        $idUsuario = $usuario["idUsuario"];



        $con = $this->conectar();
            
        $sql = "SELECT r1, r2, r3, r4, r5, r6, r7, r8, r9, r10, r11, r12, r13, fecha, hora
        FROM resultados WHERE idUsuario = '$idUsuario'";

        $query = mysqli_query($con, $sql);
        $resultados = array(); // Crea la variable $filas y se le asigna un array vacío
        // (Si la consulta no devuelve ningún resultado, la función por lo menos va a retornar un array vacío)

        while ($fila=mysqli_fetch_array($query, MYSQLI_ASSOC)) {

            $resultados[] = $fila; // Añade el array $fila al final de $filas
        }
        
        $this->desconectar();

        // echo "<pre>";
        // print_r($resultados);
        // echo "</pre>";

        // die();

        return $resultados;



    }
}



?>