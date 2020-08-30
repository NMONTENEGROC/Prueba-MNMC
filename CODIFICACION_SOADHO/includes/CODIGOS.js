// JavaScript Document

//////////////////////////////////////////////////////FACTURACION/////////////////////////////////////////////




function valor_habitacion_modificada(){
	 var tbl = document.getElementById('generar');
	var cantidad_r=(tbl.rows.length)-2;
	var total_factura=0;
	var texto = 0;
	var i;
	for(i=1; i<= cantidad_r; i = i+1) {
		 texto = document.getElementById('valor_totaltm'+(i)).innerHTML;
		 texto=texto.slice(1);	
		 total_factura=parseInt(texto)+parseInt(total_factura);	
	};
	var habitacion = $('#valor_habitacion').prop('value');
	total_factura=parseInt(total_factura)+parseInt(habitacion);
	var iva=parseInt(total_factura)*0.16;
	var subtotal=parseInt(total_factura)-parseInt(iva);
	document.all('Txt_Valor_Iva').innerText ='$'+iva;
	document.all('Txt_Valor_Subtotal').innerText ='$'+subtotal;
	 var abono = document.getElementById('Txt_Abono').innerHTML;
	 abono=abono.slice(1);
	 $('#Txt_Valor_Total2').prop('value', total_factura);
	document.all('total_factura').innerText ='$'+(parseInt(total_factura)-parseInt(abono));
}




				function aja(id){$.ajax({
				 type: "post", url: "servicios.php",data: {},success: function(response){
					 var asd=response;
					document.getElementById(id).innerHTML="";
					$("#"+id).append(asd);}});
				}	
				    var cont=0;		
		
					function generar_fila(){
						var selec='cantidadtm'+cont;
						var selec2='descripciontm'+cont;
						if(cont==0 || (!document.getElementById(selec).value=='' &&  !document.getElementById(selec2).value=='') ){
						cont=cont+1;
						 var tbl = document.getElementById('generar');
						 var lastRow = tbl.rows.length;
						 var row = tbl.insertRow(lastRow);						
						 var cantidad = row.insertCell(0);
						 var descripcion = row.insertCell(1);
						 var valor_u= row.insertCell(2);
						 var valor_total = row.insertCell(3);					
						 cantidad.innerHTML = '<input type="number" name="cantidad" id="cantidadtm'+cont+'" class="'+cont+'" size="20" onkeyup="facturacajas($(this).attr(\'class\'),cont);"/><label for="cantidadl" class="'+cont+'"  id="cantidadtml'+cont+'"></label>';
						 descripcion.innerHTML = '<label for="descripcionl"  id="descripciontml'+cont+'"></label><select name="descripcion" id="descripciontm'+cont+'" class="'+cont+'" onchange="facturacajas($(this).attr(\'class\'),cont);"></select>';
						 aja('descripciontm'+cont);
						 valor_u.innerHTML = '<label for="descripcion" id="valor_unitariotm'+cont+'"></label>';
						 valor_total.innerHTML = '<label for="descripcion" id="valor_totaltm'+cont+'"></label>';						
						 return false; 
						 }
						else{alert('Por Favor,Dijite una cantidad y elija un producto');}
				}

function facturacajas(caja,cantidad_t){
	var elemento='descripciontm'+caja;
	factura(elemento,caja,cantidad_t);
}

function factura(elemento,caja,cantidad_r){
	var CONTA=caja;
	var cantidadp='cantidadtm'+caja;
	var combo = document.getElementById(elemento); 	
	var ID=document.getElementById(elemento).value;
	var NOMBRE = combo.options[combo.selectedIndex].text; 
	var CANTIDAD=document.getElementById(cantidadp).value;	
		var label_c='cantidadtml'+caja;
		document.all(label_c).innerText =CANTIDAD+' Unidade(s)';
		$('#cantidadtml'+caja).css('display','none');		
		var label_d='descripciontml'+caja;
		document.all(label_d).innerText =NOMBRE;
		$('#descripciontml'+caja).css('display','none');
	if(!ID==""){
		$.ajax({
		 data: "NOMBRE="+NOMBRE+"&CANTIDAD="+CANTIDAD+"&CONTA="+CONTA+"&CANTIDAD_R="+cantidad_r,
		 url: "Procesar_Factura.php",
		 type: 'post',
		 success: function (response) {
		 var asd=response;
		 $('#Contenido1').append(asd);}});
	}
}

function mostrar_total_factura(valor,total,conta,cantidad_r){
	document.all('valor_unitariotm'+conta).innerText ='$'+valor; 	
	document.all('valor_totaltm'+conta).innerText ='$'+total; 	
	var total_factura=0;
	var texto = 0;
	var i;
	for(i=1; i<= cantidad_r; i = i+1) {
		 texto = document.getElementById('valor_totaltm'+(i)).innerHTML;
		 texto=texto.slice(1);	
		 total_factura=parseInt(texto)+parseInt(total_factura);	
	};
	var habitacion = $('#valor_habitacion').prop('value');
	total_factura=parseInt(total_factura)+parseInt(habitacion);
	var iva=parseInt(total_factura)*0.16;
	var subtotal=parseInt(total_factura)-parseInt(iva);
	document.all('Txt_Valor_Iva').innerText ='$'+iva;
	document.all('Txt_Valor_Subtotal').innerText ='$'+subtotal;
	 var abono = document.getElementById('Txt_Abono').innerHTML;
	 abono=abono.slice(1);
	 $('#Txt_Valor_Total2').prop('value', total_factura);
	document.all('total_factura').innerText ='$'+(parseInt(total_factura)-parseInt(abono));
}

function inicio(){
	var habitacion = $('#valor_habitacion').prop('value');
	total_factura=parseInt(habitacion);
	var iva=parseInt(total_factura)*0.16;
	var subtotal=parseInt(total_factura)-parseInt(iva);
	document.all('Txt_Valor_Iva').innerText ='$'+iva;
	document.all('Txt_Valor_Subtotal').innerText ='$'+subtotal;
		var abono = document.getElementById('Txt_Abono').innerHTML;
	 abono=abono.slice(1);
	 $('#Txt_Valor_Total2').prop('value', total_factura);
	document.all('total_factura').innerText ='$'+(parseInt(total_factura)-parseInt(abono));
	var val=document.getElementById('valor_habitacion').value;	
	document.all('hb').innerText =val;
	$('#hb').css('display','none');
}




 $("input[type=file]").filestyle({
     image: "foto.jpg",
     imageheight : 22,
     imagewidth : 82,
     width : 250

 });
function llenar(){
	window.location.reload();
}
function chekeado(){
	var seleccion="'"+document.getElementById(Consulta).value+"'";
	return (seleccion);
}
function ocultar_codigos(){
$('.btn_cods').css('display','none');
}
function ocultar(){
$('.BTN_NAVEGACION').css('display','none');
$('.BTN_GUARDAR').attr('id','OPCIONES');
$('.BTN_GUARDAR').prop('disabled', false).css('margin-top','8pt');
$('.BTN_ESTADO').css('background-color','gray');
$('.BTN_ESTADO').css('color','black');
$('.BTN_ESTADO').prop('disabled', true);
$('.BTN_VER').css('display','block');
$('.BUSQUEDA').css('display','none');
}

function cbx_vacio(){
$('.vacio_cbx').prop('selected', 'selected');
}

function requerido_false(){
$('.2').removeAttr('required');
}
function requerido_true(){
$('.2').attr('required','required');
}

function ver(){
$('.BTN_NAVEGACION').css('display','inline');
$('.BTN_GUARDAR').attr('id','OPCIONREGISTRAR');
$('.BTN_GUARDAR').css('background-color','gray');
$('.BTN_GUARDAR').css('color','black');
$('.BTN_GUARDAR').prop('disabled', true);
$('.BTN_ESTADO').prop('disabled', false);
$('.BTN_VER').css('display','none');
$('.BUSQUEDA').css('display','block');
$('.BTN_ESTADO').css('background-color','#000');
$('.BTN_ESTADO').css('color','#ac9966');
}

function vaciar(){
$('.1').prop('value', '');
$('.2').prop('value', '');
$('.3').prop('value', '');
$('.CB_COMPLETO').prop('value', '');
$('.CB_FILTRADO').prop('value', '');
}
function defecto(elemento,valor){
$('.'+elemento).prop('value', valor);
}

function preguntaE(formulario,nombre){ 
    if (confirm('¿ESTAS SEGURO DE ELIMINAR EL REGISTRO: '+ nombre +' ?')){ 
		$('#OPCIONELIMINAR').prop('type','submit');
       formulario.submit() 
    } 
	else{
	formulario.submit() ;
	alert("NO SE ELIMINO EL REGISTRO!!");
	}

}

function preguntaM(formulario,nombre){ 
    if (confirm('¿ESTAS SEGURO DE MODIFICAR EL REGISTRO: '+ nombre +' ?')){ 
		$('#OPCIONMODIFICAR').prop('type','submit');
       formulario.submit(); 
    } 
	else{
	formulario.submit() ;
	alert("NO SE MODIFICO EL REGISTRO!!");
	}
}


function seleccionado(valor,L){ 
		$('.'+valor+L).prop('selected', 'selected'); 
}

function combo_mostrar(LB_B,LB_H,CB_BF,CB_HF,TP){
	var TIPO=document.getElementById(TP).value;
	$('#'+LB_B).css('display','none');
	$('#'+LB_H).css('display','none');		
	$('.CB_FILTRADO').css('display','none');
	$('#MOSTRAR_'+TIPO).css('display','block');
	$('#CB_'+TIPO+'_NUEVO').css('display','block');
}


function ocultarCB(TP){
var TIPO=document.getElementById(TP).value;
$('#CB_'+TIPO+'_NUEVO').css('display','block');
}
function mostrarCB(TP){
var TIPO=document.getElementById(TP).value;
$('#CB_'+TIPO+'_NUEVO').css('display','block');
}


function quitaralmacenado(bloque){
	var id = document.getElementById(bloque);
id.remove(id.length-1);

}




///////////////////////////////////////////////////////////////////////////////
	
function Proceso_Departamento(combo,Tipo, clase,cb_imprimir){
var valor=document.getElementById(combo).value;
var tipo = Tipo;
$.ajax({
data: "valor="+valor+"&tipo="+tipo+"&clase="+clase,
url: "Procesar_Departamentos.php",
type: 'post',
success: function (response) {
var asd=response;
document.getElementById(cb_imprimir).innerHTML="";
$("#"+cb_imprimir).append(asd);
}
});
}


function Proceso_Ciudad(combo,Tipo, clase,cb_imprimir){
var valor=document.getElementById(combo).value;
var tipo = Tipo;
$.ajax({
data: "valor="+valor+"&tipo="+tipo+"&clase="+clase,
url: "Procesar_Ciudades.php",
type: 'post',
success: function (response) {
var asd=response;
document.getElementById(cb_imprimir).innerHTML="";
$("#"+cb_imprimir).append(asd);
}
});
}


/////////////////////////////////////////////////////////////////////////////////////
function refrescar(boton1){
	var pos=document.getElementById('conta').value;
	var boton=boton1;
	$.ajax({
     data: "posicion="+pos+"&boton="+boton,
	 url: "Bloque.php",
	 type: 'post',
	 success: function (response) {
	 var asd=response;
	 jQuery('#todo').remove();
	 $('#formulario').append(asd);}});
}

/////////////////////////////////////////////////////////////////////////////FACTURACION

function Envio_Datos(TIPO,BLOQUE,HABITACION,HUESPED){
var ID_TIPO=document.getElementById(TIPO).value;	
var ID_HUESPED=document.getElementById(HUESPED).value;
if(ID_TIPO='Habitacion'){var ID_RESERVADO=document.getElementById(HABITACION).value;}
if(ID_TIPO='Bloque'){var ID_RESERVADO=document.getElementById(BLOQUE).value;}
window.location="FacturacionPrueba.php";
imprimir();
}

function imprimir(ID_HUESPED){
	$('#Nombre_Cliente').prop('value', ID_HUESPED);
	alert(ID_HUESPED);
}






//////////////////////////////////////////////////////////////////////VENTANAS EMERGENTES
var Cerrar_Emergente_Login
var Cerrar_Emergente_Registro
function Cerrar_Emergente_Login(url){  //registrarse
	window.close("Emergentes");
	var ventana_secundaria_registro=window.open(url,"Proceso","width=530,height=550,top=90,left=450");
}

function Emergente_Login_Registro(url){
	var ventana_secundaria_login=window.open(url,"Emergentes","width=330,height=400,top=150,left=550,max-width=330,max-height=400");
}

function Cerrar_Emergente_Registro(){
		window.close("Emergentes");
		window.close("Proceso");
}

function Emergente_Consultar(url){
	var ventana_secundaria_consulta=window.open(url,"Consulta","width=800,height=650,top=5,left=300");
}







/////////////////////////////////////////////////////////////////////////IMPRIMIR

			
	
	function IMP(capa){	
	 var tbl = document.getElementById('generar');
var IMPRIMIR=document.getElementById(capa);
var pop=window.open('','blank');
pop.document.write(IMPRIMIR.innerHTML);
pop.print('');
pop.close('');
	}
	
	
			
			

function IMP2(capa){	
$('#valor_habitacion').css('display','none');
$('#vlr_hb').css('display','block');
$('#Txt_Observaciones').css('display','none');
$('#lb_obser').css('display','block');
document.all('lb_obser').innerText=document.getElementById('Txt_Observaciones').value;
document.all('vlr_hb').innerText =document.getElementById('valor_habitacion').value;

	 var tbl = document.getElementById('generar');
	 var lastRow = tbl.rows.length;
		for(i=1; i<= (lastRow-2); i = i+1) {
		 $('#cantidadtml'+i).css('display','block');
		 $('#cantidadtm'+i).css('display','none');
		 $('#descripciontml'+i).css('display','block');
		 $('#descripciontm'+i).css('display','none');	
};
			
			
			


var IMPRIMIR=document.getElementById(capa);
var pop=window.open('','blank');
pop.document.write(IMPRIMIR.innerHTML);
pop.print('');
pop.close('');








$('#Txt_Observaciones').css('display','block');
$('#lb_obser').css('display','none');
$('#valor_habitacion').css('display','block');
$('#vlr_hb').css('display','none');
	 var tbl = document.getElementById('generar');
	 var lastRow = tbl.rows.length;
		for(i=1; i<= (lastRow-2); i = i+1) {
		 $('#cantidadtml'+i).css('display','none');
		 $('#cantidadtm'+i).css('display','block');
		 $('#descripciontml'+i).css('display','none');
		 $('#descripciontm'+i).css('display','block');	
			};
}

function pdf(DOC){
	 var tbl = document.getElementById('generar');
	 var lastRow = tbl.rows.length;
		for(i=1; i<= (lastRow-2); i = i+1) {
		 $('#cantidadtml'+i).css('display','block');
		$('#descripciontml'+i).css('display','block');
		 $('#cantidadtm'+i).css('display','none');		 
		 $('#descripciontm'+i).css('display','none');		
		};
	
	
	$.ajax({
     data: "IMPRIMIR="+DOC,
	 url: "PDF.php",
	 type: 'POST',
	 success: function (response) {
	 var asd=response;
	 $('#Contenido1').append(asd);}});
}
//////////////////////////////////////////////////////////////////////////FACTURA REGISTRO DE ITEMS
function registrar_items(factura){
	var factura=factura;
	var tbl = document.getElementById('generar');
	var lastRow = tbl.rows.length;
    var cont=lastRow-2;
	var tuplas = new Array(cont);
	var tuplas2= new Array(cont);
	for(i=1; i<=cont; i=i+1) {
		   tuplas[i] = document.getElementById('descripciontml'+(i)).innerHTML;	
		   tuplas2[i] = document.getElementById('cantidadtml'+(i)).innerHTML;
	}
	var arv =tuplas.toString();
	var arv2 =tuplas2.toString();
	$.ajax({
     data:"Nombres="+arv+"&Cantidad="+arv2+"&cont="+cont+"&idfactura="+factura,
	 url: "Items.php",
	 type: 'POST',
	 success: function (response) {
	 var asd=response;
	 $('#Contenido1').append(asd);}});
}
function factura_detalle(factura){
	var val=document.getElementById('valor_habitacion').value;	
	var val_t=document.getElementById('Txt_Valor_Total2').value;
	$.ajax({
     data:"Habitacion="+val+"&Total="+val_t+"&Factura="+factura,
	 url: "Detalle.php",
	 type: 'POST',
	 success: function (response) {
	 var asd=response;
	 $('#Contenido1').append(asd);}});
}

