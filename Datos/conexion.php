<?php
class Conexion
{  private $usuario="root";
   private $clave="";
   private $host="127.0.0.1";
   private $bdatos="ClusterImpulsar";
   private $conex="";
   
   public function __construct(){}
   
   public function abrirConexion()
   { $this->conex=@mysqli_connect($this->host,$this->usuario,$this->clave,$this->bdatos) or die ("Problema de conexion con URL");
    // mysql_select_db($this->bdatos,$this->conex) or die ("Problema de Ubicacion de la BD...");
   }
   
   public function ejecutarTransaccion($sql)
   { $this->abrirConexion();
     $resul=mysqli_query($this->conex,$sql) or die("ERROR :$sql<br>".$sql.mysqli_connect_errno());
     return $resul;   
   }
   
   public function ejecutarConsulta($sql)
   {  $this->abrirConexion();
      $vector=mysqli_query($this->conex,$sql);
	  return $vector;
   }
}
?>