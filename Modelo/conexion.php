<?php
    class conexion{
        
        protected function conectar(){
            $host="localhost";
            $user="root";
            $pass="";

            $bd="sistema_experto";

            $con=mysqli_connect($host,$user,$pass);

            mysqli_select_db($con,$bd);

            return $con;
        }

        protected function desconectar(){
            $conn = $this->conectar();
            $conn->close();
        }
    }
?>

