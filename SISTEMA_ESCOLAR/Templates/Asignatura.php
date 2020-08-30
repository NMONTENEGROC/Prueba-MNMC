
<?php
	    include('../INCLUDES/CONEXION.php');
		$connection=mysql_connect($db_host,$db_username,$db_password);
		mysql_select_db($db_database);	
		session_start();
			if(!$_SESSION['ADMINISTRADOR']){
	 header('Location: Administrador.php');	
	}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/MASTER.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>SISTEMA_ESCOLAR</title>
<link rel="shortcut icon" href ="../IMAGENES/icono.ico"/>
<style type="text/css">
	body{
		padding:0;
		background-color:#160361;
		background-attachment:fixed;
		margin:0;
	}
	#Cuerpo{
		position:absolute;
		width:100%;
	}
	#Header{
		width:100%;
		height:20%;
		position:fixed;
		background-color:#000;
		margin:0;
		z-index:5;
	}
	#Logo_Colegio{
		width:7%;
		height:18%;
		margin-top:0.3%;
		margin-left:10%;
		background-image:url(../IMAGENES/NUEVO+ESCUDO+COL.jpg);
		position:fixed;
		z-index:2;
		background-repeat:no-repeat;
		background-size:100% 100%;
		border-radius:3px;
-webkit-box-shadow: -4px 7px 7px 1px #CCC;
 -moz-box-shadow: -4px 7px 7px 1px #CCC;
 box-shadow:  -4px 7px 7px 1px #CCC;
	}
	#Logo_Proyecto{
		width:7%;
		height:18%;
		margin-top:0.3%;
		margin-left:83%;;
		position:fixed;
		z-index:2;
		background-repeat:no-repeat;
		background-size:100% 100%;
		border-radius:3px;
		-webkit-box-shadow: -4px 7px 7px 1px #CCC;
		 -moz-box-shadow: -4px 7px 7px 1px #CCC;
		 box-shadow:  -4px 7px 7px 1px #CCC;
	}
	#Nombre{
		color:#FFF;
		width:45%;
		height:8%;
		margin-left:25%;
		margin-top:4%;
		font-family:"Tekton Pro", "Tekton Pro Cond", "Tekton Pro Ext";
		font-size:32px;
		position:fixed;
		/*border-bottom: 1px solid #FFF;*/
		background-image:url(../IMAGENES/NOMBRE.JPG);
		background-repeat:no-repeat;
		background-size:100% 100%;
	}
	#Menu{
		width:100%;
		height:7%;
		position:fixed;
		background-color:#D3F8FE;
		margin-top:9.3%;
		z-index:5;
	}
	
	#Footer{
		background-color:#000;
		width:100%;
		height:30px;
		z-index:8;
		position:fixed;
		left: auto;
		top: auto;
		bottom:0;
	}
	.menu_b:hover{
	background-color:#0033CC;
	cursor:help;
	color:#33FF00;
	}
</style>
<!-- InstanceBeginEditable name="doctitle" -->
<style>
#Contenido{
		width:69%;
		position:absolute;
		height:450px;
		background-color:#FFF;
		margin-left:15%;
		margin-top:13%;
		z-index:1;
		margin-bottom:5px;
		padding:8px;
	}
#Layer1 {
	position:absolute;
	width:325px;
	height:157px;
	z-index:1;
	left: 287px;
	top: 173px;
}
#Layer2 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	left: 46px;
	top: 188px;
}
#Layer6 {position:absolute;
	width:163px;
	height:40px;
	z-index:1;
	left: 564px;
	top: 297px;
}
.Estilo2 {font-size: 23px}
.tabla {background-color:#38B8B8;
border-radius:15px;
padding-left:19px;
}
.Estilo3 {
	font-size: 22px;
	font-weight: bold;
}

 .tabla{background-color:#38B8B8;
border-radius:15px;
padding-left:19px;
}
.tabla:hover{
	background-color:#000099;
	color:#FFFFFF;
}
.tabla a:hover{color:#FFFFFF;}
.Estilo4 {font-size: 40px}</style>
<link href="ESTILES.css" type="text/css" rel="stylesheet"  media="screen" />

<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
</head>

<body>
<div id="Cuerpo">
	<div id="Header">
    	<div id="Logo_Colegio">
        </div>
        <div id="Nombre">
	
        </div>
        <div id="Logo_Proyecto">
		  <object classid="clsid:166B1BCA-3F9C-11CF-8075-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/director/sw.cab#version=8,5,0,0" width="110" height="120">
              <param name="src" value="../IMAGENES/LOGO1.swf" />
              <embed src="../IMAGENES/LOGO1.swf" pluginspage="http://www.macromedia.com/shockwave/download/" width="100%" height="100%"></embed>
		  </object>
        </div>
    </div>
    <div id="Menu">
		
   <center>
      <table width="899" height="35" border="0"  bordercolor="#000000" cellpadding="0" cellspacing="0" style="border-radius:5px;padding:3px;">
          <tr>  
   <td width="181" class="menu_b" style="border:1px solid #000033;"><div align="center"  style="text-align:center;text-decoration:none ;"><a href="Inicio.php" class="menu_b" style="text-decoration:none; ">INICIO</a></div></td> 
    <td width="181" class="menu_b" style="border:1px solid #000033;"><div align="center"  style="text-align:center;text-decoration:none;"><a href="Historia.php" class="menu_b" style="text-decoration:none; ">HISTORIA</a></div></td>   
   <td width="181" class="menu_b" style="border:1px solid #000033;"><div align="center"  style="text-align:center;text-decoration:none ;"><a href="Simbolos.php" class="menu_b" style="text-decoration:none; ">SÍMBOLOS</a></div></td>  
   <td width="181" class="menu_b" style="border:1px solid #000033;"><div align="center"  style="text-align:center;text-decoration:none;"><a href="Consulta.php" class="menu_b" style="text-decoration:none;">CONSULTA</a></div></td>  
   <td width="181" class="menu_b" style="border:1px solid #000033;"><div align="center"  style="text-align:center;text-decoration:none;"><a href="Administrador.php" class="menu_b" style="text-decoration:none ;">ADMINISTRADOR</a></div></td>  
   <td width="181" class="menu_b" style="border:1px solid #000033;"><div align="center"  style="text-align:center;text-decoration:none;"><a href="Creadores.php" class="menu_b" style="text-decoration:none;">CREADORES</a></div></td>
   
      </table>
    </center>
    
    
    </div>
    <div id="Contenido">
		<!-- InstanceBeginEditable name="Area_Trabajo" -->
		<div id="Layer2">
		  <div id="layer">
            <div id="div">
              <div align="center" class="Estilo2">
			  
                <table width="202" bgcolor="#FFFFFF">
                  <tr>
                    <td width="190" class='tabla'><a href="Registro.php" style="text-decoration:none"> <font color="#FFFFFF">Nuevo Estudiante </a></td>
                  </tr>
                  <tr>
                    <td class='tabla'><a href="Asignatura.php" style="text-decoration:none;"><font color="#FFFFFF">Asignatura</a></td>
                  </tr>
                  <tr>
                    <td class='tabla'><a href="Observaciones.php" style="text-decoration:none"><font color="#FFFFFF">Observaciones</a></td>
                  </tr>
                  <tr>
                    <td class='tabla'><a href="ingreso_nota.php" style="text-decoration:none"><font color="#FFFFFF">Ingreso de nota</a></td>
                  </tr>
                  <tr>
                    <td class='tabla'><a href="profesor.php" style="text-decoration:none"><font color="#FFFFFF">Profesor</a> </td>
                  </tr>
                </table>
              </div>
            </div>
	      </div>
		</div>
        <?php
	if(isset($_POST['ELIMINAR'])){
		 	$links = "";
			foreach($_POST as $key => $value){
					if($key!='delete'){
						$links.= "ID_ASIGNATURA='$value' or ";
			}
			}
			$links.= "ID_ASIGNATURA=-1";
			$query = "DELETE ASIGNATURA.* from ASIGNATURA where $links";
			$result = mysql_query($query,$connection);

	}

?>

<?php
if (isset($_POST['ingresar'])){
$nombre=strtoupper($_POST['nombre']);
$docente=strtoupper($_POST['cbx_profesor']);

	if($nombre<>"" and $docente<>""){
	$sql2="SELECT * FROM ASIGNATURA WHERE NOMBRE='$nombre'";
	$result2=mysql_query($sql2,$connection);
	$rows=mysql_num_rows($result2);
		if($rows<1){
		
		$sql="INSERT INTO ASIGNATURA VALUES(NULL,'$nombre','$docente')";
		$result=mysql_query($sql,$connection);
		
		 ?>
								 <script>
									alert('LA ASIGNATURA HA SIDO REGISTRADA CORRECTAMENTE');
								 </script>
								 <?php
								}
								else{
								
									 ?>
								 <script>
									alert('YA EXISTE UNA ASIGNATURA CON ESE NOMBRE');
								 </script>
								 <?php
								}
	}
	else{
								
									 ?>
								 <script>
									alert('POR FAVOR INGRESE TODOS LOS DATOS');
								 </script>
								 <?php
								}
}
?>
		<div id="Layer1">
        <form method="post">
		  <table width="326" height="141" border="0" style="border-radius:15px ;-webkit-box-shadow: -4px 7px 7px 1px #000; " cellspacing="0">
            <tr>
              <td width="157" height="56"><div align="center" class="Estilo3">
                <div align="center">Nombre</div>
              </div></td>
              <td width="165">
                <label>
                  <input name="nombre" type="text" class="caja" />
                </label>
        
              </td>
            </tr>
            <tr>
              <td height="45"><div align="left" class="Estilo3">
                <div align="center">Profesor</div>
              </div></td>
              <td>
                <label>
                 <select name="cbx_profesor" class="caja">
				 <option value=""></option>
				 <?php
				 $sql="SELECT * FROM PROFESOR";
				 $result=mysql_query($sql,$connection);
				 $rows=mysql_num_rows($result);
				 $i=1;
				 while($rows>=$i){
				 $registro=mysql_fetch_array($result);
				  	?>
						<option value="<?php echo $registro['ID_PROFESOR']; ?>"><?php echo $registro['NOMBRE'].' '.$registro['APELLIDO']; ?></option>
					<?php
					$i=$i+1;
				 }
				 ?>
                </select>
                </label>
            
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <label>
                  <center><input name="ingresar" type="submit" class="BTN" value="Ingresar" /></center>
                </label>
            
              </td>
            </tr>
        </table></div>
        </form>
		<div id="docs" style="border:1px solid #000000; width:30%;float:right;height:380px;margin-top:-0px;overflow-Y:scroll;z-index:9;">
			<?php
			
			$sql="SELECT ASG.ID_ASIGNATURA, ASG.NOMBRE,CONCAT(PR.NOMBRE,CONCAT(' ',PR.APELLIDO)) AS ID_PROFESOR FROM ASIGNATURA ASG, PROFESOR PR WHERE PR.ID_PROFESOR=ASG.ID_PROFESOR";
			$result=mysql_query($sql,$connection);			
			$rows=mysql_num_rows($result);
			$i=1;
			?>
			<form method="post">
			<table border="1">
			<tr> 
			<td width="40">
			</td>
			<td width="90">
			NOMBRE			</td>
			<td width="180">
			PROFESOR			</td>
			
			</tr>
			<?php 
			$sql="SELECT ASG.ID_ASIGNATURA,ASG.NOMBRE,CONCAT(PR.NOMBRE,CONCAT(' ',PR.APELLIDO)) AS ID_PROFESOR FROM ASIGNATURA ASG, PROFESOR PR WHERE PR.ID_PROFESOR=ASG.ID_PROFESOR";
			$result=mysql_query($sql,$connection);	
			while($i<=$rows){
			$registro=mysql_fetch_array($result);
			?>
			<tr>
			<td>
<input type="checkbox" name="<?php echo $registro['ID_ASIGNATURA']; ?>" id="<?php echo $registro['ID_ASIGNATURA']; ?>" value="<?php echo $registro['ID_ASIGNATURA']; ?>" />
</td>
			<td>
			<?php
			echo $registro['NOMBRE'];
			?>
			</td>
			
			<td>
			<?php
			echo $registro['ID_PROFESOR'];
			?>
			</td>			
			
			<?php
			
			$i=$i+1;
			
			?>
			</tr>
			<?php
			
			}
			?>
			<tr>
			<td colspan="3"> 
			<center><input type="submit" name="ELIMINAR"  value ="ELIMINAR" class="BTN"/></center>
			</td>
						</tr>
			
			</table>
			</form>
		</div>
		</div>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		
		
  <!-- InstanceEndEditable --></div>
    <div id="Footer">
    <center>
             <table width="953" border="0">
            <tr>
              <td width="64"><div align="center"><a href="Temas.php">Temas</a></div></td>
              <td width="74"><div align="center"><a href="Ayuda.php">Ayuda</a></div></td>
              <td width="96"><div align="center"><a href="Cookies.php">Cookies</a></div></td>
              <td width="146"><div align="center"><a href="Privacidad.php">Privacidad </a></div></td>
              <td width="109"><div align="center"><a href="Crear%20anuncio.php"> Crear Anuncio</a></div></td>
              <td width="171"><div align="center"><a href="Crear%20una%20pagina.php">Crear una pagina</a></div></td>
              <td width="159"><div align="center"><a href="Derechos%20Reservados.php">Derechos reservados </a></div></td>
              <td width="100"><div align="center"><a href="Empleo.php">&nbsp;Empleo</a></div></td>
            </tr>
          </table>
  </center>
    </div>
</div>
</body>
<!-- InstanceEnd --></html>
