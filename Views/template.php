<?php

//Cambiar ya que esté en producción
//"http://localhost/mi-framework/";
$rutaLocal = Ruta::rutaCtr();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    <link rel="shortcut icon" href="<?php echo $rutaLocal?>Views/images/icon.png" type="image/png">

    <!-- boxicons -->
    <link rel="stylesheet" href="<?php echo $rutaLocal?>Views/fonts/boxicons.css" />
      <!-- Core CSS -->
    <link rel="stylesheet" href="<?php echo $rutaLocal ?>Views/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?php echo $rutaLocal ?>Views/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?php echo $rutaLocal ?>Views/css/demo.css" />
    <link rel="stylesheet" href="<?php echo $rutaLocal ?>Views/css/page-auth.css" />

      <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- sweet alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

     <!-- Helpers -->
     <script src="<?php echo $rutaLocal?>Views/js/helpers.js"></script>


    <title>Mi framework</title>
</head>
<body>
    



<?php
// if(isset($_SESSION['validar']) && $_SESSION['validar'] == true){

    echo ' <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">';
    include 'modules/menu.php';
    echo '<div class="layout-page">';
    include 'modules/cabecera.php';
    $url = array();
    $ruta = null;
    if(isset($_GET["url"])){
     $url = explode("/", $_GET["url"]);

     if($url[0] == "inicio"){
         include 'modules/'.$url[0].'.php';
     }else if($url[0] == "crear"){
        include 'modules/mvcx/'.$url[0].'.php';
     }
    }

    echo '
    </div>
    </div>
    </div>
    ';
    
    
// }else{
//         include "modules/login.php";
//     }

include 'modules/footer.php';
?>





</body>
</html>