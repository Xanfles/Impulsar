<?php
session_start();

require_once("../Negocio/Asistente.php");
require_once("../Negocio/Cargo.php");
require_once("../Negocio/Empresa.php");


//Rescatando valores del formulario
if(isset($_POST["emp"]) && $_POST["emp"]!="")
{ $empresa=$_POST["emp"]; $id_empresa=NULL;}

if(isset($_POST["car"]) && $_POST["car"]!="")
{ $cargo=$_POST["car"]; $id_cargo=NULL;}

if(isset($_POST["nombre"]) && $_POST["nombre"]!="")
{ $nombre=$_POST["nombre"];}

if(isset($_POST["apellidos"]) && $_POST["apellidos"]!="")
{ $apellidos=$_POST["apellidos"];}

if(isset($_POST["tel"]) && $_POST["tel"]!="")
{ $tel=$_POST["tel"];}

if(isset($_POST["email"]) && $_POST["email"]!="")
{ $email=$_POST["email"];}



if(isset($_POST["OK"]) && $_POST["OK"]=="Ingresar")
{ //Trigger insercion
    $objCargo= new Cargo($id_cargo, $cargo);
    $resultcargo=$objCargo->buscarCargo($cargo);
    $rowcargo = mysqli_fetch_array($resultcargo);
    if ($rowcargo==NULL){
      $objCargo->insertarCargo();
       $resultcargo=$objCargo->buscarCargo($cargo);
       $rowcargo = mysqli_fetch_array($resultcargo);
    }   
    
    
    $objEmpresa=new Empresa($id_empresa, $empresa);
    $resultempresa=$objEmpresa->buscarEmpresa($empresa);
    $rowempresa = mysqli_fetch_array($resultempresa);
    if ($rowempresa==NULL) {
        $objEmpresa->insertarEmpresa();
         $resultempresa=$objEmpresa->buscarEmpresa($empresa);
         $rowempresa = mysqli_fetch_array($resultempresa);
    }else{
    
    $id_asistente=NULL; $codigoentrada=" ";$asistencia=False;
    $codigoentrada=substr($nombre,0,3).substr($apellidos,0,3);
    
    $objAsistente= new Asistente($id_asistente, $nombre, $apellidos, $email, $tel, $asistencia, $codigoentrada, $rowcargo[0], $rowempresa[0]);
   
    $result=$objAsistente->insertarAsistente();
    
    if($result!=""){
        header("Location:../login.php");
    }
    else{ 
        header("Location:../index.php");
    } 
    
      
    
 

}header("Location:../index.php");}
?>
