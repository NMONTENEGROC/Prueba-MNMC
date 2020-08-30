<?php
class Fc{	
	static $_instance;
	private $connection;
	public static function getInstance(){
      if (!(self::$_instance instanceof self)){
         self::$_instance=new self();
      }
      return self::$_instance;
   }
  
	public function cnx(){
	$this->connection=(mysql_connect('localhost','root','1234'));
	mysql_select_db('SOADHO2',$this->connection);
	date_default_timezone_set("America/Bogota");
	setlocale(LC_TIME,"spanish","es_CO");
	@mysql_query("SET NAMES 'utf8'");
	
	}
	
	public function cerrar_cnx(){
		mysql_close($this->connection);
		}
	
	private $ejecucion;
	public function ejecutar($query){
	$this->ejecucion=mysql_query($query,$this->connection);
	return $this->ejecucion;
	}


private $POSICION;	
public function botones($CANTIDAD){
if(isset($_POST['BTN_SIGUIENTE'])){
	$this->POSICION=$_POST["conta"]+1;
	if($this->POSICION>$CANTIDAD) {
		$this->POSICION=1;
	}
}
else{
	$this->POSICION=1;
	}
if(isset($_POST['BTN_ANTERIOR'])){
	$this->POSICION=$_POST["conta"]-1;
	if($this->POSICION<1) {
		$this->POSICION=$CANTIDAD;
	} 
}
if(isset($_POST['BTN_INICIO'])){
	$this->POSICION=1; 
}
if(isset($_POST['BTN_FIN'])){
	$this->POSICION=$CANTIDAD; 
}
return $this->POSICION;

	}

	
	function cargar_Departamentos($cb_lugar_e,$val){	
				$ejecutar=$this->ejecutar("SELECT * FROM LUGAR WHERE TIPO =  'DEPARTAMENTO' AND ID_LUGAR_DEPENDIENTE='$cb_lugar_e'");?>
                <option value="" class="vacio_cbx"> </option>
				<?php while($valores = mysql_fetch_array($ejecutar)){?>
      <option value="<?php echo $valores['ID_LUGAR'] ?>" class="<?php echo $valores['ID_LUGAR'],$val; ?>"><?php echo $valores['NOMBRE'] ?></option>
      <?php
                }
				
      }
	  
	  
	  function cargar_Ciudades($cb_lugar_e,$val){		
				$ejecutar=$this->ejecutar("SELECT * FROM LUGAR WHERE TIPO =  'CIUDAD' AND ID_LUGAR_DEPENDIENTE='$cb_lugar_e'");?>
				<option value="" > </option>
                <option value="" class="vacio_cbx" > </option>
				<?php while($valores = mysql_fetch_array($ejecutar)){?>
      <option value="<?php echo $valores['ID_LUGAR'] ?>" class="<?php echo $valores['ID_LUGAR'],$val; ?>"><?php echo $valores['NOMBRE'] ?></option>
      <?php
                }
      }

	  function cargar_elementos(){		
				$ejecutar=$this->ejecutar("SELECT * FROM PRODUCTO");?>
				<option value="" > </option>
                <option value="" class="vacio_cbx" > </option>
				<?php while($valores = mysql_fetch_array($ejecutar)){?>
      <option value="<?php echo $valores['ID_PRODUCTO'] ?>" class="<?php echo $valores['ID_PRODUCTO']; ?>"><?php echo $valores['NOMBRE'] ?></option>
      <?php
                }
      }	 


	}

?>