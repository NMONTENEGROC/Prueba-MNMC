<?php
		require('../includes/Funciones.php');
		$funciones=Fc::getInstance();
		date_default_timezone_set('America/Bogota');
		$Fecha_Actual=date('Y-m-d').'T'.date('H:i');;
		$html="1";		
		session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/MASTER.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="logo" --><link href="../Imagenes/SOADHO.ico" type="image/x-icon" rel="shortcut icon" /><!-- InstanceEndEditable -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>MASTER</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<meta name="Robots" content="none"/>
<link href="../ESTILOS.css" rel="stylesheet" type="text/css" />
<script src="../includes/CODIGOS.js"></script>
<script src="../jquery-1.11.1.min.js"></script>
<?php
		if(!isset($_SESSION['correcto']) ){
			$_SESSION['PAGINA']='Informe_Reserva.php';
			?>
            <script type="application/javascript">
				Emergente_Login_Registro('login.php');		
				window.history.back();				
            </script>            
            <?php
		}
		else{
			$portada=$_SESSION['Foto'];
?>
<!-- InstanceEndEditable -->
<style type="text/css">
#cuerpo::-webkit-scrollbar,#conectados::-webkit-scrollbar {
    width: 10px;
    height: 10px;	
}
#foto>img:hover{ 
-webkit-box-shadow: 10px 10px 5px 0px #3D6B21;
 -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
 box-shadow: 10px 10px 5px 0px rgba (0,0,0,0.75);}
#cuerpo::-webkit-scrollbar-thumb{background-color:#000;border-radius:5px; height:50px;}
#cuerpo::-webkit-scrollbar-thumb:hover{
    height: 50px;
    -webkit-box-shadow: inset 1px 1px 1px rgba(0, 0, 0, 0.25);
    background-color: rgba(0, 0, 0, 0.5);	
}
#cuerpo::-moz-scrollbar {
    width: 10px;
    height: 10px;	
}
#cuerpo::-moz-scrollbar-thumb{background-color:#000;border-radius:5px; height:50px;}
#cuerpo::-moz-scrollbar-thumb:hover{
    height: 50px;
    -webkit-box-shadow: inset 1px 1px 1px rgba(0, 0, 0, 0.25);
    background-color: rgba(0, 0, 0, 0.5);	
}
#cuerpo:hover{
	overflow-y:scroll;
}
#formulario{
		font-family:Gabriola;
		text-align:center;
		color:BLACK;
		font-size:20pt;
}
#contenido{
    width:100%;
    height:100%;
   margin:0;
}
#medio{
    width:60%;
    height:40%;
    margin-top:20%;
    margin-left:30%;
    top: 68px;
    left: 16px;
}
#area_trabajo{
    width:78%;
    height:40%;
    margin-top:3%;
    margin-left:20%;
    top: 68px;
    left: 6px; 
}      
body{
		background:url(Imagenes/fondoatras.jpg);
		repeat:no-repeat;
		height:100%;
		width:100%;
		background-attachment:fixed; 
		background-size:100% 100%;
	   	padding:0;		
}
#header{
    height:12%;
    background-color:#003300;
    color:White ;
    -webkit-box-shadow: 8px 8px 16px gray;
    position:absolute;
    width:80%; 
    margin-left:10%;
    margin-top:3%;
    border:2pt solid #ac9666;
    z-index:2;
   padding:0;
}
#titulo{
		width: 50%;
		position: absolute;
		height: 92%;
		left: 32px;
		margin:auto;
		margin-left: 18%;
		background:url(Imagenes/title.jpg);
		background-repeat:no-repeat;
		background-size:100% 100%;
}    
#ladizS{
		position:absolute;
		height:16.6%;
		width:5%;
		background-color:#0B1605;
		transform-style: preserve-3d;
    	transform: perspective(700px) rotateX(-16deg) rotateY(-76deg);
		margin-left:78%;
		margin-top:2.2%;
		border:2pt solid #ac9966;
		box-shadow: 5px 5px 5px #333;
		-webkit-box-shadow: 5px 5px 5px #333;
		-moz-box-shadow: 5px 5px 5px #333;
		-moz-transform-style: preserve-3d;
		-moz-transform: perspective(700px) rotateX(-16deg) rotateY(-76deg);
		-webkit-transform-style: preserve-3d;
		-webkit-transform: perspective(700px) rotateX(-16deg) rotateY(-74deg);
		z-index:3;
}
#ladrS{
		position:absolute;
		height:17%;
		width:5%;
		background-color:#0B1605;
		transform-style: preserve-3d;
    	transform: perspective(700px) rotateX(16deg) rotateY(-76deg);
		margin-left:84%;
		margin-top:2.2%;
		border:2pt solid #ac9966;
		box-shadow: 5px 5px 5px #333;
		-webkit-box-shadow: 5px 5px 5px #333;
		-moz-box-shadow: 5px 5px 5px #333;
		-moz-transform-style: preserve-3d;
		-moz-transform: perspective(700px) rotateX(16deg) rotateY(-76deg);
		-webkit-transform-style: preserve-3d;
		-webkit-transform: perspective(700px) rotateX(16deg) rotateY(-76deg);
		z-index:3;
}	
#ladizH{
		position:absolute;
		height:17%;
		width:5%;
		background-color:#0B1605;
		transform-style: preserve-3d;
    	transform: perspective(700px) rotateX(-16deg) rotateY(-76deg);
		margin-left:10.95%;
		margin-top:2.2%;
		border:2pt solid #ac9966;
		box-shadow: 5px 5px 5px #333;
		-webkit-box-shadow: 5px 5px 5px #333;
		-moz-box-shadow: 5px 5px 5px #333;
		-moz-transform-style: preserve-3d;
		-moz-transform: perspective(700px) rotateX(-16deg) rotateY(-76deg);
		-webkit-transform-style: preserve-3d;
		-webkit-transform: perspective(700px) rotateX(-16deg) rotateY(-76deg);
		z-index:3;
}
#ladrH{
		position:absolute;
		height:17%;
		width:5%;
		background-color:#0B1605;
		transform-style: preserve-3d;
    	transform: perspective(700px) rotateX(16deg) rotateY(-76deg);
		margin-left:17%;
		margin-top:2.2%;
		border:2pt solid #ac9966;
		box-shadow: 5px 5px 5px #333;
		-webkit-box-shadow: 5px 5px 5px #333;
		-moz-box-shadow: 5px 5px 5px #333;
		-moz-transform-style: preserve-3d;
		-moz-transform: perspective(700px) rotateX(16deg) rotateY(-76deg);
		-webkit-transform-style: preserve-3d;
		-webkit-transform: perspective(700px) rotateX(16deg) rotateY(-76deg);
		z-index:3;
}	
#ladiz{
		position:absolute;
		height:12%;
		width:5%;
		background-color:#0B1605;
		transform-style: preserve-3d;
    	transform: perspective(700px) rotateX(-10deg) rotateY(-80deg);
		margin-left:8%;
		margin-top:3.5%;
		border:2pt solid #ac9966;
		box-shadow: 5px 5px 5px #333;
		-webkit-box-shadow: 5px 5px 5px #333;
		-moz-box-shadow: 5px 5px 5px #333;
		-moz-transform-style: preserve-3d;
		-moz-transform: perspective(700px) rotateX(-10deg) rotateY(-80deg);
		-webkit-transform-style: preserve-3d;
		-webkit-transform: perspective(700px) rotateX(-10deg) rotateY(-80deg);
}
#ladr{
		position:absolute;
		height:12%;
		width:5%;
		background-color:#0B1605;
		transform-style: preserve-3d;
    	transform: perspective(700px) rotateX(10deg) rotateY(-80deg);
		margin-left:87%;
		margin-top:3.5%;
		border:2pt solid #ac9966;
		box-shadow: 5px 5px 5px #333;
		-webkit-box-shadow: 5px 5px 5px #333;
		-moz-box-shadow: 5px 5px 5px #333;
		-moz-transform-style: preserve-3d;
		-moz-transform: perspective(700px) rotateX(10deg) rotateY(-80deg);
		-webkit-transform-style: preserve-3d;
		-webkit-transform: perspective(700px) rotateX(10deg) rotateY(-80deg);
}
#presentacion{
		background:url(Imagenes/inicio.jpg);
		background-repeat:no-repeat;
		width:78%;
		height:50%;
		position:absolute;
		background-repeat:no-repeat;
		background-size:100% 100%;
		background-position:center;
		z-index:1;
		margin-left:11%;
		margin-top:2.5%;
		border:3px solid #ac9966;
		padding:0;
}
#logo_Hotel{
		padding:2%;
		width:3%;
		height:9%;
		  background:url(Imagenes/logo.png);
		background-color: #003300;
		border:2px solid #ac9966;
		position:absolute;
		background-repeat:no-repeat;
		background-size:85% 85%;
		margin-top:1.5%;
		margin-left:13%;
		background-position:center;
		z-index:3;
}
#logo_Proyecto{
		padding:2%;
		width:3%;
		height:9%;
		background-image:url(../Imagenes/logo.jpg);
		background-color:#003300;
		border:2px solid #ac9966;
		position:absolute;
		background-repeat:no-repeat;
		background-size:85% 85%;
		margin-top:1.5%;
		margin-left:80%;
		background-position:center;
		z-index:3;
}
#barra_horizontal{
		position:absolute;
		width:78.5%;
		height:7%;
		background-color:#000;
		margin-top:30%;
		margin-left:11%;
		border:2px solid #ac9966;
}
#barra_vertical{
	position: absolute;
	width: 18%;
	height: 270px;
	margin-top: 5%;
	margin-left: 1%;
	border-right: 2px solid #ac9966;
	padding-top: 5%;
	z-index: 4;
	left: 3px;
	top: -30px;
}
#cuerpo{
		position:absolute;
		width:78.5%;
		height:65%;
		margin-top:36%;
		margin-left:11%;
		opacity:0.9;
        filter:  alpha(opacity=50);        
		background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#9bbb40), to(#1e5b15));
		background: -moz-linear-gradient(top, #9bbb40, #1e5b15);
		filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#9bbb40, endColorstr=#1e5b15, GradientType=0);
	overflow-y:scroll;
}
#footer{
		position:absolute;
		width:78.5%;
		height:8%;
		background-color:Black;
		margin-top:72%;
		margin-left:11%;
		margin-bottom:2%;
		font-family:Gabriola;
		text-align:center;
		color:White;
		font-size:26px;
		border:2px solid #6e6636;
		background-image:url(../Imagenes/footer.JPG);
		background-size:100% 100%;
		background-repeat:no-repeat;
}
#lista {
	padding: 0;
	margin-top: 5px;
	position: relative;
	height: 50%;
	z-index: 4;
}
#barra_horizontal > ul ,#barra_vertical > ul{
    list-style-type:none;
    padding:0;
    margin-top:5px;
}

#lista li{
	padding: 4px;
	cursor: pointer;
	text-align: center;
	border: 2px outset #ac9966;
	border-radius: 2px;
	margin-right: 1px;
	background-color: #000;
	height: 100%;
	width: 15.1%;
	position: relative;
	color:#ac9966;
	display: inline-block;	
text-overflow:hidden;
-moz-text-overflow:hidden;
-webkit-text-overflow:hidden;
-o-word-text-overflow:hidden;
}

#barra_horizontal li  a,#barra_vertical li  a{
	color: #ac9966;
	font-family: Times New Roman;
	font-style: oblique;
	text-decoration: none;
	-webkit-transition: background 1s ease;
	-moz-transition: background 1s ease;
	padding: 0;
	width:90%;
	height:100%;
}
#lista li ul li{
	display: block;
	width:15%;
	position:relative;
}
#lista li>a{
	max-width:69%;
	height:100px;
	verflow:hidden;
	float:inherit;
	clear:inherit;
}
#lista li:hover{     
    background-color: #ac9966; 
	color:#000;
	position:relative;
}
#lista li:hover>a{
    color:#000;
}
#lista li ul{
    position:absolute;
    display:none;
	width:16%;
}
#lista li:hover ul{
    display:block;
}
#lista li ul li{
    padding:4px;
    cursor:pointer;
    text-align:center;
    border: 2px outset white;
    width:600%;
    border-radius:2px;
    margin-left:-46px;
    background-color: #000; 
    color: #fff;
}
</style>
<link href="../Imagenes/SOADHO.ico" type="image/x-icon" rel="shortcut icon" />
</head>
<body onload="" >
		
		
<div id="ladiz"></div>
        <div id="ladr"></div>
        <div id="ladizH"></div>
        <div id="ladrH"></div>
        <div id="ladizS"></div>
        <div id="ladrS"></div>
	<div id="header">
		 	<div id="titulo">
 	  		</div>
	</div>
    <div id="logo_Hotel">    	
    </div>
    <div id="logo_Proyecto">    	
    </div>
    <div id="presentacion">
		<script type="text/javascript" src="gallery/js/jquery.js">
        </script><script type="text/javascript" src="gallery/js/swfobject.js"></script>
        <script type="text/javascript" src="gallery/js/flashgallery.js"></script>
        <script type="text/javascript">
            jQuery.flashgallery('gallery/gallery.swf', 'gallery/config.xml', { width: '100%', height: '100%', background: 'transparent' });
        </script>
    </div>    
    <div id="barra_horizontal" style="">
    	 <ul id="lista" name="lista" style="">
                    <a href="../SOADHO.php"><li style="overflow:hidden;float:inherit;inline-box-align:initial;"><i>Inicio</i></li></a>
                    <li style="margin-top:0px;float:top;position:absolute;"> <a href="">Hotel</a>
                        <ul>
                            <a href="Bloque.Options.php"><li>Bloque</li></a>
                            <a href="Habitaciones.Options.php"><li>Habitación</li></a>
                            <a href="Elementos.Options.php"><li>Elementos</li></a>
                            <a href="Productos.Options.php"><li>Productos</li></a>
                            <a href="Inventario.Options.php"><li>Inventario</li></a>
                        </ul>
                    </li>
                    <li style="margin-top:0px;position:absolute;margin-left:16.7%;"> <a href="">Reservas</a> 
                       <ul>
                            <a href="Huesped.Options.php"><li>Huésped</li></a>
                            <a href="Reserva.Options.php"><li>Reserva</li></a>
                        </ul>
                    </li>
                    <li style="margin-top:0px;float:top;position:absolute;margin-left:33.3%;"> <a href="">Informes</a>  
                    	 <ul>
                            <a href="Informe_Ocupacion.php"><li style="">Ocupación</li></a>
                            <a href="Informe_Reserva.php"><li>Reservas</li></a>
                            <a href="Informe_Inventario.php"><li>Inventario</li></a>
                            <a href="Consultas.php"><li>Datos</li></a>
                        </ul>
                    </li>
                   
                    <a href="Mapa_Sitio.php" > <li  style="overflow:hidden;float:inherit;inline-box-align:initial;margin-left:50%;"> <i>Mapa del Sitio</i></li></a>
                    <a href="../../MANUAL%20DEL%20USUARIO.pdf" target="_blank"><li style="overflow:hidden;float:inherit;inline-box-align:initial;"><i>Ayuda<i></li></a>               
                </ul>
                 	
    </div>    
    <div id="cuerpo">
    	<div id="barra_vertical">
          <div id="foto" style="width: 50%; height: 43%; position: absolute; left: 20%; top: 34px; border: 1px solid #000;">
           		<?php 
                	if(!isset($_SESSION['correcto']) ){?>
						<img src="../../usuario/predeterminado.jpg" width="100%" height="100%" />
                <?php
                     }  
                     else{             
                ?>
                	<!-- InstanceBeginEditable name="imagen" -->
                	<div id="session" style="position: absolute; width: 60px; height: 60px; margin-top: -60px; margin-left: -150px; background-image: url(../Imagenes/salir.gif); background-repeat: no-repeat; background-size: 110% 100%; cursor: pointer; left: 172px; top: 372px;" onclick="location.href='Cerrar.php';"></div>
                	<img src="<?php echo '../../usuario/'.$portada;?>" width="100%" height="100%" onclick="Cerrar_Emergente_Login('Modificar_Cuenta.php')" style="cursor:pointer;"/><!-- InstanceEndEditable -->    
                <?php
                     }                
                ?>
           </div>
           <div id="Nombre" style="width: 163px; height: 75px; position: absolute; left: 7px; top: 201px; font-family: Gabriola; font-size: 20px; color: #0E230A;"><b><center>
             <b>
             <?php 
                		if(!isset($_SESSION['correcto']) ){
                         echo 'NO HAS INICIADO SESION!!';?>
   						<!-- InstanceBeginEditable name="NO_INICIADO" --><!-- InstanceEndEditable -->
                       <?php }
                        else{
                        	echo $_SESSION['Nombre_Recepcionista'].' '.$_SESSION['Apellido_Recepcionista'];
                        }
                    ?>
             </b>

           </center></b>
           </div>
   	  </div>
         <div id="area_trabajo">
		 <div id="formulario"><!-- InstanceBeginEditable name="formulario" -->Informe Reservas
		 <div id="Categorias">
              <div id="Guardar" onclick="pdf()"></div>
              <div id="Imprimir" onclick="IMP('Contenido1')"></div>
          </div><!-- InstanceEndEditable --></div>
		 <!-- InstanceBeginEditable name="AREA_TRABAJO" -->

       
<?php
  /*if(isset($_POST['Entrada'])){
	  $Entrada=date('d/m/Y',strtotime($_POST['Entrada_F']));
	  $Salida=date('d/m/Y',strtotime($_POST['Salida_F']));*/
$funciones->cnx();
$ejecucion=$funciones->ejecutar("SELECT RV.ID_RESERVA,RV.TIPO,HB.CODIGO AS NOMBRE,DATE_FORMAT(RV.FECHA_LLEGADA,'%d/%m/%y') AS LLEGADA ,DATE_FORMAT(RV.FECHA_SALIDA,'%d/%m/%y') AS SALIDA,CONCAT(PN.NOMBRE,CONCAT(' ',PN.APELLIDO)) AS HUESPED
FROM RESERVA RV,PERSONA PN,HABITACION HB
WHERE RV.ID_PERSONA=PN.ID_PERSONA AND RV.ID_HABITACION=HB.ID_HABITACION AND RV.TIPO='HABITACION'
UNION
SELECT RV.ID_RESERVA,RV.TIPO,BQ.NOMBRE AS NOMBRE,DATE_FORMAT(RV.FECHA_LLEGADA,'%d/%m/%y') AS LLEGADA ,DATE_FORMAT(RV.FECHA_SALIDA,'%d/%m/%y') AS SALIDA,CONCAT(PN.NOMBRE,CONCAT(' ',PN.APELLIDO)) AS HUESPED
FROM RESERVA RV,PERSONA PN,BLOQUE BQ
WHERE RV.ID_PERSONA=PN.ID_PERSONA AND RV.ID_BLOQUE=BQ.ID_BLOQUE AND RV.TIPO='BLOQUE'
ORDER BY 1");
$registros=mysql_num_rows($ejecucion);
$i=2;
	//SI LA TABLA ESTA VACIA
		if($registros<1){
			$matriz[$i][1]="";
			$matriz[$i][2]="";
			$matriz[$i][3]="";
			$matriz[$i][4]="";
			$matriz[$i][5]="";
			$matriz[$i][6]="";
			$contador=0;
			 }
		else{
			//SI HAY DATOS
			while($datos = mysql_fetch_array($ejecucion)){
				//LLENAS UNA MATRIZ CON LOS REGISTROS
			$matriz[$i][1]=$datos['ID_RESERVA'];
			$matriz[$i][2]=$datos['TIPO'];
			$matriz[$i][3]=$datos['NOMBRE'];
			$matriz[$i][4]=$datos['LLEGADA'];
			$matriz[$i][5]=$datos['SALIDA'];
			$matriz[$i][6]=$datos['HUESPED'];
			$matriz[$i][7]=($i%2);
			$i=$i+1;			
			}
	}
?>		 
         
<form method="post">
	<input type="date" id="fecha1" name="fecha1" style="width:170px;font-family:Tekton Pro;font-size:18px;"  class="caja"/>
    <input type="date" id="fecha2" name="fecha2" style="width:170px;font-family:Tekton Pro;font-size:18px;"  class="caja"/>
    <input type="submit" name="Buscar" value="Buscar" class="OPCIONREGISTRAR_fh" style="margin-left:3px;" />
</form> 
<?php
	if(isset($_POST ['Buscar'])){
		$fecha1=$_POST ['fecha1'];
		$fecha2=$_POST ['fecha2'];
		$fecha1=date('d-m-Y',strtotime($fecha1));
		$fecha2=date('d-m-Y',strtotime($fecha2));
if($fecha2>$fecha1 and $fecha2<=date('d-m-Y')){
$ejecucion1=$funciones->ejecutar("SELECT RV.ID_RESERVA,RV.TIPO,HB.CODIGO AS NOMBRE,DATE_FORMAT(RV.FECHA_LLEGADA,'%d-%m-%y') AS LLEGADA ,DATE_FORMAT(RV.FECHA_SALIDA,'%d-%m-%y') AS SALIDA,CONCAT(PN.NOMBRE,CONCAT(' ',PN.APELLIDO)) AS HUESPED
FROM RESERVA RV,PERSONA PN,HABITACION HB
WHERE RV.ID_PERSONA=PN.ID_PERSONA AND RV.ID_HABITACION=HB.ID_HABITACION AND RV.TIPO='HABITACION'
HAVING LLEGADA BETWEEN '$fecha1' AND '$fecha2'
UNION
SELECT RV.ID_RESERVA,RV.TIPO,BQ.NOMBRE AS NOMBRE,DATE_FORMAT(RV.FECHA_LLEGADA,'%d-%m-%y') AS LLEGADA ,DATE_FORMAT(RV.FECHA_LLEGADA,'%d-%m-%y') AS SALIDA,CONCAT(PN.NOMBRE,CONCAT(' ',PN.APELLIDO)) AS HUESPED
FROM RESERVA RV,PERSONA PN,BLOQUE BQ
WHERE RV.ID_PERSONA=PN.ID_PERSONA AND RV.ID_BLOQUE=BQ.ID_BLOQUE AND RV.TIPO='BLOQUE'
HAVING LLEGADA BETWEEN '$fecha1' AND '$fecha2'
ORDER BY 1");
$registros=mysql_num_rows($ejecucion1);
$i=2;
	//SI LA TABLA ESTA VACIA
		if($registros<1){
			$matriz[$i][1]="";
			$matriz[$i][2]="";
			$matriz[$i][3]="";
			$matriz[$i][4]="";
			$matriz[$i][5]="";
			$matriz[$i][6]="";
			$contador=0;
			 }
		else{
			//SI HAY DATOS
			while($datos = mysql_fetch_array($ejecucion1)){
				//LLENAS UNA MATRIZ CON LOS REGISTROS
			$matriz[$i][1]=$datos['ID_RESERVA'];
			$matriz[$i][2]=$datos['TIPO'];
			$matriz[$i][3]=$datos['NOMBRE'];
			$matriz[$i][4]=$datos['LLEGADA'];
			$matriz[$i][5]=$datos['SALIDA'];
			$matriz[$i][6]=$datos['HUESPED'];
			$matriz[$i][7]=($i%2);
			$i=$i+1;			
			}
	}}else{?> <script>alert('La fecha limite debe ser superior a la fecha de inicio y no superior a la fecha actual')</script> <?php }
		
		}
?>        
<div id="Contenido1" style=" width:820px;height:100%;position:absolute;margin:0;margin-left:0%;">
    <div id="Area_Impresion" style="width:720px;background-color:#FFF;margin:0;margin-left:2.5%;margin-top:2.5%;border:2px #000000 solid;border-radius:15px;">
        <div id="Header" style="height:200px;background-color:#FFF;color:White ;position:absolute;width:700px;margin-left:1%;margin-top:1%; z-index:2;padding:0;">
                    <div id="Titulo" style="background-color:# FFF;background-image:url(../Imagenes/title_factura.jpg);width:600px;height:30px;position:absolute;margin-left:10%;background-size:100% 100%;">
                    </div>
                    <div id="Datos_Hotel" style="background-repeat:no-repeat;background-color:#FFF;background-image:url(../Imagenes/informacion_hotel.jpg);width:85%;height:150px;position:absolute;margin-left:10%;margin-top:60px;background-size:100% 80%;z-index:2;">
                    </div>
        </div>
            <div id="Logo_Hotel" style="padding:2%;width:5%;height:90px;background:url(../Imagenes/logo.png);background-color: #FFF;position:absolute;background-repeat:no-repeat;background-size:100% 80%;margin-top:1%;margin-left:2%;background-position:center;z-index:3;">    	
            </div>            
            <div id="Logo_Proyecto" style="padding: 2%; width: 5%; height:90px; background: url(../Imagenes/logo.jpg); background-color: #FFF; position: absolute; background-repeat: no-repeat; background-size: 100% 100%; margin-top: 1%; margin-left: 665px; background-position: center; z-index: 3; left: -23px;">  	
            </div>                   
        <div id="Datos_Factura" style="background-color: #FFF; width: 713px; height: 37px; position: absolute; margin-top: 160px; z-index: 1; z-index: 5;">        
                        
          <div id="Datos_Recepcionista" style="background-color: #FFF; width: 463px; height: 50px; position: absolute; margin: 0.5%; margin-top: 90px; z-index: 2; border: #003300 dashed 1px; border-radius: 15px; left: 5px; top: -84px;">              
            <div id="I_Recepcionista" style="background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#9bbb40), to(#1e5b15)); background-image: url(../Imagenes/I_Recepcionista.JPG); background-repeat: no-repeat; background-size: 100% 100%; width: 30%; height: 23px; position: absolute; margin: 0; z-index: 3; border: #003300 dashed 1px; border-bottom-right-radius: 7px; border-top-left-radius: 15px; font-family: Gabriola; text-align: left; color: #000; font-size: 26px; padding-left: 2%;"></div>  
            <input type="text" name="Nombre_Recepcionista" readonly="readonly" style="width:60%; height:35%; margin-left:35%; border-radius:10px;border:none;" placeholder="Nombre" class="Texto" value="<?php echo $_SESSION['Nombre_Recepcionista'].' '.$_SESSION['Apellido_Recepcionista']; ?>"/>
            <input name="Documento_Recepcionista" type="text" placeholder="Documento" style="width:30%; height:35%; margin-left:35%; border-radius:10px;border:none;" readonly="readonly" class="Texto" value="<?php echo $_SESSION['DNI'];?>"/>  
            </div>
                      
          <div id="Fecha_Factura" style="background-color: #FFF; width: 30%; height: 50px; position: absolute; margin: 40px; margin-left: 440px; z-index: 3; border: #003300 dashed 1px; border-radius: 15px; margin-top: 90px; left: 53px; top: -84px;"> 
            <div id="I_Fecha" style="background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#9bbb40), to(#1e5b15)); background-image: url(../Imagenes/I_Fecha.JPG); background-repeat: no-repeat; background-size: 100% 100%; width: 50%; height: 20px; position: absolute; margin: 0; z-index: 3; border: #003300 dashed 1px; border-bottom-right-radius: 7px; border-top-left-radius: 15px; font-family: Gabriola; text-align: left; color: #000; font-size: 26px; padding-left: 2%; top: 1px;"></div>            
            <input type="text" name="Fecha_Factura" readonly="readonly" style="width:60%; height:50%; margin-left:30%; border-radius:10px; margin-top:11%; border:none; text-align:right;" value="<?php echo $Fecha_Actual;?>" class="Texto"/>       
            </div>            
        </div>
        <div id="Items" style="background-color:#FFF;width:98.3%;margin:0.5%;margin-top:250px;z-index:5;border:#003300 dashed 1px;border-radius:15px;">
        	<table width="98%" style="padding:1%;margin-left:1.3%;font-family:Lucida Sans Unicode;color:#000;font-size:13px;">
            	<tr style="width:100%;border:1px solid #F00;background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#9bbb40), to(#1e5b15));">
                	<td style="border-top-left-radius:10px;padding-left:2%;"><b><center>CÓDIGO</center></b></td>
                    <td style="padding-left:2%;"><b><center>TIPO</center></b></td>
                    <td><b><center>NOMBRE</center></b></td>
                    <td style=""><b><center>LLEGADA</center></b></td>
                    <td style=""><b><center>SALIDA</center></b></td>
                    <td style="border-top-right-radius:10px;"><b><center>HUÉSPED</center></b></td>
                </tr>       
        <?php  for($j=2;$j<=$registros+1;$j++){ ?> 
        
        		<tr style="width:100%;border:1px solid #F00;padding-left:2%;">
                	<td class="<?php echo $matriz[$j][7]; ?>" style="padding-left:2%;border:#003300 dashed 1px"><a href="Factura_Consulta.php?reserva=<?php echo $matriz[$j][1]; ?>" style="color:#000;"><?php echo $matriz[$j][1]; ?></a></td>
                    <td class="<?php echo $matriz[$j][7]; ?>" style="padding-left:2%;border:#003300 dashed 1px"><?php echo $matriz[$j][2]; ?></td>
                    <td class="<?php echo $matriz[$j][7]; ?>" style="padding-left:2%;border:#003300 dashed 1px"><?php echo $matriz[$j][3]; ?></td>
                    <td class="<?php echo $matriz[$j][7]; ?>" style="padding-left:2%;border:#003300 dashed 1px"><?php echo $matriz[$j][4]; ?></td>
                    <td class="<?php echo $matriz[$j][7]; ?>" style="padding-left:2%;border:#003300 dashed 1px"><?php echo $matriz[$j][5]; ?></td>
                    <td class="<?php echo $matriz[$j][7]; ?>" style="padding-left:2%;border:#003300 dashed 1px"><?php echo $matriz[$j][6]; ?></td>
                </tr>
           
         <?php } ?>
         <tr style="width:100%;border:1px solid #F00;background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#9bbb40), to(#1e5b15));height:3%;">
                	<td style="border-bottom-left-radius:10px;padding-left:2%;"><br/></td>
                    <td style="padding-left:2%;"> </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style="border-bottom-right-radius:10px;"></td>
                </tr> 
          </table>
          <script> $('.1').css('background-color','#E1FFE3');</script>
        </div>

         </div></div>
         <?php
		//}
		
		}
		 ?>
         
		 <!-- InstanceEndEditable -->          
        </div>
    </div>
    <div id="footer">
    	
    </div>
</body>
<!-- InstanceEnd --></html>
