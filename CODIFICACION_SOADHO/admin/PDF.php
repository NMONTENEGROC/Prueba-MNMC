<?php  
$IMPRIMIR=$_POST['IMPRIMIR'];
require_once("dompdf/dompdf_config.inc.php");
$dompdf = new DOMPDF();
$dompdf->load_html($IMPRIMIR);   
$dompdf->render();
$output = $dompdf->output();
file_put_contents("salida.pdf", $output); 
?>