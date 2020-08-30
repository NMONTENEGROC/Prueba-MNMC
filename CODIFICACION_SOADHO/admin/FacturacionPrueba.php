<?php	require('../includes/Funciones.php');
		$funciones=Fc::getInstance();
		date_default_timezone_set('America/Bogota');
		$Fecha_Actual=date('d/m/Y');
		$html="1";
		$registro=1;
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
			$_SESSION['PAGINA']='Bloque.Options.php';
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
<?php

?>
<style>
.Texto{
	font-family:"Lucida Sans Unicode";
	color:#000;
	font-size:13px;
}
#Guardar,#Imprimir{
	width:30%;
	height:100%;
	position:absolute;
	border-radius:8px;
}
#Imprimir{
	margin-left:33%;
}
#Guardar{
	background-image:url(../Imagenes/guardar.gif);
	background-repeat:no-repeat;
	background-size:100% 90%;
}
#Imprimir{
	background-image:url(../Imagenes/imprimir.gif);
	background-repeat:no-repeat;
	background-size:100% 90%;
}
#Guardar:hover{background-size:110% 100%;cursor:pointer;}
#Imprimir:hover{background-size:110% 100%;cursor:pointer;}

</style>
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
                	<!-- InstanceBeginEditable name="imagen" --><img src="<?php echo '../../usuario/'.$portada;?>" width="100%" height="100%"onclick="Cerrar_Emergente_Login('Modificar_Cuenta.php')" style="cursor:pointer;" /><!-- InstanceEndEditable -->    
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
		 <div id="formulario"><!-- InstanceBeginEditable name="formulario" -->
         <div id="session" style="position: absolute; width: 60px; height: 60px; margin-top: 4px; margin-left: -150px; background-image: url(../Imagenes/salir.gif); background-repeat: no-repeat; background-size: 110% 100%; cursor: pointer; left: 224px; top: 367px;" onclick="location.href='Cerrar.php';"></div>
         
            <div id="Categorias" style="position: absolute; width: 163px; height: 53px; margin-top: -13%; margin-left: 65%; left: 185px;">
              <div id="Guardar" onclick="pdf();"></div>
              <div id="Imprimir" onclick="IMP2('Contenido1')"></div>
            </div>
		 <!-- InstanceEndEditable --></div>
		 <!-- InstanceBeginEditable name="AREA_TRABAJO" -->
<?php
$funciones->cnx();

if(isset($_POST['factura_g'])){
	
	
}


$CANTIDAD=mysql_num_rows($funciones->ejecutar("select * from FACTURA"));
	//CONSULTA DE TODOS LOS REGISTROS DE LA TABLA RESERVA
		$ejecucion=$funciones->ejecutar("SELECT CAST(ID_FACTURA AS SIGNED) AS ID_FACTURA FROM FACTURA GROUP BY  ID_FACTURA   ORDER BY ID_FACTURA ASC ");
		$registros=mysql_num_rows($ejecucion);
		$i=1;
	//SI LA TABLA ESTA VACIA
		if($registros<1){
			$matriz[$i][1]="";			
			 }
			 else{
		//SI HAY DATOS
			while($datos = mysql_fetch_array($ejecucion)){
				//LLENAS UNA MATRIZ CON LOS REGISTROS
				
				$matriz[$i][0]=$datos['ID_FACTURA'];
				$i=$i+1;			
			}
}
if($CANTIDAD>0){
							$Id_Defecto=$matriz[$CANTIDAD][0];
							$Id_Defecto=$Id_Defecto+1;
							$Id_Defecto = str_pad($Id_Defecto, 8, '0', STR_PAD_LEFT);
						}
						else{
							$Id_Defecto='00000001';
						}					
$ID_HUESPED=$_SESSION['ID_HUESPED'];
$ejecucion=$funciones->ejecutar("select * from PERSONA where ID_PERSONA='$ID_HUESPED'");
$datos = mysql_fetch_array($ejecucion);
$Nombre=$datos['NOMBRE'].' '.$datos['APELLIDO'];
$Documento=$datos['DNI'];
$Telefono=$datos['TELEFONO'];
$Habitacion=$_SESSION['ID_HABITACION'];
$Bloque=$_SESSION['ID_BLOQUE'];
if($Habitacion!=""){
$ejecucion=$funciones->ejecutar("select * from HABITACION where ID_HABITACION='$Habitacion'");
$datos = mysql_fetch_array($ejecucion);
$Descripcion=$datos['DESCRIPCION'];
}
if($Bloque!=""){
$ejecucion=$funciones->ejecutar("select * from BLOQUE where ID_BLOQUE='$Bloque'");
$datos = mysql_fetch_array($ejecucion);
$Descripcion='SE RESERVO EL BLOQUE '.$datos['CODIGO'].' '.$datos['NOMBRE'];
}
$DIFERENCIA_S=0;
$DIFERENCIA_MESES=0;

$F_LLEGADA=$_SESSION['LLEGADA'];
$F_SALIDA=$_SESSION['SALIDA'];
$AÑO_LLEGADA=date( 'Y' , strtotime($F_LLEGADA));
$MES_LLEGADA=date( 'm' , strtotime($F_LLEGADA));
$DIA_LLEGADA=date( 'd' , strtotime($F_LLEGADA));

$AÑO_SALIDA=date( 'Y' , strtotime($F_SALIDA));
$MES_SALIDA=date( 'm' ,strtotime($F_SALIDA));
$DIA_SALIDA=date( 'd' , strtotime($F_SALIDA));

$DIFERENCIA_ANNUAL=$AÑO_LLEGADA-$AÑO_SALIDA;
$DIFERENCIA_DIAS=$DIA_SALIDA-$DIA_LLEGADA;
$DIFERENCIA_MESES=$MES_SALIDA-$MES_LLEGADA;

$VALOR_DIARIO=0;
$VALOR_MENSUAL=0;
$VALOR_ANUAL=0;
if($_SESSION['TIPO']=="BLOQUE"){
$ejecucion=$funciones->ejecutar("SELECT HB.ID_HABITACION FROM BLOQUE BQ, HABITACION HB WHERE BQ.ID_BLOQUE=HB.ID_BLOQUE AND BQ.ID_BLOQUE='$Bloque'");
	while($datos = mysql_fetch_array($ejecucion)){
		$Id_Habitacion=$datos['ID_HABITACION'];
		$HABITACIONES=$funciones->ejecutar("SELECT TF_D.Valor AS DIARIO,TF_M.Valor AS MENSUAL,TF_A.Valor AS ANUAL,HB.ID_HABITACION
FROM TARIFA TF_A,TARIFA TF_M,TARIFA TF_D,TARIFA_HABITACION TH_A,TARIFA_HABITACION TH_M,TARIFA_HABITACION TH_D,HABITACION HB
WHERE TF_A.ID_TARIFA=TH_A.ID_TARIFA AND TH_A.ID_HABITACION=HB.ID_HABITACION AND
      TF_M.ID_TARIFA=TH_M.ID_TARIFA AND TH_M.ID_HABITACION=HB.ID_HABITACION AND
      TF_D.ID_TARIFA=TH_D.ID_TARIFA AND TH_D.ID_HABITACION=HB.ID_HABITACION AND 
      TF_A.TIPO='ANUAL' AND TF_M.TIPO='MENSUAL' AND TF_D.TIPO='DIARIA' AND HB.ID_HABITACION='$Id_Habitacion'");
	  while($REGISTROS = mysql_fetch_array($HABITACIONES)){
		  $VALOR_DIARIO=$REGISTROS['DIARIO']+$VALOR_DIARIO;
		  $VALOR_MENSUAL=$REGISTROS['MENSUAL']+$VALOR_MENSUAL;
		  $VALOR_ANUAL=$REGISTROS['ANUAL']+$VALOR_ANUAL;
	  }
	}
}
if($_SESSION['TIPO']=="HABITACION"){
	$Id_Habitacion=$Habitacion;
	$HABITACIONES=$funciones->ejecutar("SELECT TF_D.Valor AS DIARIO,TF_M.Valor AS MENSUAL,TF_A.Valor AS ANUAL,HB.ID_HABITACION
FROM TARIFA TF_A,TARIFA TF_M,TARIFA TF_D,TARIFA_HABITACION TH_A,TARIFA_HABITACION TH_M,TARIFA_HABITACION TH_D,HABITACION HB
WHERE TF_A.ID_TARIFA=TH_A.ID_TARIFA AND TH_A.ID_HABITACION=HB.ID_HABITACION AND
      TF_M.ID_TARIFA=TH_M.ID_TARIFA AND TH_M.ID_HABITACION=HB.ID_HABITACION AND
      TF_D.ID_TARIFA=TH_D.ID_TARIFA AND TH_D.ID_HABITACION=HB.ID_HABITACION AND 
      TF_A.TIPO='ANUAL' AND TF_M.TIPO='MENSUAL' AND TF_D.TIPO='DIARIA' AND HB.ID_HABITACION='$Id_Habitacion'");
}
$REGISTROS = mysql_fetch_array($HABITACIONES);
 $VALOR_DIARIO=$REGISTROS['DIARIO']+$VALOR_DIARIO;
 $VALOR_MENSUAL=$REGISTROS['MENSUAL']+$VALOR_MENSUAL;
 $VALOR_ANUAL=$REGISTROS['ANUAL']+$VALOR_ANUAL;
 
 $VALOR_HABITACION_MENSUAL=0;
 $VALOR_HABITACION_DIARIA=$VALOR_DIARIO*$DIFERENCIA_DIAS;
 if($DIFERENCIA_MESES<>0){
	 $VALOR_HABITACION_MENSUAL=$VALOR_MENSUAL*$DIFERENCIA_MESES;
 }
 $VALOR_HABITACION_TOTAL=$VALOR_HABITACION_MENSUAL+$VALOR_HABITACION_DIARIA;
?>
<form id="fac" method="post">
<input type="button"  class="OPCIONREGISTRAR_F" name="factura_g"  value="Guardar" onclick="factura_detalle(<?php echo (int)$Id_Defecto?>)"/>
  <div id="Contenido1" style=" width:820px;height:100%;position:absolute;margin:0;margin-left:0%;">
  <style>
.total{text-align:right;padding-right:1%;}
.celda{padding:1%;}
/*.texto{border:none;}*/
</style>
  
  <div id="Area_Impresion" style="width:720px;background-color:#FFF;margin:0;margin-left:2.5%;margin-top:2.5%;border:2px #000000 solid;border-radius:15px;">
    <div id="Header" style="height:18%;background-color:#FFF;color:White ;position:absolute;width:700px;margin-left:1%;margin-top:1%; z-index:2;padding:0;">
                    <div id="Titulo" style="background-color:# FFF;background-image:url(../Imagenes/title_factura.jpg);width:600px;height:34%;position:absolute;margin-left:10%;background-size:100% 100%;">
                    </div>
                    <div id="Datos_Hotel" style="background-repeat:no-repeat;background-color:#FFF;background-image:url(../Imagenes/informacion_hotel.jpg);width:85%;height:60%;position:absolute;margin-left:10%;margin-top:60px;background-size:100% 80%;z-index:2;">
                    </div>
        </div>
            <div id="Logo_Hotel" style="padding:2%;width:5%;height:12%;background:url(../Imagenes/logo.png);background-color: #FFF;position:absolute;background-repeat:no-repeat;background-size:100% 80%;margin-top:1%;margin-left:2%;background-position:center;z-index:3;">    	
            </div>            
            <div id="Logo_Proyecto" style="padding: 2%; width: 5%; height: 12%; background: url(../Imagenes/logo.jpg); background-color: #FFF; position: absolute; background-repeat: no-repeat; background-size: 100% 100%; margin-top: 1%; margin-left: 665px; background-position: center; z-index: 3; left: -23px;">  	
            </div>            
        <div id="Datos_Factura" style="background-color: #FFF; width: 713px; height: 140px; position: absolute; margin-top: 160px; z-index: 1; z-index: 5;">        
            <div id="Datos_Cliente" style="background-color: #FFF; width: 459px; height: 50px; position: absolute; margin: 0.5%; z-index: 2; border: #003300 dashed 1px; border-radius: 15px;">            
            <div id="I_Cliente" style="background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#9bbb40), to(#1e5b15)); background-image: url(../Imagenes/I_Cliente.JPG); background-repeat: no-repeat; background-size: 100% 100%; width: 30%; height: 24px; position: absolute; margin: 0; z-index: 3; border: #003300 dashed 1px; border-bottom-right-radius: 7px; border-top-left-radius: 15px;"></div>            
            <input type="text" name="Nombre_Cliente" id="Nombre_Cliente" readonly="readonly" style="width:60%; height:35%; margin-left:35%; border-radius:10px;border:none;" placeholder="Nombre" class="Texto" value="<?php echo $Nombre ?>"/>
            <input type="text" name="DNI_Cliente" value="DNI: <?php echo $Documento ?>" readonly="readonly" style="width:30%; height:35%; margin-left:35%; border-radius:10px;border:none;" placeholder="Documento" class="Texto"/>  
            <input type="text" name="Telefono_Cliente" value="Tel: <?php echo $Telefono ?>" readonly="readonly" style="width:28%; height:35%; margin-left:67%; border-radius:10px; margin-top:-18px;border:none;" placeholder="Teléfono"  class="Texto"/>     
            </div>            
            <div id="Datos_Recepcionista" style="background-color: #FFF; width: 463px; height: 50px; position: absolute; margin: 0.5%; margin-top: 90px; z-index: 2; border: #003300 dashed 1px; border-radius: 15px;">              
            <div id="I_Recepcionista" style="background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#9bbb40), to(#1e5b15)); background-image: url(../Imagenes/I_Recepcionista.JPG); background-repeat: no-repeat; background-size: 100% 100%; width: 30%; height: 23px; position: absolute; margin: 0; z-index: 3; border: #003300 dashed 1px; border-bottom-right-radius: 7px; border-top-left-radius: 15px; font-family: Gabriola; text-align: left; color: #000; font-size: 26px; padding-left: 2%;"></div>  
            <input type="text" name="Nombre_Recepcionista" readonly="readonly" style="width:60%; height:35%; margin-left:35%; border-radius:10px;border:none;" placeholder="Nombre" class="Texto" value="<?php echo $_SESSION['Nombre_Recepcionista'].' '.$_SESSION['Apellido_Recepcionista']; ?>"/>
            <input name="Documento_Recepcionista" type="text" placeholder="Documento" style="width:30%; height:35%; margin-left:35%; border-radius:10px;border:none;" readonly="readonly" class="Texto" value="<?php echo $_SESSION['DNI'];?>"/>  
            </div>
            <div id="Codigo_Factura" style="background-color: #FFF; width: 30%; height: 50px; position: absolute; margin: 0.5%; margin-left: 440px; z-index: 3; border: #003300 dashed 1px; border-radius: 15px; left: 54px; top: -4px;">
            <div id="I_Factura" style="background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#9bbb40), to(#1e5b15)); background-image: url(../Imagenes/I_Factura.JPG); background-repeat: no-repeat; background-size: 100% 100%; width: 50%; height: 19px; position: absolute; margin: 0; z-index: 3; border: #003300 dashed 1px; border-bottom-right-radius: 7px; border-top-left-radius: 15px;"></div> 
            <input type="text" name="Codigo_Factura" readonly="readonly" style="text-align:right;width:60%; height:50%; margin-left:30%; border-radius:10px; margin-top:10%; border:none;" value="<?php echo $Id_Defecto;?>" class="Texto"/> 
          </div>          
            <div id="Fecha_Factura" style="background-color: #FFF; width: 30%; height: 50px; position: absolute; margin: 7.8%; margin-left: 440px; z-index: 3; border: #003300 dashed 1px; border-radius: 15px; margin-top: 90px; left: 56px;"> 
            <div id="I_Fecha" style="background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#9bbb40), to(#1e5b15)); background-image: url(../Imagenes/I_Fecha.JPG); background-repeat: no-repeat; background-size: 100% 100%; width: 50%; height: 20px; position: absolute; margin: 0; z-index: 3; border: #003300 dashed 1px; border-bottom-right-radius: 7px; border-top-left-radius: 15px; font-family: Gabriola; text-align: left; color: #000; font-size: 26px; padding-left: 2%;"></div>            
            <input type="text" name="Fecha_Factura" readonly="readonly" style="width:60%; height:50%; margin-left:30%; border-radius:10px; margin-top:11%; border:none; text-align:right;" value="<?php echo $Fecha_Actual;?>" class="Texto"/>       
            </div>            
        </div>
        <div id="Items" style="background-color:#FFF;width:98.3%;margin:0.5%;margin-top:340px;z-index:2;border:#003300 dashed 1px;border-radius:15px;">                                      
          	<table width="98%" style="padding:1%;margin-left:1.3%;font-family:Lucida Sans Unicode;color:#000;font-size:13px;" id="generar">
            	<tr style="width:100%;border:1px solid #F00;background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#9bbb40), to(#1e5b15));background: -moz-linear-gradient(top, #9bbb40, #1e5b15);">
                	<td style="width:20%;height:50% ;border:1px solid #333;margin-left:1%;border-top-left-radius:15px;text-align:center;">
                    	CANTIDAD
                    </td>
                    <td style="width:45%; border:1px solid #333;text-align:center;padding-left:2%;">
                    	DESCRIPCION
                    </td>
                    <td style="width:17%; border:1px solid #333;text-align:center;padding-left:2%;">
                    	VALOR UNITARIO
                    </td>
                    <td style="width:17%; border:1px solid #333;margin-left:1%;border-top-right-radius:15px;text-align:center;padding-left:2%;">
                    	TOTAL SERVICIO
                    </td>
                </tr>                
                <tr style="width:100%;border:1px solid #F00;padding-left:2%;">
                	<td style="padding-left:1%;">
                    	<?php if($DIFERENCIA_MESES<>0){echo $DIFERENCIA_MESES.' Meses Con';} echo $DIFERENCIA_DIAS.' Dias ';?>                        
                    </td>
                    <td style="padding-left:1%;">
                    	<?php echo $Descripcion ?>
                    </td>
                    <td style="padding-left:1%;">
                    	<?php echo ' Valor del Dia $'.$VALOR_DIARIO;?><br/>
                    	<?php if($DIFERENCIA_MESES<>0){echo 'Valor del Mes '.$VALOR_MENSUAL;}?>
                    </td>
                    <td style="padding-right:1%;text-align:right;">
                    	<input type="text" id="valor_habitacion" name="valor_habitacion" value="<?php echo $VALOR_HABITACION_TOTAL;?>"  onkeyup=" valor_habitacion_modificada();" />
                        <label for="vlr_hb" id="vlr_hb"></label> 
                        <label for="hb" id="hb"></label> 
                    </td>
                </tr>
              
                
            </table>
        </div>
        <div id="Final" style="background-color:#FFF;width:30%;height:135px;margin:0.5%;margin-left:69%;z-index:5;border:#003300 dashed 1px;border-radius:15px;position:relative; margin-top:42px">     
        <div id="Abono" style="background-image: url(../Imagenes/I_Abono.JPG); background-size: 100% 80%; background-repeat: no-repeat; width: 43%; height: 30%; margin: 0.5%; z-index: 3; border: #003300 dashed 1px; padding-left: 5%; border-top-left-radius: 15px; position: absolute;"></div>
          
          <div id="TAbono" style="background-color: #FFF; width: 49%; height: 30%; margin: 0.5%; z-index: 3; border: #003300 dashed 1px; border-top-right-radius: 15px; margin-left: 50%; position: absolute;"><label id="Txt_Abono" for="Txt_Abono">$<?php echo (int)$_SESSION['ABONO'];?></label></div>
          
                           
          <div id="Subtotal" style="background-image: url(../Imagenes/I_Sub-Total.JPG); background-size: 100% 80%; background-repeat: no-repeat; width: 43%; height: 30%; margin: 0.5%; z-index: 3; border: #003300 dashed 1px; padding-left: 5%; position: absolute;margin-top: 15%;"></div>
          
          <div id="Valor_Subtotal" style="background-color: #FFF; width: 49%; height: 30%; margin: 0.5%; z-index: 3; border: #003300 dashed 1px;  margin-left: 50%; position: absolute;margin-top: 15%;"><label id="Txt_Valor_Subtotal" for="Txt_Valor_Subtotal"></label></div>
          
          <div id="Iva" style="background-image: url(../Imagenes/I_Iva.JPG); background-size: 100% 80%; background-repeat: no-repeat; width: 43%; height: 31%; margin: 0%; margin-left: 0.5%; z-index: 3; border: #003300 dashed 1px; padding-left: 5%; position: absolute; margin-top:60px;"></div>
          
          <div id="Valor_Iva" style="background-color: #FFF; width: 49%; height: 30%; margin: 0.5%; z-index: 3; border: #003300 dashed 1px; margin-left: 50%; position: absolute; margin-top: 28%;"><label id="Txt_Valor_Iva" for="Txt_Valor_Iva"></label></div>
          
          <div id="Total" style="background-image: url(../Imagenes/I_Total.JPG); background-size: 100% 100%; background-repeat: no-repeat; width: 43%; height: 30%; margin: 0.5%; z-index: 3; border: #003300 dashed 1px; padding-left: 5%; border-bottom-left-radius: 15px; position: absolute; margin-top: 42.4%;"><span style="background-color: #FFF; width: 49%; height: 31%; margin: 0.5%; z-index: 3; border: #003300 dashed 1px; border-bottom-right-radius: 15px; margin-left: 50%; margin-top: 24.5%; position: absolute; left: 68px; top: -23px;">
            <input type="text" id="Txt_Valor_Total" name="Txt_Valor_Total" style="border:none;width:79%; height:97%;border-bottom-right-radius:15px; display:none;" class="Texto"/>
          </span></div>
          
           <div id="Valor_Total" style="background-color: #FFF; width: 49%; height: 30%; margin: 0.5%; z-index: 3; border: #003300 dashed 1px; border-bottom-right-radius: 15px; margin-left: 50%; margin-top: 43%; position: absolute;"> <input type="text" id="Txt_Valor_Total2" name="Txt_Valor_Total2" style="border:none;width:79%; height:97%;border-bottom-right-radius:15px;display:none;" class="Texto" value="0"/><label id="total_factura" for="total_factura"></label></div>
        </div>
        
         <div id="otros" style="background-color:#FFF;width:460px;height:130px;margin:0.5%;margin-left:0.5%;z-index:5;border:#003300 dashed 1px;border-radius:15px;position:absolute;margin-top:-135px;">
        	<div id="I_Fiscales" style="background-image:url(../Imagenes/I_Fiscales.JPG);background-repeat:no-repeat;background-size:100% 100%;position:absolute;width:100%;height:20%;border-top-right-radius:15px;border-top-left-radius:15px;"></div>
        </div>
        <div id="observaciones" style="background-color:#FFF;width:98%;height:100px;margin:0.5%;margin-left:0.5%;z-index:6;border:#003300 dashed 1px;border-radius:15px;position:relative;margin-top:6%;">
        
       	  <div id="I_Observaciones" style="background-image:url(../Imagenes/I_Observaciones.JPG);background-repeat:no-repeat;background-size:100% 100%;position:absolute;width:100%;height:20%;border-top-right-radius:15px;border-top-left-radius:15px;"></div>
          <label for="lb_obser" id="lb_obser" style="z-index:300; position:absolute; margin-top:3%;margin-left:2%;"></label> 
            <textarea name="Observaciones" rows="4" class="Texto" id="Txt_Observaciones" style="border:none;width:97%; height:67%;margin-top:3%;margin-left:1%;"></textarea>
        </div>
	</div>
</div>
</form>
<script>inicio();
</script>
<?php
		}
?>
<div id="Nuevo_Registro" style="width:40px;height:37px;background-repeat:no-repeat;background-size:100% 100%;background-image:url(../Imagenes/item.gif);position:absolute;z-index:5;cursor:pointer;margin-top:327px;margin-left:40px;" onclick="generar_fila();">	
</div>
		 <!-- InstanceEndEditable -->          
        </div>
    </div>
    <div id="footer">
    	
    </div>
</body>
<!-- InstanceEnd --></html>

