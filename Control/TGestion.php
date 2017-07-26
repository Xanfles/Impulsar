<?php
session_start();

require_once("../Negocio/Asistente.php");

//Rescatando valores del formulario
if(isset($_POST["entrada"]) && $_POST["entrada"]!="")
{ $entrada=$_POST["entrada"]; }

if(isset($_POST["eleccion"]) && $_POST["eleccion"]!="")
{ $eleccion=$_POST["eleccion"]; }




if(isset($_POST["OK"]) && $_POST["OK"]=="Ingresar")
{ //Trigger 
    $obj = new Asistente("", "", "", "", "", "", "", "", "");
    $result=  $obj->modificarAsistencia($entrada);
    
        
    if ($result!="") {
        header("Location:../gestion.php");
    }else{
       header("Location:../gestion.php"); 
    }
}

if(isset($_POST["OK"]) && $_POST["OK"]=="ListarTodos")
{ //Trigger 
    $obj = new Asistente("", "", "", "", "", "", "", "", "");
    $result=  $obj->listarAsistentes();
    $_SESSION["Matrix"]=$result;
    
        
    if ($result!="") {
        
        header("Location:../gestion.php");
    }else{
       header("Location:../gestion.php"); 
    }
}

if(isset($_POST["OK"]) && $_POST["OK"]=="ListarPresentes")
{ //Trigger 
    $obj = new Asistente("", "", "", "", "", "", "", "", "");
    $result=  $obj->listarAsistentes();
    $_SESSION["Matrix"]=$result;
    
        
    if ($result!="") {
        
        header("Location:../gestion.php");
    }else{
       header("Location:../gestion.php"); 
    }
}


?>
