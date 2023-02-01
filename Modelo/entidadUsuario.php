<?php

include_once("conexion.php");

// Heredamos la clase conexion
class entidadUsuario extends conexion{
    
    //---------------------------------------------------------------------
    //Funciones de keneth: Registrar Usuario
    public function validarUsuarioUnico($usuario){
        // Usamos el método "conectar" de conexion
        $con = $this->conectar();
        // $con = conexion::getConexion();
            
        // Consulta
        $sql = "SELECT usuario
        FROM usuarios WHERE usuario = '$usuario'";

        $query = mysqli_query($con, $sql);
        
        $resultado = mysqli_num_rows($query);

        // echo "<pre>";
        // var_dump($resultado);
        // echo "</pre>";

        // die();

        $this->desconectar();
        
        // Si hay más de un registrado true
        if($resultado >= 1)
            return true;
        else
            return false;
    }

    public function insertarRegistro($usuario, $password, $privilegios){

        // echo "<pre>";
        // var_dump($usuario, $password, $privilegios);
        // echo "</pre>";
        // die();

        // Usamos el método "conectar" de conexion
        $con = $this->conectar();
        // $con = conexion::getConexion();

        // ---- Registrar usuario
        $sql="INSERT INTO usuarios (usuario, password, estado)
        VALUES('$usuario','$password', 1)";
        
        $query= mysqli_query($con,$sql);


        // ---- Registrar privilegios 
        // Obtenemos el id del usuario registrado
        $sql = "SELECT idUsuario
        FROM usuarios WHERE usuario = '$usuario'";

        $query = mysqli_query($con, $sql);
        $resultado = array(); // Crea la variable $filas y se le asigna un array vacío
        // (Si la consulta no devuelve ningún resultado, la función por lo menos va a retornar un array vacío)

        $resultado = mysqli_fetch_array($query, MYSQLI_ASSOC);

        // echo "<pre>";
        // var_dump($resultado);
        // echo "</pre>";
        // die();

        $idUsuario = $resultado["idUsuario"];

        
        // Insertamos los privilegios

        foreach ($privilegios as $i => $valor) {
            $idprivilegio = $i+1;

            $sql="INSERT INTO usuario_privilegio (idUsuario, idPrivilegio)
            VALUES('$idUsuario','$idprivilegio')";
            $query= mysqli_query($con,$sql);

        }


        $this->desconectar();

        return $query;
    }

    
    //---------------------------------------------------------------------
    //Funciones de Joel: Actualizar contraseña
    public function verificarPassword($usuario, $oldpass){
        
        $con = $this->conectar();
        // $con = conexion::getConexion();
      
        $sql = "SELECT usuario FROM usuarios WHERE usuario = '$usuario' && password = '$oldpass'";
        
        $query = mysqli_query($con, $sql);
        
        $resultado = mysqli_num_rows($query);

        $this->desconectar();
        
        if($resultado == 1)
            return true;
        else
            return false;
    }


    public function actualizarPassword($usuario, $newpass){
        $con = $this->conectar();
        // $con = conexion::getConexion();

        $sql="UPDATE `usuarios` SET `password` ='$newpass' WHERE usuario='$usuario'";
        $query= mysqli_query($con,$sql);
        
        $this->desconectar();

        return $query;

    }

    //---------------------------------------------------------------------
    //Funciones de Angel: Autenticar usuario
    public function validarLogin($usuario){
        // Usamos el método "conectar" de conexion
        $con = $this->conectar();
        // $con = conexion::getConexion();
            
        // Consulta
        $sql = "SELECT usuario
        FROM usuarios WHERE usuario = '$usuario'";

        $query = mysqli_query($con, $sql);
        
        $resultado = mysqli_num_rows($query);

        // echo "<pre>";
        // var_dump($resultado);
        // echo "</pre>";
        // die();

        $this->desconectar();
        

        if($resultado >= 1)
            return true;
        else
            return false;
    }


    public function validarPasswordUsuario($usuario, $password){
        // Usamos el método "conectar" de conexion
        $con = $this->conectar();
        // $con = conexion::getConexion();
            
        // Consulta
        $sql = "SELECT usuario
        FROM usuarios WHERE usuario = '$usuario'&& password = '$password'";
        

        $query = mysqli_query($con, $sql);
        
        $resultado = mysqli_num_rows($query);

        // echo "<pre>";
        // var_dump($resultado);
        // echo "</pre>";
        // die();

        $this->desconectar();
        

        if($resultado == 1)
            return true;
        else
            return false;
    }

    public function validarEstadoUsuario($usuario){
        // Usamos el método "conectar" de conexion
        $con = $this->conectar();
        // $con = conexion::getConexion();
            
        // Consulta
        $sql = "SELECT estado
        FROM usuarios WHERE usuario = '$usuario' AND estado = '1'";
        

        $query = mysqli_query($con, $sql);
        $resultado = mysqli_num_rows($query);

        // echo "<pre>";
        // var_dump($resultado);
        // echo "</pre>";
        // die();
        $this->desconectar();
        

        if($resultado == 1)
            return true;
        else
            return false;
    }
}


?>