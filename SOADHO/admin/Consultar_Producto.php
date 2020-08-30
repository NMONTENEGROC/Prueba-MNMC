<?php
		$contador=1;
		$imagen='url(../Imagenes/Informacion.gif)';
		$mensaje='';
		date_default_timezone_set('America/Bogota');
		$Fecha_Actual=date('Y-m-d').'T'.date('H:i');
		$funciones->cnx();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="../Imagenes/SOADHO.ico" type="image/x-icon" rel="shortcut icon" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<div id="ELEMENTO" style=" width:820px;height:100%;position:absolute;margin:0;margin-left:0%;">
<style>
.total{text-align:right;padding-right:1%;}
.celda{padding:1%;}
/*.texto{border:none;}*/
</style>
    <div id="Area_Impresion" style="width:720px;background-color:#FFF;margin:0;margin-left:2.5%;margin-top:2.5%;border:2px #000000 solid;border-radius:15px;">
        <div id="Header" style="height:200px;background-color:#FFF;color:White ;position:absolute;width:700px;margin-left:1%;margin-top:1%; z-index:2;padding:0;">
          <div id="Titulo" style="background-color:# FFF;background-image:url(../Imagenes/title_factura.jpg);width:600px;height:30px;position:absolute;margin-left:10%;background-size:100% 100%;"></div>
          <div id="Datos_Hotel" style="background-repeat:no-repeat;background-color:#FFF;background-image:url(../Imagenes/informacion_hotel.jpg);width:85%;height:60%;position:absolute;margin-left:10%;margin-top:60px;background-size:100% 80%;z-index:2;">
                    </div>
        </div>
            <div id="Logo_Hotel" style="padding:2%;width:5%;height:90px;background:url(../Imagenes/logo.png);background-color: #FFF;position:absolute;background-repeat:no-repeat;background-size:100% 80%;margin-top:1%;margin-left:2%;background-position:center;z-index:3;">    	
            </div>            
            <div id="Logo_Proyecto" style="padding: 2%; width: 5%; height: 90px; background: url(../Imagenes/logo.jpg); background-color: #FFF; position: absolute; background-repeat: no-repeat; background-size: 100% 100%; margin-top: 1%; margin-left: 665px; background-position: center; z-index: 3; left: -23px;">  	
            </div>            
        <div id="Datos_Factura" style="background-color: #FFF; width: 713px; height: 67px; position: absolute; margin-top: 160px; z-index: 1; z-index: 5;">        
                        
          <div id="Datos_Recepcionista" style="background-color: #FFF; width: 463px; height: 50px; position: absolute; margin: 0.5%; margin-top: 90px; z-index: 2; border: #003300 dashed 1px; border-radius: 15px; left: 5px; top: -84px;">              
            <div id="I_Recepcionista" style="background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#9bbb40), to(#1e5b15)); background-image: url(../Imagenes/I_Recepcionista.JPG); background-repeat: no-repeat; background-size: 100% 100%; width: 30%; height: 23px; position: absolute; margin: 0; z-index: 3; border: #003300 dashed 1px; border-bottom-right-radius: 7px; border-top-left-radius: 15px; font-family: Gabriola; text-align: left; color: #000; font-size: 26px; padding-left: 2%;"></div>  
            <input type="text" name="Nombre_Recepcionista" readonly="readonly" style="width:60%; height:35%; margin-left:35%; border-radius:10px;border:none;" placeholder="Nombre" class="Texto" value="<?php echo $_SESSION['Nombre_Recepcionista'].' '.$_SESSION['Apellido_Recepcionista']; ?>"/>
            <input name="Documento_Recepcionista" type="text" placeholder="Documento" style="width:30%; height:35%; margin-left:35%; border-radius:10px;border:none;" readonly="readonly" class="Texto" value="<?php echo $_SESSION['DNI'];?>"/>  
            </div>
                      
          <div id="Fecha_Factura" style="background-color: #FFF; width: 30%; height: 50px; position: absolute; margin: 7.8%; margin-left: 440px; z-index: 3; border: #003300 dashed 1px; border-radius: 15px; margin-top: 90px; left: 53px; top: -84px;"> 
            <div id="I_Fecha" style="background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#9bbb40), to(#1e5b15)); background-image: url(../Imagenes/I_Fecha.JPG); background-repeat: no-repeat; background-size: 100% 100%; width: 50%; height: 20px; position: absolute; margin: 0; z-index: 3; border: #003300 dashed 1px; border-bottom-right-radius: 7px; border-top-left-radius: 15px; font-family: Gabriola; text-align: left; color: #000; font-size: 26px; padding-left: 2%; top: 1px; left: 2px;"></div>            
            <input type="text" name="Fecha_Factura" readonly="readonly" style="width:60%; height:50%; margin-left:30%; border-radius:10px; margin-top:11%; border:none; text-align:right;" value="<?php echo $Fecha_Actual;?>" class="Texto"/>       
            </div>            
        </div>
<div id="TUPLAS" style="background-color:#FFF;width:98.3%;margin:0.5%;margin-top:240px;z-index:2;border:#003300 dashed 1px;border-radius:15px;padding:3px;">          
        <table width="98%" style="padding:1%;margin-left:1.3%;font-family:Lucida Sans Unicode;color:#000;border-collapse: collapse;" id="generar">
            	<tr style="width:100%;background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#9bbb40), to(#1e5b15));background: -moz-linear-gradient(top, #9bbb40, #1e5b15);">
                	<td style="width:30%;height:50% ;margin-left:1%;border-top-left-radius:15px;text-align:center;">
                    	NOMBRE
                    </td>
                    <td style="width:20%;text-align:center;padding-left:2%;border-top-right-radius:15px;">
                    	VALOR
                    </td>
                </tr>  
                <?php 
					$ejecucion=$funciones->ejecutar("SELECT * FROM PRODUCTO");
					$clase=2;
					while($datos=mysql_fetch_array($ejecucion)){
						$color=$clase%2;
				?>
                	<tr class="<?php echo $color; ?>">
                    <td style="padding-left:2%;border:#003300 dashed 1px"><?php echo $datos['NOMBRE']; ?></td>
                    <td style="padding-left:2%;border:#003300 dashed 1px"><?php echo $datos['VALOR_UNITARIO']; ?></td>
                    </tr>
                 <?php  
				 	$clase=$clase+1;					
					}
				?>
                <tr style="width:100%;background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#9bbb40), to(#1e5b15));height:3%;">                	<td style="border-bottom-left-radius:10px;padding-left:2%;"><br/></td>
                    <td style="border-bottom-right-radius:10px;"></td>
         		 </tr>
                </table>
                
                 <script> $('.1').css('background-color','#E1FFE3');</script>
        </div>
	</div>
</div>
</body>
</html>