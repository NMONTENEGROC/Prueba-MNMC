<?php
/*class bd{
	public $connection;
	public function cnx(){
	$connection=(mysql_connect('localhost','root','1234'));
	mysql_select_db('SOADHO');
	date_default_timezone_set("America/Bogota");
	setlocale(LC_TIME,"spanish","es_CO");
	}
}*/

 // Clase encargada de gestionar las conexiones a la base de datos 
Class Fc{

   private $servidor='localhost';
   private $usuario='root';
   private $password='1234';
   private $base_datos='SOADHO';
   private $connection;
   private $stmt;
   private $array;

   static $_instance;

 /*  //La función construct es privada para evitar que el objeto pueda ser creado mediante new
   private function __construct(){
      $this->conectar();
   }

   //Evitamos el clonaje del objeto. Patrón Singleton
   private function __clone(){ }*/

   //Función encargada de crear, si es necesario, el objeto. Esta es la función que debemos llamar desde fuera de la clase para instanciar el objeto, y así, poder utilizar sus métodos
   public static function getInstance(){
      if (!(self::$_instance instanceof self)){
         self::$_instance=new self();
      }
      return self::$_instance;
   }

   //Realiza la conexión a la base de datos.
   private function cnx(){
      $this->connection=mysql_connect($this->servidor, $this->usuario, $this->password);
      mysql_select_db($this->base_datos,$this->connection);
      @mysql_query("SET NAMES 'utf8'");
   }

   //Método para ejecutar una sentencia sql
   public function ejecutar($sql){
      $this->stmt=mysql_query($sql,$this->connection);
      return $this->stmt;
   }
   //Método para obtener una fila de resultados de la sentencia sql
   public function obtener_fila($stmt,$fila){
      if ($fila==0){
         $this->array=mysql_fetch_array($stmt);
      }else{
         mysql_data_seek($stmt,$fila);
         $this->array=mysql_fetch_array($stmt);
      }
      return $this->array;
   }

   //Devuelve el último id del insert introducido
   public function lastID(){
      return mysql_insert_id($this->connection);
   }

}
?>