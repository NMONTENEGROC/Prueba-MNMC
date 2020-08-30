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
			$_SESSION['PAGINA']='Huesped.Options.php';
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
		 <div id="formulario"><!-- InstanceBeginEditable name="formulario" --><b>Agregar Huésped</b>
		 <div id="session" style="position: absolute; width: 60px; height: 60px; margin-top: -60px; margin-left: -150px; background-image: url(../Imagenes/salir.gif); background-repeat: no-repeat; background-size: 110% 100%; cursor: pointer; left: 228px; top: 426px;" onclick="location.href='Cerrar.php';"></div><!-- InstanceEndEditable --></div>
		 <!-- InstanceBeginEditable name="AREA_TRABAJO" -->
<?php
	$funciones->cnx();
	$CANTIDAD=mysql_num_rows($funciones->ejecutar("select * from PERSONA"));
	$CANTIDAD_AUTO=mysql_num_rows($funciones->ejecutar("select * from AUTO"));
	//ESTABLECER POSICION ACTUAL DEL REGISTRO
	$POSICION=$funciones->botones($CANTIDAD);
	//CONSULTA DE TODOS LOS REGISTROS DE LA TABLA BLOQUE

		$i=1;
	//SI LA TABLA ESTA VACIA
		if($CANTIDAD<1){
			$matriz[$i][1]="";
			$matriz[$i][2]="";
			$matriz[$i][3]="";
			$matriz[$i][4]="";
			$matriz[$i][5]="";
			$matriz[$i][6]="";
			$matriz[$i][7]="";
			$matriz[$i][8]="";
			$matriz[$i][9]="";
			$matriz[$i][0]="";
			
			$matriz[$i][10]="";
			$matriz[$i][11]="";
			$matriz[$i][12]="";
			$matriz[$i][13]="";
			$matriz[$i][14]="";
			$matriz[$i][15]="";
		
	$contador=0;
			 }
		else{
			$ejecucion=$funciones->ejecutar("SELECT PN.ID_PERSONA,PN.ID_LUGAR,PN.ID_LUGAR_PROCEDENCIA,PN.ID_LUGAR_DESTINO,PN.NOMBRE,PN.APELLIDO,PN.TIPO_DOCUMENTO,PN.DNI,PN.TELEFONO,PN.EMPRESA,LG.ID_LUGAR_DEPENDIENTE AS LG_DE,LG4.ID_LUGAR_DEPENDIENTE AS LG_PE
FROM  PERSONA PN, LUGAR LG,LUGAR LG4
WHERE PN.ID_LUGAR=LG.ID_LUGAR AND LG.ID_LUGAR_DEPENDIENTE=LG4.ID_LUGAR");
			while($datos = mysql_fetch_array($ejecucion)){
				//LLENAS UNA MATRIZ CON LOS REGISTROS
				$matriz[$i][0]=$datos['ID_PERSONA'];
				$matriz[$i][4]=$datos['NOMBRE'];
				$matriz[$i][5]=$datos['APELLIDO'];
				$matriz[$i][6]=$datos['TIPO_DOCUMENTO'];
				$matriz[$i][7]=$datos['DNI'];	
				$matriz[$i][1]=$datos['ID_LUGAR'];	

				$matriz[$i][10]=$datos['LG_DE'];	
				$matriz[$i][11]=$datos['LG_PE'];
				$ubicacion=$matriz[$i][0];
			//NO HAY TELEFONO
				if ($datos['TELEFONO']<>""){
					$matriz[$i][8]=$datos['TELEFONO'];
				}
				else{
					$matriz[$i][8]="";
				}
			//NO HAY EMPRESA	
				if ($datos['EMPRESA']<>""){
					$matriz[$i][9]=$datos['EMPRESA'];
				}
				else{
					$matriz[$i][9]="";
				}
			//NO HAY LUGAR PROCEDENCIA	
				if ($datos['ID_LUGAR_PROCEDENCIA']<>"" and $datos['ID_LUGAR_PROCEDENCIA']<>NULL){
					$matriz[$i][2]=$datos['ID_LUGAR_PROCEDENCIA'];
					$VALOR=$matriz[$i][2];
					$FORANEAS=$funciones->ejecutar("SELECT LG_D.ID_LUGAR,LG_D.ID_LUGAR_DEPENDIENTE AS LG_DP,LG_P.ID_LUGAR,LG_P.ID_LUGAR_DEPENDIENTE AS LG_PP FROM LUGAR LG_D, LUGAR LG_P, PERSONA PN WHERE  '$VALOR'=LG_D.ID_LUGAR AND LG_D.ID_LUGAR_DEPENDIENTE=LG_P.ID_LUGAR AND PN.ID_PERSONA='$ubicacion'");
					while($valores = mysql_fetch_array($FORANEAS)){
						$matriz[$i][12]=$valores['LG_DP'];
						$matriz[$i][13]=$valores['LG_PP'];
						
					}
				}
					
				else{
					$matriz[$i][2]="";
					$matriz[$i][12]="";
					$matriz[$i][13]="";
					
				}
			//NO HAY LUGAR DESTINO
				if ($datos['ID_LUGAR_DESTINO']<>""){
					$matriz[$i][3]=$datos['ID_LUGAR_DESTINO'];
					$VALOR=$matriz[$i][3];
					$FORANEAS2=$funciones->ejecutar("SELECT LG_D.ID_LUGAR,LG_D.ID_LUGAR_DEPENDIENTE AS LG_DD,LG_P.ID_LUGAR,LG_P.ID_LUGAR_DEPENDIENTE AS LG_PD FROM LUGAR LG_D, LUGAR LG_P, PERSONA PN WHERE  '$VALOR'=LG_D.ID_LUGAR AND LG_D.ID_LUGAR_DEPENDIENTE=LG_P.ID_LUGAR AND PN.ID_PERSONA='$ubicacion'");
					while($valores = mysql_fetch_array($FORANEAS2)){
						$matriz[$i][14]=$valores['LG_DD'];
						$matriz[$i][15]=$valores['LG_PD'];
					}

				}
				else{
					$matriz[$i][3]="";
					$matriz[$i][14]="";
					$matriz[$i][15]="";
				}
				
				$AUTOS=mysql_num_rows($funciones->ejecutar("SELECT AT.PLACA,AT.CLASE,AT.COLOR,AT.ID_AUTO,PN.ID_PERSONA FROM AUTO AT, PERSONA PN WHERE  PN.ID_PERSONA='$ubicacion' AND PN.ID_PERSONA=AT.ID_PERSONA"));
				if($AUTOS>0){
				$auto=$funciones->ejecutar("SELECT AT.PLACA,AT.CLASE,AT.COLOR,AT.ID_AUTO,PN.ID_PERSONA FROM AUTO AT, PERSONA PN WHERE  PN.ID_PERSONA='$ubicacion' AND PN.ID_PERSONA=AT.ID_PERSONA");
					while($valores_auto = mysql_fetch_array($auto)){
						$matriz[$i][16]=$valores_auto['PLACA'];
						$matriz[$i][17]=$valores_auto['CLASE'];
						$matriz[$i][18]=$valores_auto['COLOR'];
						$matriz[$i][19]=$valores_auto['ID_AUTO'];
					}
				}
				else{
					$matriz[$i][16]="";
					$matriz[$i][17]="";
					$matriz[$i][18]="";
					$matriz[$i][19]="";
				}
				
				$i=$i+1;			
			}
			
			//BUSCAR UN REGISTRO Y MOSTRAR
			if(isset($_POST['BTN_BUSCAR'])){
				$CONTADOR_BUSQUEDA=0;
				$BUSCAR=$_POST['TXT_BUSCAR'];
				$CANTIDAD=mysql_num_rows($funciones->ejecutar("select * from PERSONA"));
				for($i=1;$i<=$CANTIDAD;$i=$i+1){
					if($matriz[$i][7]==$BUSCAR){
						$POSICION=$i;
						$CONTADOR_BUSQUEDA=1;
					}
				}
				if ($CONTADOR_BUSQUEDA==0){ $mensaje='NO HAY HUESPEDES CON ESE DOCUMENTO!!';
						$imagen='url(../Imagenes/error.gif)';?>
						<script>$('#mensajes').css('display','block');</script>
				<?php }
			}
			
//ELIMINAR
	if(isset($_POST['BTN_ELIMINAR'])){
		$ID_ALMACENADO=$_POST['TXT_LB_ID'];
		$ID_AUTO=$_POST['TXT_LB_ID_AUTO'];
		$FORANEAS_R=mysql_num_rows($funciones->ejecutar("SELECT * FROM PERSONA,RESERVA WHERE PERSONA.ID_PERSONA=RESERVA.ID_PERSONA AND PERSONA.ID_PERSONA='$ID_ALMACENADO'"));
		$FORANEAS_D=mysql_num_rows($funciones->ejecutar("SELECT * FROM PERSONA,FACTURA WHERE PERSONA.ID_PERSONA=FACTURA.ID_PERSONA AND PERSONA.ID_PERSONA='$ID_ALMACENADO'"));
		$FORANEAS=$FORANEAS_R+$FORANEAS_D;
		if($FORANEAS<1){
		if($ID_AUTO!=""){$funciones->ejecutar("DELETE FROM AUTO where  ID_AUTO='$ID_AUTO'");}	
		$funciones->ejecutar("DELETE FROM PERSONA where  ID_PERSONA='$ID_ALMACENADO'");		
			$mensaje='REGISTRO ELIMINADO CORRECTAMENTE';
			$imagen='url(../Imagenes/CORRECTO.gif)'; ?>					
			<script>$('#mensajes').css('display','block');</script>
			<?php
		}
		else{
			$mensaje='ESTE REGISTRO NO PUEDE SER ELMINADO..';
			$imagen='url(../Imagenes/error.gif)';?>
            <script>$('#mensajes').css('display','block');</script>
        <?php
		}		
	}	
	
			
			
//MODIFICAR			
	if(isset($_POST['BTN_MODIFICAR'])){
		$ID_ALMACENADO=$_POST['TXT_LB_ID'];
		$APELLIDO=TRIM($_POST['TXT_APELLIDO']);
		$NOMBRE=TRIM($_POST['TXT_NOMBRE']);
		$TIPO=TRIM($_POST['CB_TIPO']);
		$DNI=TRIM($_POST['TXT_DNI']);
		$CIUDAD=TRIM($_POST['CB_LUGAR_C']);
		$PROCEDENCIA=$_POST['CB_LUGAR_PRO_C'];
		$DESTINO=$_POST['CB_LUGAR_DES_C'];
		$TELEFONO=TRIM($_POST['TXT_TELEFONO']);
		$EMPRESA=TRIM($_POST['TXT_EMPRESA']);
		
		$CLASE=TRIM($_POST['TXT_CLASE']);
		$PLACA=TRIM($_POST['TXT_PLACA']);
		$COLOR=TRIM($_POST['TXT_COLOR']);
		$ID_AUTO=$_POST['TXT_LB_ID_AUTO'];
		
			if($APELLIDO!='' and $NOMBRE!=''and $TIPO!='' and $DNI!='' and $CIUDAD!=''){
				$num_rows=mysql_num_rows($funciones->ejecutar("select * from PERSONA where DNI='$DNI' AND ID_PERSONA<>'$ID_ALMACENADO'"));
				if($num_rows==0){
					
			
			if($NOMBRE<>$datos['NOMBRE'] or $APELLIDO<>$datos['APELLIDO'] or $TIPO<>$datos['TIPO_DOCUMENTO']or $DNI<>$datos['DNI'] or $CIUDAD<>$datos['ID_LUGAR'] or $PROCEDENCIA<>$datos['ID_LUGAR_PROCEDENCIA'] or $DESTINO<>$datos['ID_LUGAR_DESTINO'] or $TELEFONO<>$datos['TELEFONO'] or $EMPRESA<>$datos['EMPRESA']){//VALIDA QUE UNO DE LOS DATOS A MODIFICAR SEA DIFERENTE A LO QUE YA ESTA ALMACENADO
						if($EMPRESA==""){$EMPRESA=NULL;}
						if($TELEFONO==""){$TELEFONO=NULL;}
						if($DESTINO<>"" and $PROCEDENCIA<>""){$funciones->ejecutar("UPDATE PERSONA  SET ID_LUGAR='$CIUDAD', ID_LUGAR_PROCEDENCIA='$PROCEDENCIA', ID_LUGAR_DESTINO='$DESTINO', NOMBRE=UPPER('$NOMBRE'), APELLIDO=UPPER('$APELLIDO'), TIPO_DOCUMENTO=UPPER('$TIPO'), DNI=UPPER('$DNI'), TELEFONO=UPPER('$TELEFONO'), EMPRESA=UPPER('$EMPRESA') where  ID_PERSONA='$ID_ALMACENADO'");					}
					else if($DESTINO=="" and $PROCEDENCIA<>""){$funciones->ejecutar("UPDATE PERSONA SET ID_LUGAR='$CIUDAD',ID_LUGAR_PROCEDENCIA='$PROCEDENCIA',ID_LUGAR_DESTINO=NULL,NOMBRE=UPPER('$NOMBRE'),APELLIDO=UPPER('$APELLIDO'),TIPO_DOCUMENTO=UPPER('$TIPO'), DNI=UPPER('$DNI'), TELEFONO=UPPER('$TELEFONO'), EMPRESA=UPPER('$EMPRESA') where  ID_PERSONA='$ID_ALMACENADO'");					}
			else if($DESTINO<>"" and $PROCEDENCIA==""){$funciones->ejecutar("UPDATE PERSONA  SET ID_LUGAR='$CIUDAD', ID_LUGAR_PROCEDENCIA=NULL, ID_LUGAR_DESTINO='$DESTINO', NOMBRE=UPPER('$NOMBRE'), APELLIDO=UPPER('$APELLIDO'), TIPO_DOCUMENTO=UPPER('$TIPO'), DNI=UPPER('$DNI'), TELEFONO=UPPER('$TELEFONO'), EMPRESA=UPPER('$EMPRESA') where  ID_PERSONA='$ID_ALMACENADO'");					}
						else if($DESTINO=="" and $PROCEDENCIA==""){$funciones->ejecutar("UPDATE PERSONA SET ID_LUGAR='$CIUDAD', ID_LUGAR_PROCEDENCIA=NULL, ID_LUGAR_DESTINO=NULL,NOMBRE=UPPER('$NOMBRE'),APELLIDO=UPPER('$APELLIDO'), TIPO_DOCUMENTO=UPPER('$TIPO'),DNI=UPPER('$DNI'), TELEFONO=UPPER('$TELEFONO'), EMPRESA=UPPER('$EMPRESA') where  ID_PERSONA='$ID_ALMACENADO'");					}
				
						$AUTOS=mysql_num_rows($funciones->ejecutar("SELECT AT.PLACA,AT.CLASE,AT.COLOR,AT.ID_AUTO,PN.ID_PERSONA FROM AUTO AT, PERSONA PN WHERE  PN.ID_PERSONA='$ID_ALMACENADO' AND PN.ID_PERSONA=AT.ID_PERSONA"));
						if($CLASE!="" and $PLACA!="" and $COLOR!=""){	
						if($AUTOS>0){$funciones->ejecutar("UPDATE AUTO SET CLASE=UPPER('$CLASE'),PLACA=UPPER('$PLACA'),COLOR=UPPER('$COLOR') WHERE ID_AUTO='$ID_AUTO'");}
						else{
							$numero_registros=mysql_num_rows($funciones->ejecutar("select * from AUTO"));
							if($numero_registros>0){
								$Id_A=$matriz[$CANTIDAD_AUTO][19];
								$Id_A=$Id_A+1;
								
							}
							else{
								$Id_A=1;
							}
						$funciones->ejecutar("insert into AUTO values('$Id_A','$ID_ALMACENADO',UPPER('$CLASE'),UPPER('$PLACA'),UPPER('$COLOR'))");	
							}
							
					}
			$mensaje='REGISTRO MODIFICADO CORRECTAMENTE';
			$imagen='url(../Imagenes/CORRECTO.gif)';?>            
			<script>$('#mensajes').css('display','block');</script>
			<?php
            }
			else{
			$mensaje='ESTA INTENTANDO MODIFICAR UN REGISTRO TOTALMENTE IGUAL!';
			$imagen='url(../Imagenes/error.gif)';?>
            <script>$('#mensajes').css('display','block');</script>
                <?php
				}
			 }
		else{
			$mensaje='YA EXISTE UN REGISTRO CON ESOS DATOS!';
			$imagen='url(../Imagenes/error.gif)';?>
            <script>$('#mensajes').css('display','block');</script>
			<?php
		}
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
			$APELLIDO=TRIM($_POST['TXT_APELLIDO']);
			$NOMBRE=TRIM($_POST['TXT_NOMBRE']);
			$TIPO=TRIM($_POST['CB_TIPO']);
			$DNI=TRIM($_POST['TXT_DNI']);
			$CIUDAD=TRIM($_POST['CB_LUGAR_C']);
			$PROCEDENCIA=$_POST['CB_LUGAR_PRO_C'];
			$DESTINO=$_POST['CB_LUGAR_DES_C'];
			$TELEFONO=TRIM($_POST['TXT_TELEFONO']);
			$EMPRESA=TRIM($_POST['TXT_EMPRESA']);
			
			$CLASE=TRIM($_POST['TXT_CLASE']);
			$PLACA=TRIM($_POST['TXT_PLACA']);
			$COLOR=TRIM($_POST['TXT_COLOR']);
			
			if($APELLIDO!='' and $NOMBRE!=''and $TIPO!='' and $DNI!='' and $CIUDAD!=''){
				$num_rows=mysql_num_rows($funciones->ejecutar("select * from PERSONA where DNI='$DNI'"));
				if($num_rows==0){

					$numero_registros=mysql_num_rows($funciones->ejecutar("select * from PERSONA"));
						if($numero_registros>0){
							$Id_P=$matriz[$CANTIDAD][0];
							$Id_P=$Id_P+1;
							
						}
						else{
							$Id_P=1;
						}
						
						if($EMPRESA==""){$EMPRESA=NULL;}
						if($TELEFONO==""){$TELEFONO=NULL;}
						if($DESTINO<>"" and $PROCEDENCIA<>""){$funciones->ejecutar("insert into PERSONA values('$Id_P','$CIUDAD','$PROCEDENCIA','$DESTINO',UPPER('$NOMBRE'),UPPER('$APELLIDO'),UPPER('$TIPO'),UPPER('$DNI'),UPPER('$TELEFONO'),UPPER('$EMPRESA'))");					}
					else if($DESTINO=="" and $PROCEDENCIA<>""){$funciones->ejecutar("insert into PERSONA values('$Id_P','$CIUDAD','$PROCEDENCIA',NULL,UPPER('$NOMBRE'),UPPER('$APELLIDO'),UPPER('$TIPO'),UPPER('$DNI'),UPPER('$TELEFONO'),UPPER('$EMPRESA'))");					}
			else if($DESTINO<>"" and $PROCEDENCIA==""){$funciones->ejecutar("insert into PERSONA values('$Id_P','$CIUDAD',NULL,'$DESTINO',UPPER('$NOMBRE'),UPPER('$APELLIDO'),UPPER('$TIPO'),UPPER('$DNI'),UPPER('$TELEFONO'),UPPER('$EMPRESA'))");					}
						else if($DESTINO=="" and $PROCEDENCIA==""){$funciones->ejecutar("insert into PERSONA values('$Id_P','$CIUDAD',NULL,NULL,UPPER('$NOMBRE'),UPPER('$APELLIDO'),UPPER('$TIPO'),UPPER('$DNI'),UPPER('$TELEFONO'),UPPER('$EMPRESA'))");					}
					
					
					if($funciones){	
						if($CLASE!="" and $PLACA!="" and $COLOR!=""){
							$numero_registros=mysql_num_rows($funciones->ejecutar("select * from AUTO"));
							if($numero_registros>0){
								$Id_A=$matriz[$CANTIDAD_AUTO][19];
								$Id_A=$Id_A+1;
								
							}
							else{
								$Id_A=1;
							}
						$funciones->ejecutar("insert into AUTO values('$Id_A','$Id_P',UPPER('$CLASE'),UPPER('$PLACA'),UPPER('$COLOR'))");	
					}					
						$mensaje='EL HÚESPED HA SIDO REGISTRADO CORRECTAMENTE';
						$imagen='url(../Imagenes/CORRECTO.gif)';?>     
                        <script>
						$('#mensajes').css('display','block');
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
					$mensaje='POR FAVOR VERIFIQUE, YA EXISTE UN HÚESPD REGISTRADO CON ESOS DATOS';
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
<table >
<form action="" method="POST" name="formulario" target="_self" id="form1">
<tr>
	<td width="139" rowspan="15">
        
       <input name="BTN_NUEVO" type="button" class="BTN_ESTADO"value="NUEVO"  id="OPCIONNUEVO"  onclick="ocultar();vaciar();cbx_vacio()"/>
          
        
        <input name="BTN_REGISTRAR" type="submit" class="BTN_GUARDAR" value="REGISTRAR"  id="OPCIONREGISTRAR" disabled="disabled"/>
           
         
        <input name="BTN_MODIFICAR" type="button" class="BTN_ESTADO"value="MODIFICAR"  id="OPCIONMODIFICAR"  onclick="preguntaM(formulario,'<?php echo $matriz[$POSICION][7] ?>')"/>
           
         
        <input name="BTN_ELIMINAR" type="button" class="BTN_ESTADO" value="ELIMINAR"  id="OPCIONELIMINAR" onclick="preguntaE(formulario,'<?php echo $matriz[$POSICION][7] ?>')"/>
            
        
        <input name="BTN_CANCELAR" type="button" class="BTN_VER" value="CANCELAR"  id="OPCIONES" onclick="ver();llenar()" />
            <br />
    </td>
</tr>
<tr height="35">
    <td width="100" height="34" >
    		<label for="LB_BUSCAR" id="label1" class="BUSQUEDA">BUSCAR</label>
    </td>
    <td width="160" >
    		<input name="TXT_BUSCAR" type="search" id="caja" size="20"  value="" width="290px" class="BUSQUEDA" placeholder="DOCUMENTO"/>
    </td>
    <td width="160">
    		
            <input name="BTN_BUSCAR" type="submit" class="BUSQUEDA" value="BUSCAR"  id="OPCIONBUSCAR"/>
    </td>
    <td></td>
</tr>

<?php //////////////////////////////////////////////////////////PERSONA/////////////////////////////////////////////////////////////////////////////// ?>

<tr height="35">
	<td width="100" >
    		<label for="LB_NOMBRE" id="label1">NOMBRE</label>
            <r>*</r>
    </td>
    <td>
    		<input name="TXT_NOMBRE" type="search" id="caja" size="20"  value="<?php echo $matriz[$POSICION][4];?>" Width="290px" class="1" placeholder="NOMBRE" required="required"/>
    </td>
    <td>
    		<input name="TXT_LB_ID" type="search" id="caja"  value="<?php echo $matriz[$POSICION][0]; ?>" size="5"  class="btn_cods" />
    </td>
    <td></td>
</tr>
<tr height="35">
	<td height="34" >
    		<label for="LB_APELLIDO" id="label1">APELLIDO</label>
            <r>*</r>
    </td>
    <td>
    		<input name="TXT_APELLIDO" type="search" id="caja"  value="<?php echo $matriz[$POSICION][5]; ?>" size="20" Width="310px" class="2" placeholder="APELLIDO" required="required"/>
    </td>
    <td>
    		<input type="hidden" name="conta" value="<?=$POSICION?>">
    </td>
    <td></td>
</tr>
<tr>
	<td>
    	<label for="LB_TIPO" id="label1" >DOCUMENTO</label>
        <r>*</r>
    </td>
    <td>
    
      	<select name="CB_TIPO" onfocus="" class="2" style="width:160px;" size="1" id="caja">
        
           	<option value=""></option>
        	<option class="CCDC" value="CC">CEDULA CIUDADANIA</option>
            <option class="CEDC" value="CE">CEDULA EXTRAGERIA</option>
           
        </select>
        <script type="application/javascript">seleccionado('<?php echo $matriz[$POSICION][6]; ?>','DC');</script>
    </td>
    <td>
    </td>
    <td></td>
</tr>	
<tr height="35">
<td height="34" >
    		<label for="LB_DNI" id="label1">DNI</label>
            <r>*</r>
    </td>
    <td>
    		<input name="TXT_DNI" type="search" id="caja"  value="<?php echo $matriz[$POSICION][7]; ?>" size="20" Width="290px" class="2" placeholder="DOCUMENTO" required="required"/>
    </td>
    <td>  
    			
    </td>
    <td></td>
</tr>

<tr height="35">
    <td>
        <label for="LB_LE" id="label1">EXPEDICION</label>
        <r>*</r>
    </td>
    <td><select name="CB_LUGAR_E" id="CB_LUGAR_E" style="width:160px;font-family:Comic Sans MS;	font-size:15px;	border-radius:4px;"  size="1"  class="2" onchange="Proceso_Departamento('CB_LUGAR_E','P','LG_EP','CB_LUGAR_D');">
      <option value="" class=""></option>
      <?php	
				$ejecutar=$funciones->ejecutar("SELECT * FROM LUGAR WHERE TIPO =  'PAIS'");
				while($valores = mysql_fetch_array($ejecutar)){?>
      <option value="<?php echo $valores['ID_LUGAR'] ?>" class="<?php echo $valores['ID_LUGAR'],'LG_EP'; ?>"><?php echo $valores['NOMBRE'] ?></option>
      <?php
	                }
           	?>
            
            
            
    </select>
    </td>
    <td width="160" >

    <select name="CB_LUGAR_D" id="CB_LUGAR_D"  style="width:160px;font-family:Comic Sans MS;	font-size:15px;	border-radius:4px"  size="1" class="1" onchange="Proceso_Ciudad('CB_LUGAR_D','D','LG_ED','CB_LUGAR_C');"  >
     <?php	
				$ejecutar=$funciones->ejecutar("SELECT * FROM LUGAR WHERE TIPO =  'DEPARTAMENTO'");
				while($valores = mysql_fetch_array($ejecutar)){?>
      <option value="<?php echo $valores['ID_LUGAR'] ?>" class="<?php echo $valores['ID_LUGAR'],'LG_ED'; ?>"><?php echo $valores['NOMBRE'] ?></option>
      <?php
                }
           	?>
    </select>
    </td>
    <td width="160" >
   
  <select name="CB_LUGAR_C"   id="CB_LUGAR_C"  size="1" class="1" style="width:160px;font-family:Comic Sans MS;	font-size:15px;	border-radius:4px" >
   <?php	
				$ejecutar=$funciones->ejecutar("SELECT * FROM LUGAR WHERE TIPO =  'CIUDAD'");
				while($valores = mysql_fetch_array($ejecutar)){?>
      <option value="<?php echo $valores['ID_LUGAR'] ?>" class="<?php echo $valores['ID_LUGAR'],'LG_EC'; ?>"><?php echo $valores['NOMBRE'] ?></option>
      <?php
                }
      ?>
  </select>
    </td>
</tr>
<script type="application/javascript">seleccionado('<?php echo $matriz[$POSICION][1] ?>','LG_EC');</script>
<script type="application/javascript">seleccionado('<?php echo $matriz[$POSICION][10] ?>','LG_ED');</script>
<script type="application/javascript">seleccionado('<?php echo $matriz[$POSICION][11] ?>','LG_EP');</script>







<tr height="35">
    <td>
        <label for="LB_LP" id="label1">PROCEDENCIA</label>
    <td><select style="width:160px;font-family:Comic Sans MS;	font-size:15px;	border-radius:4px"  name="CB_LUGAR_PRO_P" id="CB_LUGAR_PRO_P"    size="1"  class="2" onchange="Proceso_Departamento('CB_LUGAR_PRO_P','P','LG_PP','CB_LUGAR_PRO_D');">
      <option value="" class=""></option>
      <?php	
				$ejecutar=$funciones->ejecutar("SELECT * FROM LUGAR WHERE TIPO =  'PAIS'");
				while($valores = mysql_fetch_array($ejecutar)){?>
      <option value="<?php echo $valores['ID_LUGAR'] ?>" class="<?php echo $valores['ID_LUGAR'],'LG_PP'; ?>"><?php echo $valores['NOMBRE'] ?></option>
      <?php
                }
           	?>
    </select>
    
    
    
    <td width="160" ><select name="CB_LUGAR_PRO_D" id="CB_LUGAR_PRO_D" size="1" class="1" onchange="Proceso_Ciudad('CB_LUGAR_PRO_D','D','LG_PD','CB_LUGAR_PRO_C');" style="width:160px;font-family:Comic Sans MS;	font-size:15px;	border-radius:4px" >
    <option value="" ></option>
       <?php	
				$ejecutar=$funciones->ejecutar("SELECT * FROM LUGAR WHERE TIPO =  'DEPARTAMENTO'");
				while($valores = mysql_fetch_array($ejecutar)){?>
      <option value="<?php echo $valores['ID_LUGAR'] ?>" class="<?php echo $valores['ID_LUGAR'],'LG_PD'; ?>"><?php echo $valores['NOMBRE'] ?></option>
      <?php
                }
      ?>
    </select>
    </td>    
    
    <td width="160" >
  <select name="CB_LUGAR_PRO_C" id="CB_LUGAR_PRO_C"  Width="290px" size="1" class="1" style="width:160px;font-family:Comic Sans MS;	font-size:15px;	border-radius:4px" >    
  <option value="" ></option>
  
      <?php	
				$ejecutar=$funciones->ejecutar("SELECT * FROM LUGAR WHERE TIPO =  'CIUDAD'");
				while($valores = mysql_fetch_array($ejecutar)){?>
      <option value="<?php echo $valores['ID_LUGAR'] ?>" class="<?php echo $valores['ID_LUGAR'],'LG_PC'; ?>"><?php echo $valores['NOMBRE'] ?></option>
      <?php
                }
      ?>
  </select>
  <script type="application/javascript">seleccionado('<?php echo $matriz[$POSICION][2] ?>','LG_PC');</script>
  <script type="application/javascript">seleccionado('<?php echo $matriz[$POSICION][12] ?>','LG_PD');</script>
  <script type="application/javascript">seleccionado('<?php echo $matriz[$POSICION][13] ?>','LG_PP');</script>
    </td>
</tr>






<tr height="35">
    <td>
        <label for="LB_LD" id="label1">DESTINO</label>
    <td><select name="CB_LUGAR_DES_P" id="CB_LUGAR_DES_P"  width="290px" size="1"  class="2"  onchange="Proceso_Departamento('CB_LUGAR_DES_P','P','LG_PP2','CB_LUGAR_DES_D');" style="width:160px;font-family:Comic Sans MS;	font-size:15px;	border-radius:4px" >
      <option value="" class=""></option>
      <?php	
				$ejecutar=$funciones->ejecutar("SELECT * FROM LUGAR WHERE TIPO =  'PAIS'");
				while($valores = mysql_fetch_array($ejecutar)){?>
      <option value="<?php echo $valores['ID_LUGAR'] ?>" class="<?php echo $valores['ID_LUGAR'],'LG_PP2'; ?>"><?php echo $valores['NOMBRE'] ?></option>
      <?php
                }
           	?>
    </select>
    
    
    
    
    <td width="160" ><select name="CB_LUGAR_DES_D"  id="CB_LUGAR_DES_D" width="290px" size="1" class="1"   onchange="Proceso_Ciudad('CB_LUGAR_DES_D','D','LG_DP','CB_LUGAR_DES_C');" style="width:160px;font-family:Comic Sans MS;	font-size:15px;	border-radius:4px"  >
      <option value=""></option>
       <?php	
				$ejecutar=$funciones->ejecutar("SELECT * FROM LUGAR WHERE TIPO =  'DEPARTAMENTO'");
				while($valores = mysql_fetch_array($ejecutar)){?>
      <option value="<?php echo $valores['ID_LUGAR'] ?>" class="<?php echo $valores['ID_LUGAR'],'LG_DP'; ?>"><?php echo $valores['NOMBRE'] ?></option>
      <?php
                }
      ?>
    </select>
    </td>
    <td width="160" >
  <select name="CB_LUGAR_DES_C"  id="CB_LUGAR_DES_C"  size="1" class="1" style="width:160px;font-family:Comic Sans MS;	font-size:15px;	border-radius:4px" >  
  <option value=""></option>      
        	 <?php	
				$ejecutar=$funciones->ejecutar("SELECT * FROM LUGAR WHERE TIPO =  'CIUDAD'");
				while($valores = mysql_fetch_array($ejecutar)){?>
      <option value="<?php echo $valores['ID_LUGAR'] ?>" class="<?php echo $valores['ID_LUGAR'],'LG_DC'; ?>"><?php echo $valores['NOMBRE'] ?></option>
      <?php
                }
      ?>         
  </select>
  <script type="application/javascript">seleccionado('<?php echo $matriz[$POSICION][3] ?>','LG_DC');</script>
    <script type="application/javascript">seleccionado('<?php echo $matriz[$POSICION][14] ?>','LG_DP');</script>
  <script type="application/javascript">seleccionado('<?php echo $matriz[$POSICION][15] ?>','LG_PP2');</script>
    </td>
</tr>




<tr height="35">
<td height="34" >
    		<label for="LB_TELEFONO" id="label1">TELÉFONO</label>
    </td>
    <td>
    		<input name="TXT_TELEFONO" type="search" id="caja"  value="<?php echo $matriz[$POSICION][8]; ?>" size="20" Width="290px" class="2" placeholder="TELÉFONO" />
    </td>
    <td>    		
    </td>
    <td></td>
</tr>
<tr height="35">
<td height="34" >
    		<label for="LB_EMPRESA" id="label1">EMPRESA</label>
    </td>
    <td>
    		<input name="TXT_EMPRESA" type="search" id="caja"  value="<?php echo $matriz[$POSICION][9]; ?>" size="20" Width="290px" class="2" placeholder="EMPRESA" />
    </td>
    <td>    		
    </td>
    <td></td>
</tr>	
	
                        
                        <?php //////////////////////////////////////////////////////////AUTO/////////////////////////////////////////////////////////////////////////////// ?>
<tr>
<td colspan="3"><div id="formulario"><b>Auto</b></div></td>
</tr>
<tr height="35">
	<td width="100" >
    		<label for="LB_CLASE" id="label1">CLASE</label>
    </td>
    <td>
    		<input name="TXT_CLASE" type="search" id="caja" size="20"  value="<?php echo $matriz[$POSICION][16];?>" Width="290px" class="1" placeholder="CLASE"/>
    </td>
    <td>
    		<input name="TXT_LB_ID_AUTO" type="search" id="caja"  value="<?php echo $matriz[$POSICION][19]; ?>" size="5"  class="btn_cods" />
    </td>
    <td></td>
</tr>
<tr height="35">
	<td width="100" >
    		<label for="LB_PLACA" id="label1">PLACA</label>
    </td>
    <td>
    		<input name="TXT_PLACA" type="search" id="caja" size="20"  value="<?php echo $matriz[$POSICION][17];?>" Width="290px" class="1" placeholder="PLACA" />
    </td>
    <td>
    
    </td>
    <td></td>
</tr>
<tr height="35">
	<td width="100" >
    		<label for="LB_COLOR" id="label1">COLOR</label>
    </td>
    <td>
    		<input name="TXT_COLOR" type="search" id="caja" size="20"  value="<?php echo $matriz[$POSICION][18];?>" Width="290px" class="1" placeholder="COLOR" />
    </td>
    <td>
    
    </td>
    <td></td>
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
<img src="../Imagenes/alerta.gif" style="width: 60px; height: 60px; position: absolute; left: 989px; top: 372px; z-index: 150; cursor: pointer;" onclick="Emergente_Consultar('Consultar.php');<?php $_SESSION['consultar']='Consultar_Huesped.php'; ?>" />
<?php
	$funciones->cerrar_cnx(); 	
}
		if($mensaje<>''){
?>
<div id="mensajes" style="width:40%;height:20%; position:fixed; z-index:100;background-color:#C09; margin-left:7%; margin-top:-48%;border-top-left-radius:15px; border-top-right-radius:15px;background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#000), to(#1e5b15));
		background: -moz-linear-gradient(top, #000, #1e5b15);filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#000, endColorstr=#1e5b15, GradientType=0);border:#000 3px outset;">
    <div id="informacion" style="width:40%;height:4%; position:fixed; z-index:101;background-color:#000;margin-top:0;border-top-left-radius:10px; border-top-right-radius:10px; font:Gabriola; size:20px;color:#CCC;">
    <center><b>SOADHO</b></center>
    </div>
    <div id="imagen" style="margin-left:5%;margin-top:10%;position:absolute;width:15%;height:50%;background-image:<?php echo $imagen ?>; background-repeat:no-repeat;background-size:100% 100%;z-index:102;">
    </div>
    <div id="mensaje" style="width:70%;height:60%; margin-top:7%;margin-left:23%; font-family:Gabriola;font-size:24px;color:#FFF;">
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