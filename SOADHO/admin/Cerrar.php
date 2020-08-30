<?php 
require('../includes/Funciones.php');
$funciones=Fc::getInstance();
session_start();
$funciones->cnx();	
if (isset($_SESSION['correcto'])){
		$ID=$_SESSION['id'];
		$funciones->ejecutar("update personal set ESTADO=0 WHERE ID_PERSONAL='$ID'");
		session_destroy();
} 
header('Location:../SOADHO.php');
?>
