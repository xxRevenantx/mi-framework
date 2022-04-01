
<?php


class LoginCtr{

        //VALIDAMOS EL LOGIN
        static public function validarLoginCtr($datos){
                $tabla = "usuarios";
                $respuesta = LoginMdl::validarLoginMdl($tabla, $datos);

                // Validamos si el correo y contraseña de la BD son iguales a los campos que envía el usuario
                if(is_array($respuesta)){
                        if ($datos["correo"]== $respuesta["correo"] && $datos["password"] == $respuesta["pass"]) {
                                session_start();
                                $_SESSION['validar'] = true;
                                $_SESSION['usuario'] = $respuesta['usuario'];
                                $_SESSION['correo'] = $respuesta['correo'];
                                $_SESSION['id'] = $respuesta['Id'];

                                $response =  array(
                                        "response" => "true"
                                );
                        } 
                }else if($datos["correo"] == "" || $datos["password"] == ""){
                        $response =  array(
                            "response" => "empty"
                        );
                }
                 else{
                        $response =  array(
                                "response" => "error"
                        );
                 }

        return $response;

        }

}

    