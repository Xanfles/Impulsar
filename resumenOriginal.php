<!DOCTYPE html>
<html>
    <?php session_start();
       
    ?>

<head>

	<script language="javascript">
function printdiv(printpage)
{
var headstr = "<html><head><title></title></head><body>";
var footstr = "</body>";
var newstr = document.all.item(printpage).innerHTML;
var oldstr = document.body.innerHTML;
document.body.innerHTML = headstr+newstr+footstr;
window.print();
document.body.innerHTML = oldstr;
return false;
}
</script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ticket</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css">
</head>

<body>
    <div class="table-responsive" id="div_print" >
        
         <?php 
         
         $asistente=$_SESSION["Asistente"];
         
         echo '<table class="table table-striped table-bordered" style="max-width: 900px">';
         echo '<thead>';
         echo '<tr>';
         echo '<th style="width:320px;">Impulsar - Cluster de Escuelas de Negocios</th>';
         echo '<th style="width:274px;">Seminario Millenials</th>';
         echo '<th style="width:274px;">Codigo Entrada: '.$asistente['entrada'].' </th>';
         echo '</tr>';
         echo '</thead>';
         echo '<tbody>';
         echo '<tr>';
         echo '<td style="width:340px;height:45px;">Nombre: '.$asistente['nombre'].'</td>';
         echo '<td>Empresa: '.$asistente['empresa'].' </td>';
         echo '<td style="height:52px;">Lugar: Salon Pacifico, Enjoy </td>';
         echo '</tr>';
         echo '<tr>';
         echo '<td>Apellidos: '.$asistente['apellidos'].'</td>';
         echo '<td>Cargo: '.$asistente['cargo'].' </td>';
         echo '<td>Fecha: Martes 29 de Agosto , 08:30 horas &nbsp; </td>';
         echo '</tr>';
         echo ' <tr>';
         echo '<td>Correo: '.$asistente['correo'].'</td>';
         echo '<td> <img src="assets/img/logoImpulsar.png" style="width: 200px;"></td>';
         echo '<td> <img src="assets/img/qr.jpg" style="width:100px;"></td>';
         
         
         unset($_SESSION["asistente"]);
         ?>
             
                    
                
               
                    
                    
                    
                
               
                    
                    
                    
                </tr>
            </tbody>
        </table>
        
    </div>
    <input name="b_print" type="button" class="ipt"   onClick="printdiv('div_print');" value=" Print ">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>