<?php
require_once("../Datos/conexion.php");
class Asistente {
    private $id_asistente;
    private $nombre_asistente;
    private $apellidos;
    private $correo;
    private $telefono;
    private $asistencia;
    private $codigoentrada;
    private $id_cargo;
    private $id_empresa;
    
    public function __contruct() {}
    
    public function Asistente($id_asistente, $nombre_asistente, $apellidos,$correo,$telefono, $asistencia,$codigoentrada,$id_cargo,$id_empresa ) {
        $this->id_asistente=$id_asistente;
        $this->nombre_asistente=$nombre_asistente;
        $this->apellidos=$apellidos;
        $this->correo=$correo;
        $this->telefono=$telefono;
        $this->asistencia=$asistencia;
        $this->codigoentrada=$codigoentrada;
        $this->id_cargo=$id_cargo;
        $this->id_empresa=$id_empresa;
    }
   
    //Setters
    function setId_asistente($id_asistente) {
        $this->id_asistente = $id_asistente;
    }

    function setNombre_asistente($nombre_asistente) {
        $this->nombre_asistente = $nombre_asistente;
    }

    function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setAsistencia($asistencia) {
        $this->asistencia = $asistencia;
    }

    function setCodigoentrada($codigoentrada) {
        $this->codigoentrada = $codigoentrada;
    }

    function setId_cargo($id_cargo) {
        $this->id_cargo = $id_cargo;
    }

    function setId_empresa($id_empresa) {
        $this->id_empresa = $id_empresa;
    }

        
    //Getters
    function getId_asistente() {
        return $this->id_asistente;
    }

    function getNombre_asistente() {
        return $this->nombre_asistente;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getAsistencia() {
        return $this->asistencia;
    }

    function getCodigoentrada() {
        return $this->codigoentrada;
    }

    function getId_cargo() {
        return $this->id_cargo;
    }

    function getId_empresa() {
        return $this->id_empresa;
    }

    
    //CRUD
	public function insertarAsistente() {
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="INSERT INTO Asistentes VALUES('".$this->id_asistente."','".$this->nombre_asistente."','".$this->apellidos."','".$this->correo."','".$this->telefono."','".$this->asistencia."','".$this->codigoentrada."','".$this->id_cargo."','".$this->id_empresa."')";
	    $resul=$objConex->ejecutarTransaccion($sql);
	    return $resul;
	}
	public function modificarAsistencia($codigoentrada) {
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="UPDATE Asistentes SET Asistencia=True WHERE(CodigoEntrada='".$codigoentrada."')";
	    $resul=$objConex->ejecutarTransaccion($sql);
	    return $resul;
	}
	
	//QUERY
	public function buscarAsistente($id_asistente) {
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="SELECT * FROM Asistentes WHERE(Id_Asistentes='".$id_asistente."')";
	    $vector=$objConex->ejecutarTransaccion($sql);
	    return $vector;
	}
	public function listarAsistentes() {
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="SELECT * FROM Asistentes";
	    $matrix=$objConex->ejecutarTransaccion($sql);
	    return $matrix;
	}
        public function contarAsistente() {
        $objConex= new Conexion();
	    $objConex->abrirConexion();
	    $sql="select count(*) from Asistentes;";
	    $vector=$objConex->ejecutarTransaccion($sql);
	    return $vector;
	}
        
}
?>
