
<?php
	    include('../INCLUDES/CONEXION.php');
		$connection=mysql_connect($db_host,$db_username,$db_password);
		mysql_select_db($db_database);	
		session_start();
			if(!$_SESSION['ADMINISTRADOR']){
	 header('Location: Administrador.php');	
	}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
	width:200px;
	height:69px;
	z-index:1;
	top: 22px;
	left: 282px;
}
#Layer2 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	left: -11px;
	top: -112px;
}
#Layer3 {
	position:absolute;
	width:380px;
	height:262px;
	z-index:1;
	left: 393px;
	top: 116px;
}
.Estilo2 {
	font-size: 25px;
	font-family: Andalus;
	font-weight: bold;
}
#Layer4 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	left: 58px;
	top: 299px;
}
.Estilo6 {font-size: 23px}
.tabla {background-color:#38B8B8;
border-radius:15px;
padding-left:19px;
}
.Estilo8 {font-size: 24px; font-family: Andalus; font-weight: bold; }
.caja{
	border-radius:10px;background-color:#D6D6D6; size:15;font-family:Comic Sans MS;}
</style>

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
		<div id="Layer4">
		  <div id="Layer2">
            <div id="layer">
              <div align="center" class="Estilo6">
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
		<div id="Layer3">
		  <table width="373" height="254" border="0" style="border-radius:15px ;-webkit-box-shadow: -4px 7px 7px 1px #000; " cellspacing="0">
            <tr>
              <td><div align="center"><span class="Estilo2">Estudiante</span></div></td>
              <td><form id="form1" name="form1" method="post" action="">
                <label>
                  <select name="select" class="caja">
				   <option value=""></option>
				 <?php
				 $sql="SELECT * FROM estudiante";
				 $result=mysql_query($sql,$connection);
				 $rows=mysql_num_rows($result);
				 $i=1;
				 while($rows>=$i){
				 $registro=mysql_fetch_array($result);
				  	?>
						<option value="<?php echo $registro['id_estudiante']; ?>"><?php echo $registro['NOMBRE'].' '.$registro['APELLIDO']; ?></option>
					<?php
					$i=$i+1;
				 }
				 ?>
                </select>
                </label>
              </form>
              </td>
            </tr>
            <tr>
              <td><div align="center"><span class="Estilo8">Profesor</span></div></td>
              <td><form id="form2" name="form2" method="post" action="">
                <label>
                  <select name="select2" class="caja">
				  <option value=""></option>
				 <?php
				 $sql="SELECT * FROM PROFESOR";
				 $result=mysql_query($sql,$connection);
				 $rows=mysql_num_rows($result);
				 $i=1;
				 while($rows>=$i){
				 $registro=mysql_fetch_array($result);
				  	?>
						<option value="<?php echo $registro['id_profesor']; ?>"><?php echo $registro['NOMBRE'].' '.$registro['APELLIDO']; ?></option>
					<?php
					$i=$i+1;
				 }
				 ?>
                </select>
                </label>
              </form>
              </td>
            </tr>
            <tr>
              <td><div align="center"><span class="Estilo8">Información</span></div></td>
              <td><form id="form3" name="form3" method="post" action="">
                <label>
                  <textarea name="textfield" class="caja"></textarea>
                </label>
              </form>
              </td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><form id="form4" name="form4" method="post" action="">
                <label>
                  <input name="Submit" type="submit" class="menu_b" value="Ingresar" />
                </label>
              </form>
              </td>
            </tr>
          </table>
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
