<?php

class Funciones{


    // Swal para alertas
    static public function swal($icon, $title, $text, $location){
        echo '<script>
               Swal.fire({
                 icon: "'.$icon.'",
                 title: "'.$title.'",
                 text: "'.$text.'"
               }).then(function(){
                 window.location = "'.$location.'"
               })
             </script>';
     }
 

     
        // Swal para alerta pequeña
   static public function swalMixin($posicion, $icon, $title){
     echo "
     <script>
     const Toast = Swal.mixin({
       toast: true,
       position: '".$posicion."',
       showConfirmButton: false,
       timer: 3000,
       timerProgressBar: true,
       didOpen: (toast) => {
         toast.addEventListener('mouseenter', Swal.stopTimer)
         toast.addEventListener('mouseleave', Swal.resumeTimer)
       }
     })
     
     Toast.fire({
       icon:'".$icon."',
       title: '".$title."'
     })
     </script>
     ";
   }
}