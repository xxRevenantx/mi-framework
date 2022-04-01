<?php

//APP
include_once 'App/crearMVCX.php';
include_once 'App/vistasMVCX.php';
include_once 'App/funciones.php';


// Controladores
include_once "Controllers/templateCtr.php";
include_once "Controllers/rutaCtr.php";
include_once "Controllers/loginCtr.php";

// Modelos
include_once "Models/loginMdl.php";


$template = new Template();
$template->templateCtr();
