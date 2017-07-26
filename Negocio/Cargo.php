<?php
require_once("../Datos/conexion.php");
class Cargo {
    private $id_cargo;
    private $nombre_cargo;
    
    
    public function __contruct() {}
    
    public function Cargo($id_cargo, $nombre_cargo) {
        $this->id_cargo=$id_cargo;
        $this->nombre_cargo=$nombre_cargo;
    }
    function getId_cargo() {
        return $this->id_cargo;
    }

    function getNombre_cargo() {
        return $this->nombre_cargo;
    }

    function setId_cargo($id_cargo) {
        $this->id_cargo = $id_cargo;
    }

    function setNombre_cargo($nombre_cargo) {
        $this->nombre_cargo = $nombre_cargo;
    }

    
    
    
    
    //CRUD
	public function insertarCargo() {
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="INSERT INTO Cargos VALUES('".$this->id_cargo."','".$this->nombre_cargo."')";
	    $resul=$objConex->ejecutarTransaccion($sql);
	    return $resul;               
            
            
	}
	public function listarComuna() {
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="SELECT * FROM Cargos";
	    $matrix=$objConex->ejecutarTransaccion($sql);
	    return $matrix;
	}
        
        
        public function buscarCargo($nombre_cargo) {
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="SELECT * FROM Cargos WHERE(NombreCargo='".$nombre_cargo."')";
	    $vector=$objConex->ejecutarTransaccion($sql);
	    return $vector;
	}

}
?>