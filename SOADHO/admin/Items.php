<script src="../includes/CODIGOS.js" type="application/x-javascript"></script>
<script src="../jquery-1.11.1.min.js"></script>
<?php
require('../includes/Funciones.php');
$funciones=Fc::getInstance();
session_start();
$funciones->cnx();
	$ciclos=$_POST['cont'];
	$factura=$_POST['idfactura'];
	$Nombre=$_POST['Nombres'];
	$Cantidad=$_POST['Cantidad'];	 
	$Cantidad= str_replace('Unidade(s)','',$Cantidad);
	$Cantidades=explode(',',$Cantidad);	
	$Nombres = explode(',',$Nombre); 
	$factura = str_pad($factura, 8, '0', STR_PAD_LEFT);	
			
		$ejecucion=$funciones->ejecutar("SELECT CAST(ID_SERVICIO AS SIGNED) AS ID_SERVICIO FROM servicio GROUP BY  ID_SERVICIO   ORDER BY ID_SERVICIO ASC ");
		$i=1;
	while($datos = mysql_fetch_array($ejecucion)){
				$matriz[$i][0]=$datos['ID_SERVICIO'];
				$i=$i+1;			
			}
	$numero_registros=mysql_num_rows($funciones->ejecutar("select * from servicio"));
	if($numero_registros>0){
							$Id_B=$matriz[$numero_registros][0];
							$Id_B=$Id_B+1;							
						}
						else{
							$Id_B=1;
						}		
									
	for($i=1;$i<=$ciclos;$i=$i+1){					
			$Pr=TRIM($Nombres[$i]);
	if(mysql_num_rows($funciones->ejecutar("SELECT * FROM producto WHERE nombre='$Pr'"))>0){
	$ejecucion=$funciones->ejecutar("SELECT ID_PRODUCTO FROM producto WHERE nombre='$Pr'");
	$registros=mysql_num_rows($ejecucion);
	$dato = mysql_fetch_array($ejecucion);
	$Id_p=$dato['ID_PRODUCTO'];
	$cantidad_p=TRIM((int)($Cantidades[$i]));
	$funciones->ejecutar("INSERT INTO SERVICIO values('$Id_B','$factura',NULL,'$Id_p','$cantidad_p')");}
	
	if(mysql_num_rows($funciones->ejecutar("SELECT * FROM elemento WHERE nombre='$Pr'"))>0){
	$ejecucion=$funciones->ejecutar("SELECT ID_ELEMENTO FROM elemento WHERE nombre='$Pr'");
	$registros=mysql_num_rows($ejecucion);
	$dato = mysql_fetch_array($ejecucion);
	$Id_p=$dato['ID_ELEMENTO'];
	$cantidad_p=TRIM((int)($Cantidades[$i]));
	$funciones->ejecutar("INSERT INTO SERVICIO values('$Id_B','$factura','$Id_p',NULL,'$cantidad_p')");}
	$Id_B=$Id_B+1;
	}
	?>
    <script> alert('Registro Realizado Correctamente!!'); </script>
    <?php
$funciones->cerrar_cnx();
?>