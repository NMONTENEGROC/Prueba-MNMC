<script src="../includes/CODIGOS.js" type="application/x-javascript"></script>
<script src="../jquery-1.11.1.min.js"></script>
<?php
require('../includes/Funciones.php');
$funciones=Fc::getInstance();
session_start();
$funciones->cnx();
$CONTA = $_POST['CONTA'];
$NOMBRE = $_POST['NOMBRE'];
$CANTIDAD = $_POST['CANTIDAD'];
$CANTIDAD_R=$_POST['CANTIDAD_R'];
if(mysql_num_rows($funciones->ejecutar("SELECT * FROM producto WHERE nombre='$NOMBRE'"))>0){
	$ejecucion=$funciones->ejecutar("SELECT valor_unitario FROM producto WHERE nombre='$NOMBRE'");
	$registros=mysql_num_rows($ejecucion);
	$dato = mysql_fetch_array($ejecucion);
	$valor=$dato['valor_unitario'];
}
if(mysql_num_rows($funciones->ejecutar("SELECT * FROM elemento WHERE nombre='$NOMBRE'"))>0){
	$ejecucion=$funciones->ejecutar("SELECT valor FROM elemento WHERE nombre='$NOMBRE'");
	$registros=mysql_num_rows($ejecucion);
	$dato = mysql_fetch_array($ejecucion);
	$valor=(int)$dato['valor'];
}
$valor_total=$valor*((int)$CANTIDAD);
$funciones->cerrar_cnx();
?>
<script type="text/javascript">mostrar_total_factura(<?php echo $valor;?>,<?php echo $valor_total;?>,<?php echo $CONTA;?>,<?php echo $CANTIDAD_R;?>);</script>