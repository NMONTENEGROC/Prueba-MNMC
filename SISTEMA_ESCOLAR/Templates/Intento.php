<?php
include ('../INCLUDES/CONEXION.php');
$connection=mysql_connect($db_host,$db_username,$db_password);
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

		

      <?php
if(isset($_POST['enviar'])){
	$nombre=$_POST['nombre'];
	$password=$_POST['password'];
	
		if($nombre<>"" and $password<>""){
		if($nombre=='Sistemas' and  $password=='Colegio'){
			$_SESSION['ADMINISTRADOR']=TRUE;
			header('Location: Registro.php');
		}
		else{
	 ?>
							   <script>
									alert('EL USUARIO NO ESTA AUTORIZADO COMO ADMINISTRADOR!! VERIFIQUE SUS DATOS');
								 </script>
							   <?php
			}
			}
	else{
	 ?>
							   <script>
									alert('INGRESE LOS DATOS REQUERIDOS');
								 </script>
							   <?php
			}
	
}
?>


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

<style>
#Contenido{
		width:69%;
		position:absolute;
		height:100px;
		background-color:#FFF;
		margin-left:15%;
		margin-top:13%;
		z-index:1;
		margin-bottom:5px;
		padding:8px;
	}
.Estilo1 {font-size: 22px}
</style>
</head>

<body>
	<div id="Cuerpo">
	<div id="Header">
    	<div id="Logo_Colegio">        </div>
        <div id="Nombre">        </div>
        <div id="Logo_Proyecto">
		  <object classid="clsid:166B1BCA-3F9C-11CF-8075-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/director/sw.cab#version=8,5,0,0" width="110" height="120">
              <param name="src" value="../IMAGENES/LOGO1.swf" />
              <embed src="../IMAGENES/LOGO1.swf" pluginspage="http://www.macromedia.com/shockwave/download/" width="110" height="120"></embed>
		  </object>
        </div>
    </div>
    <div id="Menu">
		
   <center>
      <table width="899" height="35" border="0"  bordercolor="#000000" cellpadding="0" cellspacing="0" style="border-radius:5px;padding:3px;">
            <tr>
              <td width="122" class="menu_b" style="border:1px solid #000033;"><div class="menu_b" align="center" style="text-align:center;text-decoration:none;"><a  class="menu_b" href="inicio.php" style="text-decoration:none; cursor:pointer;">INICIO</a></div></td>
            
			
			
			 <td width="122" class="menu_b" style="border:1px solid #000033;"><div class="menu_b" align="center" style="text-align:center;text-decoration:none;"><a  class="menu_b" href="inicio.php" style="text-decoration:none; cursor:pointer;">INICIO</a></div></td>
            
			
			
			 <td width="122" class="menu_b" style="border:1px solid #000033;"><div class="menu_b" align="center" style="text-align:center;text-decoration:none;"><a  class="menu_b" href="inicio.php" style="text-decoration:none; cursor:pointer;">INICIO</a></div></td>
           
		   <td width="122" class="menu_b" style="border:1px solid #000033;"><div class="menu_b" align="center" style="text-align:center;text-decoration:none;"><a   href="inicio.php" style="text-decoration:none; cursor:pointer;">INICIO</a></div></td>
           
            </tr>
      </table>
    </center>
    </div>
    <div id="Contenido">


      <form  method="post" >
     
            <input name="nombre" type="text" placeholder="Nombre del Administrador" />
        
            <input name="password" type="password" class="Estilo13" id="password" placeholder="Contraseña" />
         
            <input name="enviar" type="submit" class="Estilo2" value="Entrar" />
                                 </form>
    </div>
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
</html>
