<?php 

// 
header('Content-type: text/html; characterset=utf8');

// Variables de servidro y sistema
$servidor = "http://localhost";

// nombre del proyecto o carpeta
$sistema = "html/fedel_factura";

$nombre_sistema= "Facturación";

$anio = "2019";
$fecha_sistema = date("d-m-Y");

$hora_sistema = date("g:i a");

//  se crea la constante de caracter "DS" que con tiene la barra separadora de la capeta"/"
define('DS', DIRECTORY_SEPARATOR);

// Se crea la constante para que en rutar la inc/config.sistema.php
define('RUTA_SISTEMA',str_replace('inc'. DS,'',dirname(__FILE__).DS));


 ?>