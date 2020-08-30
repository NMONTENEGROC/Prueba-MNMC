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
<style type='text/css'> 
/* Texto giratorio que sigue al cursor */ 
#outerCircleText { 
font-style: italic; 
font-weight: bold; 
font-family: verdana, arial; /* Tipo de letra */ 
color: #000; /* Color del texto */ 

/* No editar esta area */ 
position: absolute;top: 0;left: 0;z-index: 3000;cursor: default;} 
#outerCircleText div {position: relative;} 
#outerCircleText div div {position: absolute;top: 0;left: 0;text-align: center;} 
</style> 
<script type='text/javascript'> 
//<![CDATA[ 
/* Circling text trail- Tim Tilton 
Website: http://www.tempermedia.com/ 
Visit: http://www.dynamicdrive.com/ for Original Source and tons of scripts 
Modified Here for more flexibility and modern browser support 
Modifications as first seen in http://www.dynamicdrive.com/forums/ 
username:jscheuer1 - This notice must remain for legal use 
*/ 

;(function(){ 

// Mensaje 
var msg = "Bienvenidos"; 

// Tamaño de la letra 
var size = 22; 

// Determina si es ovalado o circular, 1 es circular, 2 es ovalado 
var circleY = 0.75; var circleX = 2; 

// Espacio entre cada letra 
var letter_spacing = 5; 

// Diametro del circulo 
var diameter = 10; 

// Velocidad de rotacion 
var rotation = 0.4; 

// Velocidad de reaccion 
var speed = 0.3; 

////////////////////// No editar nada mas ////////////////////// 

if (!window.addEventListener && !window.attachEvent || !document.createElement) return; 

msg = msg.split(''); 
var n = msg.length - 1, a = Math.round(size * diameter * 0.208333), currStep = 20, 
ymouse = a * circleY + 20, xmouse = a * circleX + 20, y = [], x = [], Y = [], X = [], 
o = document.createElement('div'), oi = document.createElement('div'), 
b = document.compatMode && document.compatMode != "BackCompat"? document.documentElement : document.body, 

mouse = function(e){ 
e = e || window.event; 
ymouse = !isNaN(e.pageY)? e.pageY : e.clientY; // y-position 
xmouse = !isNaN(e.pageX)? e.pageX : e.clientX; // x-position 
}, 

makecircle = function(){ // rotation/positioning 
if(init.nopy){ 
o.style.top = (b || document.body).scrollTop + 'px'; 
o.style.left = (b || document.body).scrollLeft + 'px'; 
}; 
currStep -= rotation; 
for (var d, i = n; i > -1; --i){ // makes the circle 
d = document.getElementById('iemsg' + i).style; 
d.top = Math.round(y[i] + a * Math.sin((currStep + i) / letter_spacing) * circleY - 15) + 'px'; 
d.left = Math.round(x[i] + a * Math.cos((currStep + i) / letter_spacing) * circleX) + 'px'; 
}; 
}, 

drag = function(){ // makes the resistance 
y[0] = Y[0] += (ymouse - Y[0]) * speed; 
x[0] = X[0] += (xmouse - 20 - X[0]) * speed; 
for (var i = n; i > 0; --i){ 
y[i] = Y[i] += (y[i-1] - Y[i]) * speed; 
x[i] = X[i] += (x[i-1] - X[i]) * speed; 
}; 
makecircle(); 
}, 

init = function(){ // appends message divs, & sets initial values for positioning arrays 
if(!isNaN(window.pageYOffset)){ 
ymouse += window.pageYOffset; 
xmouse += window.pageXOffset; 
} else init.nopy = true; 
for (var d, i = n; i > -1; --i){ 
d = document.createElement('div'); d.id = 'iemsg' + i; 
d.style.height = d.style.width = a + 'px'; 
d.appendChild(document.createTextNode(msg[i])); 
oi.appendChild(d); y[i] = x[i] = Y[i] = X[i] = 0; 
}; 
o.appendChild(oi); document.body.appendChild(o); 
setInterval(drag, 25); 
}, 

ascroll = function(){ 
ymouse += window.pageYOffset; 
xmouse += window.pageXOffset; 
window.removeEventListener('scroll', ascroll, false); 
}; 

o.id = 'outerCircleText'; o.style.fontSize = size + 'px'; 

if (window.addEventListener){ 
window.addEventListener('load', init, false); 
document.addEventListener('mouseover', mouse, false); 
document.addEventListener('mousemove', mouse, false); 
if (/Apple/.test(navigator.vendor)) 
window.addEventListener('scroll', ascroll, false); 
} 
else if (window.attachEvent){ 
window.attachEvent('onload', init); 
document.attachEvent('onmousemove', mouse); 
}; 

})(); 
//]]> 
</script><style>
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
	width:929px;
	height:137px;
	z-index:1;
	left: 6px;
	top: 13px;
}
.Estilo2 {
	font-size: 30px;
	font-weight: bold;
}
.Estilo3 {font-size: 40px}
#Layer2 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	left: 19px;
	top: 178px;
}
#Layer3 {
	position:absolute;
	width:358px;
	height:250px;
	z-index:1;
	left: 163px;
	top: 156px;
}
#Layer4 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	left: 566px;
	top: 207px;
}
#Layer5 {
	position:absolute;
	width:75px;
	height:194px;
	z-index:1;
}
#Layer6 {
	position:absolute;
	width:457px;
	height:302px;
	z-index:1;
	left: 226px;
	top: 153px;
}
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
		<div id="Layer6"><img src="../IMAGENES/maestro-y-estudiante.gif" width="454" height="299" /></div>
		<p>&nbsp;</p>
		<div class="Estilo2" id="Layer1"> 
		  <div align="center" class="Estilo3"><span style="background: url(http://img.photobucket.com/albums/v226/w8ks8rchick/block10.gif)"> Llega el Sistema Educativo Administrativo que te brindará toda la informacion acerca del plantel Educativo de tus hijos(as) </span></div>
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
