<?php
		require('../includes/Funciones.php');
		$funciones=Fc::getInstance();
		$contador=1;
		session_start();
		$imagen='url(../Imagenes/Informacion.gif)';
		$mensaje='';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/MASTER.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="logo" --><link href="../Imagenes/SOADHO.ico" type="image/x-icon" rel="shortcut icon" /><!-- InstanceEndEditable -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>SOADHO</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->


<meta name="Robots" content="none"/>
<link href="../ESTILOS.css" rel="stylesheet" type="text/css" />
<script src="../includes/CODIGOS.js"></script>
<script src="../jquery-1.11.1.min.js"></script>
<?php
		if(!isset($_SESSION['correcto']) ){
			$_SESSION['PAGINA']='Habitaciones.Options.php';
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
		 <div id="formulario"><!-- InstanceBeginEditable name="formulario" --><b>Agregar Habitaciones</b>
		 <div id="session" style="position: absolute; width: 60px; height: 60px; margin-top: -60px; margin-left: -150px; background-image: url(../Imagenes/salir.gif); background-repeat: no-repeat; background-size: 110% 100%; cursor: pointer; left: 225px; top: 396px;" onclick="location.href='Cerrar.php';"></div><!-- InstanceEndEditable --></div>
		 <!-- InstanceBeginEditable name="AREA_TRABAJO" -->
<?php
	$funciones->cnx();

	//ESTABLECER POSICION ACTUAL DEL REGISTRO
	$CANTIDAD=mysql_num_rows($funciones->ejecutar("select * from HABITACION"));

 
	$POSICION=$funciones->botones($CANTIDAD);
	//CONSULTA DE TODOS LOS REGISTROS DE LA TABLA HABITACION
		$ejecucion=$funciones->ejecutar("SELECT HB.ID_BLOQUE,HB.CODIGO,HB.ID_HABITACION,HB.DESCRIPCION, TP.ID_TARIFA_HABITACION,TD.TIPO AS TIPOD,TD.VALOR AS VALORD ,TM.TIPO AS TIPOM,TM.VALOR AS VALORM,TA.TIPO AS TIPOA,TA.VALOR AS VALORA,TD.ID_TARIFA FROM HABITACION HB,TARIFA_HABITACION TP3,TARIFA_HABITACION TP2,TARIFA_HABITACION TP,TARIFA  TD ,TARIFA  TM ,TARIFA  TA WHERE TP3.ID_HABITACION=HB.ID_HABITACION  AND TP2.ID_HABITACION=HB.ID_HABITACION  AND TP.ID_HABITACION=HB.ID_HABITACION  AND TD.TIPO='DIARIA' AND TM.TIPO='MENSUAL' AND TA.TIPO='ANUAL' AND TP.ID_TARIFA=TD.ID_TARIFA AND TP2.ID_TARIFA=TM.ID_TARIFA AND TP3.ID_TARIFA=TA.ID_TARIFA  GROUP BY   HB.ID_HABITACION");
		$registros=mysql_num_rows($ejecucion);
		$i=1;
	//SI LA TABLA ESTA VACIA
		if($registros<1){
			$matriz[$i][1]="";
			$matriz[$i][2]="";
			$matriz[$i][3]="";
			$matriz[$i][4]="";
			$matriz[$i][8]="";
			$matriz[$i][5]="";
			$matriz[$i][9]="";
			$matriz[$i][6]="";
			$matriz[$i][10]="";
			$matriz[$i][0]="";
			$matriz[$i][7]="";
			$contador=0;
			 }
		else{
		//SI HAY DATOS
			while($datos = mysql_fetch_array($ejecucion)){
				//LLENAS UNA MATRIZ CON LOS REGISTROS
				$matriz[$i][0]=$datos['ID_HABITACION'];
				$matriz[$i][1]=$datos['CODIGO'];
				$matriz[$i][2]=$datos['ID_BLOQUE'];
				$matriz[$i][3]=$datos['DESCRIPCION'];
				
				$matriz[$i][4]=$datos['ID_TARIFA'];
				$matriz[$i][8]=$datos['VALORD'];
				$matriz[$i][5]=($datos['ID_TARIFA'])+1;
				$matriz[$i][9]=$datos['VALORM'];
				$matriz[$i][6]=($datos['ID_TARIFA'])+2;
				$matriz[$i][10]=$datos['VALORA'];
				
				$matriz[$i][7]=$datos['ID_TARIFA_HABITACION'];
				$i=$i+1;			
			}
			
			//BUSCAR UN REGISTRO Y MOSTRAR
			if(isset($_POST['BTN_BUSCAR'])){
				$CONTADOR_BUSQUEDA=0;
				$BUSCAR=($_POST['TXT_BUSCAR']);
				$CANTIDAD=mysql_num_rows($funciones->ejecutar("SELECT HB.ID_BLOQUE,HB.CODIGO,HB.ID_HABITACION,HB.DESCRIPCION, TP.ID_TARIFA_HABITACION,TD.TIPO AS TIPOD,TD.VALOR AS VALORD ,TM.TIPO AS TIPOM,TM.VALOR AS VALORM,TA.TIPO AS TIPOA,TA.VALOR AS VALORA,TD.ID_TARIFA FROM HABITACION HB,TARIFA_HABITACION TP3,TARIFA_HABITACION TP2,TARIFA_HABITACION TP,TARIFA  TD ,TARIFA  TM ,TARIFA  TA WHERE TP3.ID_HABITACION=HB.ID_HABITACION  AND TP2.ID_HABITACION=HB.ID_HABITACION  AND TP.ID_HABITACION=HB.ID_HABITACION  AND TD.TIPO='DIARIA' AND TM.TIPO='MENSUAL' AND TA.TIPO='ANUAL' AND TP.ID_TARIFA=TD.ID_TARIFA AND TP2.ID_TARIFA=TM.ID_TARIFA AND TP3.ID_TARIFA=TA.ID_TARIFA  GROUP BY   HB.ID_HABITACION"));
				for($i=1;$i<=$CANTIDAD;$i=$i+1){
					if($matriz[$i][1]==strtoupper($BUSCAR)){
						$POSICION=$i;
						$CONTADOR_BUSQUEDA=1;
					}
				}
				if ($CONTADOR_BUSQUEDA==0){ 
				$mensaje='NO HAY HABITACIONES CON ESE CODIGO!!';
						$imagen='url(../Imagenes/error.gif)';?>
						<script>$('#mensajes').css('display','block');</script>
				<?php }
			}
			
//ELIMINAR
	if(isset($_POST['BTN_ELIMINAR'])){
		$ID_HABITACION=$_POST['TXT_LB_ID'];
		$ID_TARIFA1=$_POST['TXT_LB_IDTD'];
		$ID_TARIFA2=$_POST['TXT_LB_IDTM'];
		$ID_TARIFA3=$_POST['TXT_LB_IDTA'];
		$ID_ROMPE1=$_POST['TXT_LB_ID_TH'];
		$ID_ROMPE2=$ID_ROMPE1+1;
		$ID_ROMPE3=$ID_ROMPE2+1;
		$FORANEAS=mysql_num_rows($funciones->ejecutar("SELECT * FROM INVENTARIO,HABITACION WHERE HABITACION.ID_HABITACION=INVENTARIO.ID_HABITACION AND HABITACION.ID_HABITACION='$ID_HABITACION'"));	
		if($FORANEAS<1){		
		$funciones->ejecutar("DELETE FROM TARIFA_HABITACION where  ID_TARIFA_HABITACION='$ID_ROMPE1' OR ID_TARIFA_HABITACION='$ID_ROMPE2' OR ID_TARIFA_HABITACION='$ID_ROMPE3'");	
		$funciones->ejecutar("DELETE FROM TARIFA where  ID_TARIFA='$ID_TARIFA1' OR ID_TARIFA='$ID_TARIFA2' OR ID_TARIFA='$ID_TARIFA3'");
		$funciones->ejecutar("DELETE FROM HABITACION where  ID_HABITACION='$ID_HABITACION'");	
			$mensaje='REGISTRO ELIMINADO CORRECTAMENTE';
			$imagen='url(../Imagenes/CORRECTO.gif)'; ?>					
				 <script>$('#mensajes').css('display','block');</script> 
			<?php
		}
		else{$mensaje='ESTE REGISTRO NO PUEDE SER ELMINADO..';
			$imagen='url(../Imagenes/error.gif)';?>
            <script>$('#mensajes').css('display','block');</script>
        <?php
		}
			
	}			
			
//MODIFICAR			
	if(isset($_POST['BTN_MODIFICAR'])){
		
		$CODIGO=TRIM($_POST['TXT_CODIGO']);
		$DESCRIPCION=TRIM($_POST['TXT_DESCRIPCION']);
		$DIARIA=TRIM($_POST['TXT_T_DIARIA']);
		$MENSUAL=TRIM($_POST['TXT_T_MENSUAL']);
		$ANUAL=TRIM($_POST['TXT_T_ANUAL']);
		$BLOQUE=TRIM($_POST['CB_BLOQUE']);
		
		
		$ID_HABITACION=$_POST['TXT_LB_ID'];
		$ID_TARIFA1=$_POST['TXT_LB_IDTD'];
		$ID_TARIFA2=$_POST['TXT_LB_IDTM'];
		$ID_TARIFA3=$_POST['TXT_LB_IDTA'];
		$ID_ROMPE1=$_POST['TXT_LB_ID_TH'];
		$ID_ROMPE2=$ID_ROMPE1+1;
		$ID_ROMPE3=$ID_ROMPE2+1;
		
		if($CODIGO<>"" and $DESCRIPCION<>"" and $DIARIA<>"" and $MENSUAL<>"" and $ANUAL<>"" and $BLOQUE<>""){//VALIDA QUE AYAN DATOS
		
		$num_rows=mysql_num_rows($funciones->ejecutar("select * from HABITACION where CODIGO='$CODIGO' and ID_HABITACION<>'$ID_HABITACION' ")); //VALIDA QUE NO AYA OTRO REGISTRO CON ESOS DATOS
		if($num_rows==0){
			$ejecucion=$funciones->ejecutar("select * from HABITACION  where  ID_HABITACION='$ID_HABITACION'");
			$registros=mysql_num_rows($ejecucion);
			$datos = mysql_fetch_array($ejecucion);
			if($CODIGO<>$datos['CODIGO'] or $DESCRIPCION<>$datos['DESCRIPCION'] or $BLOQUE<>$datos['ID_BLOQUE']){//VALIDA QUE UNO DE LOS DATOS A MODIFICAR SEA DIFERENTE A LO QUE YA ESTA ALMACENADO
			$funciones->ejecutar("UPDATE HABITACION SET CODIGO=UPPER('$CODIGO'),ID_BLOQUE='$BLOQUE',DESCRIPCION=UPPER('$DESCRIPCION') where  ID_HABITACION='$ID_HABITACION'");
			}		
			
			
		 }
		else{
			$mensaje='YA EXISTE UN REGISTRO CON ESOS DATOS!';
			$imagen='url(../Imagenes/error.gif)';?>
            <script>$('#mensajes').css('display','block');</script>
			<?php
		}
		
	//CAMBIA LA TARIFA DIARIA
		$ejecucion=$funciones->ejecutar("select * from TARIFA  where  ID_TARIFA='$ID_TARIFA1'");
			$datos = mysql_fetch_array($ejecucion);
			if($DIARIA<>$datos['VALOR']){//VALIDA QUE UNO DE LOS DATOS A MODIFICAR SEA DIFERENTE A LO QUE YA ESTA ALMACENADO
			$funciones->ejecutar("UPDATE TARIFA SET VALOR='$DIARIA' where  ID_TARIFA='$ID_TARIFA1'");
			}	
			
	//CAMBIA LA TARIFA MENSUAL
			$ejecucion=$funciones->ejecutar("select * from TARIFA  where  ID_TARIFA='$ID_TARIFA2'");
			$datos = mysql_fetch_array($ejecucion);
			if($MENSUAL<>$datos['VALOR']){//VALIDA QUE UNO DE LOS DATOS A MODIFICAR SEA DIFERENTE A LO QUE YA ESTA ALMACENADO
			$funciones->ejecutar("UPDATE TARIFA SET VALOR='$MENSUAL' where  ID_TARIFA='$ID_TARIFA2'");
			}
			
	//CAMBIA LA TARIFA ANUAL
			$ejecucion=$funciones->ejecutar("select * from TARIFA  where  ID_TARIFA='$ID_TARIFA3'");
			$datos = mysql_fetch_array($ejecucion);
			if($ANUAL<>$datos['VALOR']){//VALIDA QUE UNO DE LOS DATOS A MODIFICAR SEA DIFERENTE A LO QUE YA ESTA ALMACENADO
			$funciones->ejecutar("UPDATE TARIFA SET VALOR='$ANUAL' where  ID_TARIFA='$ID_TARIFA3'");
			}
			$mensaje='REGISTRO MODIFICADO CORRECTAMENTE';
			$imagen='url(../Imagenes/CORRECTO.gif)';?>            
			<script>$('#mensajes').css('display','block');</script>   
            <?php 
		}
		else{
			$mensaje='INGRESE LOS DATOS NECESARIOS!';
			$imagen='url(../Imagenes/error.gif)';?>
            <script>$('#mensajes').css('display','block');</script>
			<?php
		}
		
	}			

//CIERRA LA VALIDACION DE QUE AYAN DATOS			
}

	

		if(isset($_POST['BTN_REGISTRAR'])){
			//CAPTURAR LOS DATOS SIN ESPACIOS
			$CODIGO=TRIM($_POST['TXT_CODIGO']);
			$DESCRIPCION=TRIM($_POST['TXT_DESCRIPCION']);
			$DIARIA=TRIM($_POST['TXT_T_DIARIA']);
			$MENSUAL=TRIM($_POST['TXT_T_MENSUAL']);
			$ANUAL=TRIM($_POST['TXT_T_ANUAL']);
			$BLOQUE=TRIM($_POST['CB_BLOQUE']);
			if($CODIGO!='' and $BLOQUE!='' and $DESCRIPCION!='' and $DIARIA!='' and $MENSUAL!='' and $ANUAL!=''){
				$num_rows=mysql_num_rows($funciones->ejecutar("select * from HABITACION where CODIGO='$CODIGO'"));
				if($num_rows==0){
					$numero_registros=mysql_num_rows($funciones->ejecutar("select * from HABITACION"));
						if($numero_registros>0){
							$Id_H=$matriz[$CANTIDAD][0];
							$Id_H=$Id_H+1;
							$Id_TD=$matriz[$CANTIDAD][6];
							$Id_TD=$Id_TD+1;
							$Id_TM=$Id_TD+1;
							$Id_TA=$Id_TM+1;
							$Id_T_H=$matriz[$CANTIDAD][7];
							$Id_TD_H=$Id_T_H+3;
							$Id_TM_H=$Id_TD_H+1;
							$Id_TA_H=$Id_TM_H+1;
						}
						else{
							$Id_H=1;
							$Id_TD=1;
							$Id_TM=2;
							$Id_TA=3;
							$Id_TD_H=1;
							$Id_TM_H=2;
							$Id_TA_H=3;
						}
					$funciones->ejecutar("insert into HABITACION values('$Id_H','$BLOQUE',UPPER('$CODIGO'),UPPER('$DESCRIPCION'))");		
					$funciones->ejecutar("insert into TARIFA values('$Id_TD','DIARIA','$DIARIA')");		
					$funciones->ejecutar("insert into TARIFA values('$Id_TM','MENSUAL','$MENSUAL')");	
					$funciones->ejecutar("insert into TARIFA values('$Id_TA','ANUAL','$ANUAL')");	
					$funciones->ejecutar("insert into TARIFA_HABITACION values('$Id_TD_H','$Id_TD','$Id_H')");		
					$funciones->ejecutar("insert into TARIFA_HABITACION values('$Id_TM_H','$Id_TM','$Id_H')");	
					$funciones->ejecutar("insert into TARIFA_HABITACION values('$Id_TA_H','$Id_TA','$Id_H')");			
					if($funciones){						
						$mensaje='LA HABITACIÓN HA SIDO REGISTRADO CORRECTAMENTE';
						$imagen='url(../Imagenes/CORRECTO.gif)';?>     
                        <script>
						$('#mensajes').css('display','block');
						</script>
						</script>
					    <?php
					 }
									
					else {
						$mensaje='UPSSS!!! HA OCURRIDO UN ERROR';
						$imagen='url(../Imagenes/error.gif)';?>
						<script>$('#mensajes').css('display','block');</script>
						<?php
					}
									
				}
				else{
					$mensaje='POR FAVOR VERIFIQUE, YA EXISTE UNA HABITACIÓN REGISTRADA CON ESOS DATOS';
						$imagen='url(../Imagenes/error.gif)';?>
						<script>$('#mensajes').css('display','block');</script>
					<?php
	
				}
			}
							
		else{
			$mensaje='POR FAVOR DIJITE LOS CAMPOS NECESAROS DEL FORMULARIO';
			$imagen='url(../Imagenes/error.gif)';?>
			<script>$('#mensajes').css('display','block');</script>
			<?php								
		}

	}
?>
	
<table width="727">
<form action="" method="POST" name="formulario" target="_self" id="form1">
<tr>
	<td width="130" rowspan="8">
        
       <input name="BTN_NUEVO" type="button" class="BTN_ESTADO"value="NUEVO"  id="OPCIONNUEVO"  onclick="ocultar();vaciar()"/>
          
        
        <input name="BTN_REGISTRAR" type="submit" class="BTN_GUARDAR" value="REGISTRAR"  id="OPCIONREGISTRAR" disabled="disabled"/>
           
         
        <input name="BTN_MODIFICAR" type="button" class="BTN_ESTADO"value="MODIFICAR"  id="OPCIONMODIFICAR"  onclick="preguntaM(formulario,'<?php echo $matriz[$POSICION][1] ?>')"/>
           
         
        <input name="BTN_ELIMINAR" type="button" class="BTN_ESTADO" value="ELIMINAR"  id="OPCIONELIMINAR" onclick="preguntaE(formulario,'<?php echo $matriz[$POSICION][1] ?>')"/>
            
        
        <input name="BTN_CANCELAR" type="button" class="BTN_VER" value="CANCELAR"  id="OPCIONES" onclick="ver();llenar()" />
            <br />
    </td>
</tr>
<tr height="35">
    <td width="130" height="34" >
    		<label for="LB_BUSCAR" id="label1" class="BUSQUEDA">BUSCAR</label>
    </td>
    <td width="301" >
    		<input name="TXT_BUSCAR" type="search" id="caja" size="40"  value="" width="290px" class="BUSQUEDA" placeholder="CÓDIGO"/>
    </td>
    <td width="126">
    		
            <input name="BTN_BUSCAR" type="submit" class="BUSQUEDA" value="BUSCAR"  id="OPCIONBUSCAR"/>
    </td>
</tr>

<tr>
	<td>
    	<label for="LB_BLOQUE" id="label1" >BLOQUE</label>
        <r>*</r>
    </td>
    <td>
    
      	<select name="CB_BLOQUE" id="caja" class="2"  size="1" onfocus="" style="width:50%">
        <option value="" class=""></option>
        	<?php	
				$ejecutar=$funciones->ejecutar("SELECT * from BLOQUE");
				while($valores = mysql_fetch_array($ejecutar)){?>
                <option value="<?php echo $valores['ID_BLOQUE'] ?>" class="<?php echo $valores['ID_BLOQUE'],'B'; ?>"><?php echo $valores['NOMBRE'] ?></option>
			<?php
                }
           	?>
           
        </select>
       <script type="application/javascript">seleccionado('<?php echo $matriz[$POSICION][2] ?>','B');</script>
    </td>
    <td>
    	<input type="hidden" name="conta" value="<?=$POSICION?>">
    </td>
</tr>

<tr height="35">
	<td height="34" >
    		<label for="LB_CODIGO" id="label1">CODIGO</label>
            <r>*</r>
    </td>
    <td>
    		<input name="TXT_CODIGO" type="search" id="caja"  value="<?php echo $matriz[$POSICION][1]; ?>" size="40" Width="290px" class="2" required="required" placeholder="CÓDIGO"/>
    </td>
    <td>
    		<input name="TXT_LB_ID" type="search" id="caja"  value="<?php echo $matriz[$POSICION][0]; ?>" size="5" Width="290px" class="btn_cods" />
    </td>
</tr>	
	
<tr>
	<td>
    	<label for="LB_DESCRIPCION" id="label1">DESCRIPCIÓN</label>
        <r>*</r>
    </td>
    <td><textarea name="TXT_DESCRIPCION" cols="39" rows="3" class="2" id="caja" width="290px" placeholder="DESCRIPCIÓN" required="required"><?php echo $matriz[$POSICION][3]; ?></textarea>
    </td>
    <td>
    	<input name="TXT_LB_ID_TH" type="search" id="caja"  value="<?php echo $matriz[$POSICION][7]; ?>" size="5" Width="290px" class="btn_cods" />
    </td>
</tr>
	
<tr>
	<td>
    	<label for="LB_T_DIARIA" id="label1">TARIFA DIARIA</label>
        <r>*</r>
    </td>
    <td><input name="TXT_T_DIARIA" type="number" class="2" id="caja" value="<?php echo $matriz[$POSICION][8]; ?>" size="49"  Width="290px" required="required" placeholder="TARIFA DIARIA" />
    </td>
    <td>
    <input name="TXT_LB_IDTD" type="search" id="caja"  value="<?php echo $matriz[$POSICION][4]; ?>" size="5" Width="290px" class="btn_cods" />
    </td>
</tr>

<tr>
	<td>
    	<label for="LB_T_MENSUAL" id="label1">TARIFA MENSUAL</label>
        <r>*</r>
    </td>
    <td><input name="TXT_T_MENSUAL" type="number" class="2" id="caja" value="<?php echo $matriz[$POSICION][9]; ?>" size="49"  Width="290px" required="required" placeholder="TARIFA MENSUAL" />
    </td>
    <td>
    <input name="TXT_LB_IDTM" type="search" id="caja"  value="<?php echo $matriz[$POSICION][5]; ?>" size="5" Width="290px" class="btn_cods" />
    </td>
</tr>

<tr>
	<td>
    	<label for="LB_T_ANUAL" id="label1">TARIFA ANUAL</label>
        <r>*</r>
    </td>
    <td><input name="TXT_T_ANUAL" type="number" class="2" id="caja" value="<?php echo $matriz[$POSICION][10]; ?>" size="49"  Width="290px" required="required" placeholder="TARIFA ANUAL" />
    </td>
    <td>
    <input name="TXT_LB_IDTA" type="search" id="caja"  value="<?php echo $matriz[$POSICION][6]; ?>" size="5" Width="290px" class="btn_cods" />
    </td>
</tr>

<tr><center>
	<td  colspan="4"><CENTER>
   		  <label for="add">&nbsp;</label>
            <input name="BTN_INICIO" type="submit" class="BTN_NAVEGACION"value="|<"  id="NAVEGACION"  />
            
            <label for="add">&nbsp;</label>
          <input name="BTN_ANTERIOR" type="submit" class="BTN_NAVEGACION" value="<"  id="NAVEGACION"/>
            
            <label for="add">&nbsp;</label>
          <input name="BTN_SIGUIENTE" type="submit" class="BTN_NAVEGACION" value=">"  id="NAVEGACION" onclick=""/>
            
            <label for="add">&nbsp;</label>
          <input name="BTN_FIN" type="submit" class="BTN_NAVEGACION"value=">|"  id="NAVEGACION" /></CENTER>
    </td>
</center></tr>

  </form>
    </table>
<?php 
if($contador==0){?>
 <script>ocultar();vaciar()</script>
<?php	
}
?>
<img src="../Imagenes/alerta.gif" style="width: 60px; height: 60px; position: absolute; left: 988px; top: 349px; z-index: 150; cursor: pointer;cursor:!important;" onclick="Emergente_Consultar('Consultar.php');<?php $_SESSION['consultar']='Consultar_Habitacion.php'; ?>" />
<?php
	$funciones->cerrar_cnx();
}
		if($mensaje<>''){
?>
<div id="mensajes" style="width:40%;height:20%; position:fixed; z-index:100;background-color:#C09; margin-left:7%; margin-top:-28%;border-top-left-radius:15px; border-top-right-radius:15px;background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#000), to(#1e5b15));
		background: -moz-linear-gradient(top, #000, #1e5b15);filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#000, endColorstr=#1e5b15, GradientType=0);border:#000 3px outset;">
    <div id="informacion" style="width:40%;height:4%; position:fixed; z-index:101;background-color:#000;margin-top:0;border-top-left-radius:10px; border-top-right-radius:10px; font:Gabriola; size:20px;color:#CCC;">
    <center><b>SOADHO</b></center>
    </div>
    <div id="imagen" style="margin-left:5%;margin-top:10%;position:absolute;width:15%;height:50%;background-image:<?php echo $imagen ?>; background-repeat:no-repeat;background-size:100% 100%;z-index:102;">
    </div>
    <div id="mensaje" style="width:70%;height:60%; margin-top:7%;margin-left:23%; font-family:Gabriola;font-size:20px;color:#FFF;">
    	<b><?php echo $mensaje; ?></b>
        <script>$('#mensajes').delay(5500).hide(600);
        setTimeout('window.location.reload()', 6500);</script>
    </div>
</div>
<?php
}
?>
<script>ocultar_codigos();</script>
<!-- InstanceEndEditable -->          
        </div>
    </div>
    <div id="footer">
    	
    </div>
</body>
<!-- InstanceEnd --></html>