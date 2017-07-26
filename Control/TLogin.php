<?php
session_start();

require_once("../Negocio/Usuario.php");

//Rescatando valores del formulario
if(isset($_POST["usuario"]) && $_POST["usuario"]!="")
{ $usuario=$_POST["usuario"]; }

if(isset($_POST["pass"]) && $_POST["pass"]!="")
{ $password=$_POST["pass"]; }




if(isset($_POST["OK"]) && $_POST["OK"]=="Ingresar")
{ //Trigger insercion
    $objUsuario= new Usuario($usuario, $password);
    $resultUsuario=$objUsuario->buscarUsuario($usuario);
    $rowusuario=mysqli_fetch_array($resultUsuario);
    if ($objUsuario->getUsuario()==$rowusuario[1] && $objUsuario->getPass()==$rowusuario[2]) {
        header("Location:../gestion.php");
    }else{
       header("Location:../login.php"); 
    }
}
?>
