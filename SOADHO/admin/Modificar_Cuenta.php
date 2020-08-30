<?php	require('../includes/Funciones.php');
		$funciones=Fc::getInstance();
		date_default_timezone_set('America/Bogota');
		$Fecha_Actual=date('d/m/Y');
		$html="1";
		session_start();
		$imagen='url(../Imagenes/Informacion.gif)';
		$mensaje='';
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="../Imagenes/SOADHO.ico" type="image/x-icon" rel="shortcut icon" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SOADHO</title>
<style type="text/css">
body{
	background-image:url(../Imagenes/fondoatras.jpg);
	repeat:no-repeat;
	height:100%;
	width:100%;
	background-attachment:fixed; 
	background-size:100% 100%;
	padding:0;	
	margin:0;
	font-family:Gabriola;
	color:#000;
	font-size:24px;
}
#registro{
	height:82%;
	width:85%;
	border-radius:15px;
	margin:0;
	position:fixed;
	margin-left:7%;
	margin-top:8%;
	background-position: center center;
    background: radial-gradient(circle, #1e5b15, #9bbb40);
  -webkit-box-shadow: 5px 4px 10px #10310B;
  -moz-box-shadow: 5px 4px 10px #10310B;
  filter: shadow(color=#999999, direction=135, strength=2);
  border:outset 3px #9bbb40;
  z-index:2;
}
.text{
	border-radius:4px;
	width:89%;
	font-family:Comic Sans MS;
	color:#000;
	font-size:18px;
}
#label1{
	width:22%;	
	position:absolute;
	text-align:right;
	margin-top:-5%;
}
#form1{
	margin-top:30%;
	margin-left:9%;
}
#pestaña{
	width:91%;
	height:20%;
	background-image:url(../Imagenes/PESTA%C3%91A_REGISTRO.gif);
	background-repeat:no-repeat;
	background-size:100% 100%;
    position:absolute;
	z-index:3;
	margin-left:3.5%;
	margin-top:5%;
}
.btn{
	width:150px;
	height:35px;
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#9bbb40), to(#1e5b15));
	border-radius:5px;
	margin-top:12%;
	font-family:Comic Sans MS;
	color:#000;
	font-size:18px;
}
.btn:hover{
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#9bbb42), to(#1e5b18));
	font-size:20px;
	border:#14450C 1px inset;
	cursor: pointer;
}
#Registro{
	margin-top:5%;
	margin-left:12%;
	position:absolute;
	width:10%;
	}
#btn_registrar{
	margin-left:20%;
}
.custom-input-file {
    overflow: hidden;
    position: absolute;
    cursor: pointer;
	background-image:url(../../usuario/predeterminado.jpg);
	background-repeat:no-repeat;
	background-size:100% 100%;
	width:40px;
	height:50px;
	margin-top:-19px;
}
.custom-input-file .input-file {
    margin: 0;
    padding: 0;
    outline: 0;
    font-size: 10000px;
    border: 10000px solid transparent;
    opacity: 0;
    filter: alpha(opacity=0);
    right: -1000px;
    top: -1000px;
    cursor: pointer;
	width:60px;
	height:60px;
	position:absolute;
}
</style>
<script src="../includes/CODIGOS.js"></script>
<script src="../jquery-1.11.1.min.js"></script>
</head>

<body>
  <?php
$funciones->cnx();
	$ID_PERSONAL=$_SESSION['id'];
		if(isset($_POST['eliminar'])){	
			$registro=$funciones->ejecutar("DELETE FROM PERSONAL WHERE ID_PERSONAL='$ID_PERSONAL'");
			?>
            <script type="text/javascript">window.opener.location.href='Cerrar.php';window.close()</script>
            <?php								
		}
		if(isset($_POST['modificar'])){	
			    $NOMBRE=TRIM($_POST['Nombre']);
				$APELLIDO=TRIM($_POST['Apellido']);
				$CONTRASENIA1=TRIM($_POST['Contraseña_1']);
				$CONTRA=md5($CONTRASENIA1);
				$DOCUMENTO=TRIM($_POST['DNI']);
				echo 'jjuy'.$_FILES['imagen']['tmp_name'].'  '.$_SESSION['Foto'];
				if($_FILES['imagen']['tmp_name']<>''){
				ini_set('error_reporting',E_ALL^E_NOTICE);
					$archivotam=$_FILES['imagen']['size'];
					$archivo=$_FILES['imagen']['type'];
					if($archivo=="image/jpeg"||$archivo=="image/png"||$archivo=="image/gif"||$archivo=="image/jpg"){							
						if(move_uploaded_file($_FILES['imagen']['tmp_name'], '../../usuario/' . $_FILES['imagen']['name'])){ ?>
                        
					 <?php
                     $_SESSION['Foto']= $_FILES['imagen']['name'];
                		}else{ ?>
                             <?php
                    $_SESSION['Foto']='predeterminado.jpg';
                }
                
				}else{
					$_SESSION['Foto']='predeterminado.jpg';
							 ?>            
									 <?php
				}
			}
			$imagen=$_SESSION['Foto'];	
				
				
					echo 2;			
				if($NOMBRE!='' and $APELLIDO!='' and $CONTRASENIA1!='' and $DOCUMENTO!=''){

						$CONTRASENIA=md5($CONTRASENIA1);
						$CANTIDAD=0;
							$CANTIDAD=mysql_num_rows($funciones->ejecutar("select * from PERSONAL WHERE DNI='$DOCUMENTO' AND ID_PERSONAL<>'$ID_PERSONAL'"));
								if($CANTIDAD==0){
								$registro=$funciones->ejecutar("UPDATE PERSONAL SET  NOMBRE=UPPER('$NOMBRE'),APELLIDO=UPPER('$APELLIDO'),DNI=('$DOCUMENTO'),CONTRASENIA=('$CONTRA'),FOTO=('$imagen') WHERE ID_PERSONAL='$ID_PERSONAL'");
								
								if($registro){
									$_SESSION['Nombre_Recepcionista']=strtoupper($NOMBRE);
									$_SESSION['Apellido_Recepcionista']=strtoupper($APELLIDO);
									$_SESSION['Foto']=$imagen;
									$_SESSION['DNI']=$DOCUMENTO;
									$_SESSION['Clave']=$CONTRASENIA1;
									
									?><script>window.opener.location.reload();window.close()</script>								
								 <?php
                                } else{$mensaje='UPSSS!!! HA OCURRIDO UN ERROR';
						$imagen='url(../Imagenes/error.gif)';?>
						<script>$('#mensajes').css('display','block');</script><?php }
								
							}
							
							
							else{
								$mensaje='YA EXISTE UN REGISTRO CON ESOS DATOS';
								$imagen='url(../Imagenes/error.gif)';?>
								<script>$('#mensajes').css('display','block');</script>
							<?php }

				}
				else{$mensaje='RELLENA LOS CAMPOS NECESARIOS';
								$imagen='url(../Imagenes/error.gif)';?>
								<script>$('#mensajes').css('display','block');</script>
					<?php }

		}
			
			?>
<div id="pestaña"></div>
<?php

$_FILES['imagen']['tmp_name']=$_SESSION['Foto'];
	$CLAVE=$_SESSION['Clave'];
	$ejecucion=$funciones->ejecutar("SELECT * FROM PERSONAL WHERE ID_PERSONAL='$ID_PERSONAL'");
	$datos = mysql_fetch_array($ejecucion);
?>
<div id="registro">
         <form method="post" name="frm_registro" id="form1"  enctype="multipart/form-data">
         <table >
             <tr>
                 <td width="133">
                 	<label name="Lb_Nombre" id="label1"><b>Nombre</b></label>                    
                 </td>
                 <td width="204">
                 	<input name="Nombre" type="text" id="caja" class="text" required="required" placeholder="Nombre" value="<?php echo $datos['NOMBRE'];?>" />
                 </td>
             </tr>
             <tr>
                 <td>
                 	<label name="Lb_Apellido" id="label1"><b>Apellido</b></label>                    
                 </td>
                 <td>
                 	<input name="Apellido" type="text" id="caja" class="text" required="required" placeholder="Apellido" value="<?php echo $datos['APELLIDO'];?>" />
                 </td>
             </tr>
              <tr>
                 <td>
                 	<label name="Lb_DNI" id="label1"><b>DNI</b></label>                    
                 </td>
                 <td>
                 	<input type="text" name="DNI" id="caja"  class="text" required="required" placeholder="Documento"  value="<?php echo $datos['DNI'];?>"/>
                 </td>
             </tr>
              <tr style="height:60px;">
             	<td><label name="Lb_Imagen" id="label1"><b>Im&aacute;gen</b></label> </td>
                <td>
                 <div class="custom-input-file"><input type="file" name="imagen" size="1" class="input-file"  value="<?php echo $datos['FOTO'];?>
                 "/>
                 </div>
                 </td>
             </tr>
             
             <tr>
                 <td>
                 	<label name="Lb_Contraseña" id="label1"><b>Contraseña</b></label>                    
                 </td>
                 <td>
                 	<input type="password" name="Contraseña_1" id="caja" class="text" required="required" placeholder="Contraseña"  value="<?php echo $CLAVE;?>"/>
                 </td>
             </tr>
             <tr>
                 <td>
                 	<button type="submit" name="modificar" class="btn" id="btn_modificar" onclick="">MODIFICAR</button>                   
                 </td>
                 <td>
                 	<button type="submit" name="eliminar" class="btn" id="btn_eliminar" style="float:right">ELIMINAR</button>
                 </td>
             </tr>
         </table>
         </form>
		 
<?php
if($mensaje<>''){
?>

<div id="mensajes" style="width:90%;height:20%; position:fixed; z-index:100;background-color:#C09; margin-left:-3%; margin-top:-52%;border-top-left-radius:15px; border-top-right-radius:15px;background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#000), to(#1e5b15));
		background: -moz-linear-gradient(top, #000, #1e5b15);filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#000, endColorstr=#1e5b15, GradientType=0);border:#000 3px outset;">
    <div id="informacion" style="width:88%;height:4%; position:fixed; z-index:101;background-color:#000;margin-top:0;border-top-left-radius:10px; border-top-right-radius:10px; font:Gabriola; size:12px;color:#CCC;">
    </div>
    <div id="imagen" style="margin-left:5%;margin-top:10%;position:absolute;width:15%;height:50%;background-image:<?php echo $imagen ?>; background-repeat:no-repeat;background-size:100% 100%;z-index:102;">
    </div>
    <div id="mensaje" style="width:76%;height:60%; margin-top:7%;margin-left:23%; font-family:Gabriola;font-size:16px;color:#FFF;">
    	<b><?php echo $mensaje; ?></b>
    </div>
      <div id="cerrar" style="margin-left:92%;width:8%;height:19%; background-color:#FFF;position:absolute;margin-top:-21%;z-index:105;border-top-right-radius:10px;background-image:url(../Imagenes/cerrar.gif);background-size:90% 50%; background-repeat:no-repeat;background-position:center;float:right;cursor:pointer;margin-right:0;text-align:center;font-size:12px;" onclick="$('#mensajes').css('display','none');"><b>X</b>
      </div>
</div>
<?php
}
?>
<script>ocultar_codigos();</script>
</div>
		 
</div>
</body>
</html>