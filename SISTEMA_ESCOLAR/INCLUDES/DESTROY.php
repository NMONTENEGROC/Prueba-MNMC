<?php
include ('CONEXION.php');
session_start();
session_destroy();
header ('Location: ../Templates/Consulta.php');
?>
