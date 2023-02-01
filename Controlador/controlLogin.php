<?php
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    // echo "Estamos en el controlLogin";
    // die();

class controlLogin{

    public function verificarUsuario($usuario, $password){

        include_once("../Modelo/entidadUsuario.php");
        // Crear un objeto de la clase "entidadUsuario"
        $objUsuario = new entidadUsuario;
        $registrado = $objUsuario->validarLogin($usuario);
        
        if($registrado == true){ 


            include_once("../Modelo/entidadUsuario.php");
            // Crear un objeto de la clase "entidadUsuario"
            $objUsuario = new entidadUsuario;
            $respuesta = $objUsuario->validarPasswordUsuario($usuario, $password);
          
            if($respuesta== true){

                session_start();
                $_SESSION['usuario'] = $usuario;
                // echo "<pre>";
                // print_r($_SESSION);
                // print_r($listaPrivilegios);
                // echo "</pre>";
                session_write_close();
                // die();
                
                include_once("../Vista/formAnalisis.php");
                $objFormPrincipal = new formAnalisis;
                $objFormPrincipal -> formAnalisisShow();                    
            }
            else{
                include_once("../Vista/mensajeSistema.php");
                $objmensaje = new mensajeSistema;   
                $objmensaje->mensajeSistemaShow("La contraseña es incorrecta", "../index.php");
            }
        
        }
        else{
            include_once("../Vista/mensajeSistema.php");
            $objmensaje = new mensajeSistema;   
            $objmensaje->mensajeSistemaShow("No existe ese usuario", "../index.php");  

        }
    }
}


?>