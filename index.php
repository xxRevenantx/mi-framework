<?php

//APP
include 'App/crearMVCX.php';
include 'App/vistasMVCX.php';
include 'App/funciones.php';


// Controladores
include "Controllers/templateCtr.php";
include "Controllers/rutaCtr.php";

// Modelos


$template = new Template();
$template->templateCtr();
