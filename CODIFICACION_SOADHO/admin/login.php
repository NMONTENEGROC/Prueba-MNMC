<?php
		require('../includes/Funciones.php');
		$funciones=Fc::getInstance();
		session_start();
		$imagen='url(../Imagenes/Informacion.gif)';
		$mensaje='';?>
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
#login{
	height:370px;
	width:283px;
	border-radius:15px;
	margin:0;
	position:fixed;
	margin-left:7%;
	margin-top:5%;
	background-position: center center;
    background: radial-gradient(circle, #1e5b15, #9bbb40);
  -webkit-box-shadow: 5px 4px 10px #10310B;
  -moz-box-shadow: 5px 4px 10px #10310B;
  filter: shadow(color=#999999, direction=135, strength=2);
  border:outset 3px #9bbb40;
  z-index:2;
}
.textos{
	border-radius:7px;
	width:83%;
	margin-left:9%;
	font-family:Comic Sans MS;
	color:#000;
	font-size:18px;
}
.labels{
	width:32%;
	margin-left:9%;
	position:absolute;
	margin-top:1%;
}
#logeo{
	margin-top:50%;
}
#pestaña{
	width:300px;
	height:80px;
	background-image:url(../Imagenes/PESTA%C3%91A.gif);
	background-repeat:no-repeat;
	background-size:100% 100%;
    position:absolute;
	z-index:3;
	margin-left:4%;
}
#btn_login{
	width:40%;
	height:20%;
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#9bbb40), to(#1e5b15));
	border-radius:5px;
	margin-top:8%;
	margin-left:53%;
	font-family:Comic Sans MS;
	color:#000;
	font-size:18px;
}
#btn_login:hover{
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
#img_login{
	width:110px;
	height:110px;
	background-image:url(../Imagenes/login1.gif);
	background-size:100% 100%;
	position:absolute;
	z-index:5;
	margin-top:100px;
	margin-left:130px;
}
</style>
<script src="../includes/CODIGOS.js"></script>
<script src="../jquery-1.11.1.min.js"></script>
</head>

<body>
<?php
$funciones->cnx();
if(!isset($_SESSION['PAGINA']) ){
			$_SESSION['PAGINA']='Bloque.Options.php';
}
if(isset($_POST['btn_login'])){
	$Doc=TRIM($_POST['name']);
	$contraseña1=TRIM($_POST['password']);
	$contraseña=md5($contraseña1);
	if($Doc!='' and $contraseña!=''){
		$ejecucion=$funciones->ejecutar("SELECT * FROM PERSONAL WHERE DNI='$Doc' and CONTRASENIA='$contraseña'");
		$registros=mysql_num_rows($ejecucion);
		if($registros==1){
			$rows=mysql_fetch_array($ejecucion);
			$_SESSION['id']=$rows['ID_PERSONAL'];
			$_SESSION['correcto']=true;
			$_SESSION['Nombre_Recepcionista']=$rows['NOMBRE'];
			$_SESSION['Apellido_Recepcionista']=$rows['APELLIDO'];
			$_SESSION['Foto']=$rows['FOTO'];
			$_SESSION['DNI']=$Doc;
			$_SESSION['Clave']=$contraseña1;
			$INGRESO=$funciones->ejecutar("UPDATE PERSONAL SET ESTADO=1 WHERE DNI='$Doc'");
			if($INGRESO){
				?>
                <script>window.opener.location.href='<?php echo $_SESSION['PAGINA']; ?>';Cerrar_Emergente_Registro();</script>                
                <?php
			}
			
			
		}
		else{
			$mensaje='USUARIO NO REGISTRADO!! CONFIRME SUS DATOS';
			$imagen='url(../Imagenes/error.gif)';?>
			<script>$('#mensajes').css('display','block');</script>
            <?php
            }
	}
}
?>
<div id="conten" style="position:absolute; width:300px;">
<div id="pestaña"></div>
<div id="img_login">
</div>
<div id="login">
<form id="logeo" name="logeo" method="post">
	<label id="lb_name" class="labels"><b>Usuario</b></label><br/>
    <input id="txt_name" name="name" required="required" placeholder="Usuario" class="textos" style="height:24px;"/><br/>
    <label id="lb_password"  class="labels"><b>Contraseña</b></label><br/>
    <input name="password" type="password" required="required" class="textos" id="txt_password" placeholder="Password" style="height:24px;"/><br/>
    <div id="Registro"><a href="" onclick="Cerrar_Emergente_Login('Registro.php')">Registrate</a></div>
    <button type="submit" id="btn_login" name="btn_login" value="Login">Login</button>
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
    <div id="mensaje" style="width:70%;height:60%; margin-top:7%;margin-left:23%; font-family:Gabriola;font-size:16px;color:#FFF;">
    	<b><?php echo $mensaje; ?></b>
        <script>$('#mensajes').delay(5500).hide(600);</script>
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