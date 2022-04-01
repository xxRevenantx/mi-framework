
<?php
require_once "../../Models/loginMdl.php";
require_once "../../Controllers/loginCtr.php";
        
//   /* CLASE  */

class Ajax {

    public $correo;
    public $password;

    public function validarLogin(){
       $datos = array("correo" => $this->correo, "password" => $this->password);
       $respuesta = LoginCtr::validarLoginCtr($datos);
       echo json_encode($respuesta);
    }

}

if(isset($_POST["correo"])) {
    $a = new Ajax();
    $a -> correo = $_POST["correo"];
    $a -> password = $_POST["password"];
    $a->validarLogin();
}

          

    