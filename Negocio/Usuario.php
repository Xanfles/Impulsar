<?php
require_once("../Datos/conexion.php");
class Usuario {
    private $id_usu;
    private $usuario;
    private $pass;
    
    
    public function __contruct() {}
    
function __construct($usuario, $pass) {
    $this->id_usu = NULL;
    $this->usuario = $usuario;
    $this->pass = $pass;
}

    
function getId_usu() {
    return $this->id_usu;
}

function getUsuario() {
    return $this->usuario;
}

function getPass() {
    return $this->pass;
}

function setId_usu($id_usu) {
    $this->id_usu = $id_usu;
}

function setUsuario($usuario) {
    $this->usuario = $usuario;
}

function setPass($pass) {
    $this->pass = $pass;
}


    
    //CRUD     
        
        public function buscarUsuario($usuario) {
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="SELECT * FROM Usuarios WHERE(Nombre_Usuario='".$usuario."')";
	    $vector=$objConex->ejecutarTransaccion($sql);
	    return $vector;
	}

}
?>