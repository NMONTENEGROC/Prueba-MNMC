<script src="../includes/CODIGOS.js" type="application/x-javascript"></script>
<script src="../jquery-1.11.1.min.js"></script>
<?php
require('../includes/Funciones.php');
$funciones=Fc::getInstance();
session_start();
$funciones->cnx();
date_default_timezone_set('America/Bogota');

$id_reserva=$_SESSION['ID_RESERVA'];
	$id_factura=$_POST['Factura'];
	$valor_habitacion=$_POST['Habitacion'];
	$id_persona=$_SESSION['ID_HUESPED'];
	$id_personal=$_SESSION['id'];
	$fecha=date('Y-m-d');
	$total=$_POST['Total'];
	$extras=$total-$valor_habitacion;
	$id_factura = str_pad($id_factura, 8, '0', STR_PAD_LEFT);
	
	$reg=mysql_num_rows($funciones->ejecutar("SELECT* FROM DETALLE_FACTURA WHERE ID_RESERVA='$id_reserva'"));
	if($reg<1){
		$row=$funciones->ejecutar("insert into factura values('$id_factura','$id_persona','$id_personal','$fecha','$extras','$total')");
		if($row){
		?>
		<script>registrar_items('<?php echo $id_factura; ?>');</script>
		<?php
		}
		$funciones->ejecutar("insert into DETALLE_FACTURA values('$id_reserva','$id_factura','$valor_habitacion')");		
	}
	else{?>
		<script>alert('Error!!! Ya has guardado esta Factura!!!');</script>
        <?php
	}
?>