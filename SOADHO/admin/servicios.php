<?php 
require('../includes/Funciones.php');
$funciones=Fc::getInstance();
session_start();
$funciones->cnx();
$ejecutar=$funciones->ejecutar("SELECT PD.ID_PRODUCTO AS CODIGO,PD.NOMBRE AS NOMBRE FROM PRODUCTO PD UNION SELECT LM.ID_ELEMENTO AS CODIGO,LM.NOMBRE AS NOMBRE FROM ELEMENTO LM");?>
				<option value="" > </option>
                <option value="" class="vacio_cbx" > </option>
				<?php while($valores = mysql_fetch_array($ejecutar)){?>      
      <option value="<?php echo $valores['CODIGO'] ?>" class="<?php echo $valores['CODIGO']; ?>"><?php echo $valores['NOMBRE'] ?></option>
      <?php
}
?>