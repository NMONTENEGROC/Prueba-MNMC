<?php
		require('../includes/Funciones.php');
		$funciones=Fc::getInstance();
		session_start(); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="../Imagenes/SOADHO.ico" type="image/x-icon" rel="shortcut icon" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SOADHO</title>
<script src="../includes/CODIGOS.js"></script>
<script src="../jquery-1.11.1.min.js"></script>
</head>
<body>
<div id="cuerpo">
	<?php
		include($_SESSION['consultar']);
    ?>
</div>
</body>
</html>