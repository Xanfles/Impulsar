<?php
require_once("../Datos/conexion.php");
class Empresa {
    private $id_empresa;
    private $nombre_empresa;
    
    
    public function __contruct() {}
    
    public function Empresa($id_empresa, $nombre_empresa) {
        $this->id_empresa=$id_empresa;
        $this->nombre_empresa=$nombre_empresa;
    }
   
    
    //Getter
    function getId_empresa() {
        return $this->id_empresa;
    }

    function getNombre_empresa() {
        return $this->nombre_empresa;
    }

    //Setter
    function setId_empresa($id_empresa) {
        $this->id_empresa = $id_empresa;
    }

    function setNombre_empresa($nombre_empresa) {
        $this->nombre_empresa = $nombre_empresa;
    }

        
    
    
    
    
    
    //CRUD
	public function insertarEmpresa() {
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="INSERT INTO Empresas VALUES('".$this->id_empresa."','".$this->nombre_empresa."')";
	    $resul=$objConex->ejecutarTransaccion($sql);
	    return $resul;               
            
            
	}
	
	
	
	
	public function listarComuna() {
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="SELECT * FROM Empresas";
	    $matrix=$objConex->ejecutarTransaccion($sql);
	    return $matrix;
	}
        
        
          public function buscarEmpresa($nombre_empresa) {
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="SELECT * FROM Empresas WHERE(NombreEmpresa='".$nombre_empresa."')";
	    $vector=$objConex->ejecutarTransaccion($sql);
	    return $vector;
	}
        
        
}
?>