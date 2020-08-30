<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="../Imagenes/SOADHO.ico" type="image/x-icon" rel="shortcut icon" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Informes</title>
</head>

<body>

<div id="Contenido1" style="width:80%;height:100%;position:absolute;margin:0;margin-left:0%;">
    <div id="Area_Impresion" style="width:95%;background-color:#FFF;margin:0;margin-left:2.5%;margin-top:2.5%;border:2px #000000 solid;border-radius:15px;">
        <div id="Header" style="height:18%;background-color:#FFF;color:White ;position:absolute;width:88%;margin-left:1%;margin-top:1%; z-index:2;padding:0;">
                    <div id="Titulo" style="background-color:# FFF;background-image:url(../Imagenes/title_factura.jpg);width:85%;height:34%;position:absolute;margin-left:10%;background-size:100% 100%;">
                    </div>
                    <div id="Datos_Hotel" style="background-color:#FFF;background-image:url(../Imagenes/informacion_hotel.jpg);width:85%;height:60%;position:absolute;margin-left:10%;margin-top:5%;background-size:100% 100%;">
                    </div>
        </div>
            <div id="Logo_Hotel" style="padding:2%;width:5%;height:12%;background:url(../Imagenes/logo.png);background-color: #CCC;position:absolute;background-repeat:no-repeat;background-size:100% 100%;margin-top:1%;margin-left:2%;background-position:center;z-index:3;">    	
            </div>
            
            <div id="Logo_Proyecto" style="padding:2%;width:5%;height:12%;background:url(../Imagenes/logo.jpg);background-color: #CCC;position:absolute;background-repeat:no-repeat;background-size:100% 100%;margin-top:1%;margin-left:82.6%;background-position:center;z-index:3;">    	
            </div>
            
        <div id="Datos_Factura" style="background-color:#FFF;width:95%;height:20%;position:absolute;margin-top:10%;z-index:1;">
          <div id="Datos_Recepcionista" style="background-color:#FFF;width:68%;height:44%;position:absolute;margin:0.5%;margin-top:7.8%;z-index:2;border:#003300 dashed 1px;border-radius:15px;"> 
             
            <div id="I_Recepcionista" style="background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#9bbb40), to(#1e5b15));background-image:url(../Imagenes/I_Recepcionista.JPG);background-repeat:no-repeat;background-size:100% 100%;width:30%;height:30%;position:absolute;margin:0;z-index:3;border:#003300 dashed 1px;border-bottom-right-radius:7px;border-top-left-radius:15px;font-family:Gabriola;text-align:left;color:#000;font-size:26px;padding-left:2%;"></div>  
            <input type="text" name="Nombre_Recepcionista" readonly="readonly" style="width:60%; height:35%; margin-left:35%; border-radius:10px;border:none;" placeholder="Nombre" class="Texto" value="<?php echo $_SESSION['Nombre_Recepcionista'].' '.$_SESSION['Apellido_Recepcionista']; ?>"/>
            <input name="Documento_Recepcionista" type="text" placeholder="Documento" style="width:30%; height:35%; margin-left:35%; border-radius:10px;border:none;" readonly="readonly" class="Texto" value="<?php echo $_SESSION['DNI'];?>"/>  
            </div>
           
          
            <div id="Fecha_Factura" style="background-color:#FFF;width:30%;height:44%;position:absolute;margin:7.8%;margin-left:69%;z-index:3;border:#003300 dashed 1px;border-radius:15px;"> 
            <div id="I_Fecha" style="background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#9bbb40), to(#1e5b15));background-image:url(../Imagenes/I_Fecha.JPG);background-repeat:no-repeat;background-size:100% 100%;width:50%;height:30%;position:absolute;margin:0;z-index:3;border:#003300 dashed 1px;border-bottom-right-radius:7px;border-top-left-radius:15px;font-family:Gabriola;text-align:left;color:#000;font-size:26px;padding-left:2%;"></div>
            
            <input type="text" name="Fecha_Factura" readonly="readonly" style="width:60%; height:50%; margin-left:30%; border-radius:10px; margin-top:6%; border:none; text-align:right;" value="<?php echo $Fecha_Actual;?>" class="Texto"/>       
            </div>
            
        </div>
        <div id="Items" style="background-color:#FFF;width:98.3%;height:44%;margin:0.5%;margin-top:26%;z-index:2;border:#003300 dashed 1px;border-radius:15px;">                                      
          	<table width="98%" style="padding:1%;margin-left:1.3%;font-family:Lucida Sans Unicode;color:#000;font-size:13px;">
            	<tr style="width:100%;border:1px solid #F00;background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#9bbb40), to(#1e5b15));">
                	
                </tr>
                
                <tr style="width:100%;border:1px solid #F00;padding-left:2%;">
                	
                </tr>
            </table>
        </div>


</div>
</body>
</html>