<?php
	include('../INCLUDES/CONEXION.php');
		$connection=mysql_connect($db_host,$db_username,$db_password);
		mysql_select_db($db_database);
		session_start();
?>



<?php

		 if(isset($_POST['Enviar'])){
		 $documento=$_POST['Documento'];
		  if ( $documento<>""){
		  $sql="SELECT * FROM estudiante WHERE DOCUMENTO='$documento'";
		  $result=mysql_query($sql,$connection);
		  $rows=mysql_num_rows($result);
		  if($rows>0){
		  $registro=mysql_fetch_array($result);
		  $_SESSION['INICIO']=true;
		  $_SESSION['DOCUMENTO']=$documento;
	      $_SESSION['NOMBRE']=$registro['NOMBRE'].'  '.$registro['APELLIDO'];
		header('Location: informe.php');	
						  }
		  else{
		   ?>
								 <script>
									alert('NO ESTAS AUTORIZADO PARA INGRESAR A ESTE MÒDULO, POR FAVOR VERIFIQUE SUS DATOS');
								 </script>
								 <?php
		  }
		  }
		  else{
		   ?>
								 <script>
									alert('POR FAVOR DIGITE TODOS LOS CAMPOS');
								 </script>
		  <?php 
		  }
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
		margin-left:83%;
		background-image:url(../IMAGENES/LOGO.jpg);
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
		margin-top:10%;
		z-index:5;
	}
	#Contenido{
		width:69%;
		position:absolute;
		height:600px;
		background-color:#FFF;
		margin-left:15%;
		margin-top:13%;
		z-index:1;
		margin-bottom:5px;
		padding:8px;
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
#Layer13 {	position:absolute;
	width:524px;
	height:129px;
	z-index:11;
	left: 190px;
	top: 9px;
}
#Layer10 {	position:absolute;
	width:449px;
	height:334px;
	z-index:8;
	left: -125px;
	top: 170px;
}
.Estilo13 {font-size: 22px; font-weight: bold; }
.Estilo4 {font-size: x-large;}
#Layer9 {	position:absolute;
	width:268px;
	height:117px;
	z-index:7;
	left: -118px;
	top: 146px;
}
.Estilo14 {font-size: 25px;}
.Estilo15 {font-size: 24px}
#Layer1 {
	position:absolute;
	width:202px;
	height:32px;
	z-index:9;
	left: 351px;
	top: 341px;
}
#Layer2 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	left: 216px;
	top: -21px;
}
#Layer3 {
	position:absolute;
	width:362px;
	height:115px;
	z-index:1;
	left: -148px;
	top: 199px;
}
#Layer4 {
	position:absolute;
	width:348px;
	height:122px;
	z-index:1;
	left: 376px;
	top: 18px;
}
</style>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<script src="jquery-1.11.1.min.js" type="text/javascript">
</script>
<!-- InstanceEndEditable -->
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
	    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="600" height="170">
          <param name="movie" value="bienvenidos.swf" />
          <param name="quality" value="high" />
          <embed src="bienvenidos.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="600" height="170"></embed>
        </object>
	    <div id="Layer3">
	      <div id="Layer4">
	        <div id="layer">
			<form method="post">
              <table width="451" height="127" cellspacing="0">
                
                <tr>
                  <td width="234" height="52"><div align="left"><span class="Estilo13">Documento de Identidad </span></div></td>
                  <td width="265"><input name="Documento" type="text" class="Estilo13" id="label" tabindex="2" placeholder="Documento de Identidad" /></td>
                  <td width="8"><label class="uiButton uiButtonConfirm" id="loginbutton" for="label2"></label></td>
                </tr>
                <tr>
                  <td height="49" class="login_form_label_field">&nbsp;</td>
                  <td class="login_form_label_field"><p>
                    <input name="Enviar" type="submit" class="Estilo4" id="label2" tabindex="4" value="ENTRAR" />
                  </p>                  </td>
                </tr>
              </table>
			  </form>
            </div>
	      </div> <marquee scrolldelay="150" direction="up" crollamount="8" height="200px"> <center>
<img src="../IMAGENES/mano.gif" width="257" height="174"/>
<img src="../IMAGENES/inicio.jpg"/><img src="../IMAGENES/calvin-hobbes.gif" width="240" height="237"/>
                                                  <span class="Estilo13"><img src="../IMAGENES/escuela-3.gif" alt="lui" width="210" height="233"/></span>
            </center> </marquee
	    ></div>
	  </div>
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
