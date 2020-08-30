<?php
require('../includes/Funciones.php');
$funciones=Fc::getInstance();
session_start();
$funciones->cnx();
$resultado = $_POST['valor'];
$tipo = $_POST['tipo'];
$clase=$_POST['clase'];
$funcion=$_POST['funcion'];
echo $resultado;
$funciones->cargar_Departamentos($resultado, $clase);
$funciones->cerrar_cnx();

?>