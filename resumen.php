<!DOCTYPE html>
<html>
    <?php
    session_start();
    include ('Control/QRGenerator.php');
    ?>

    <head>

        <script language="javascript">
            function printdiv(printpage)
            {
                var headstr = "<html><head><title></title></head><body>";
                var footstr = "</body>";
                var newstr = document.all.item(printpage).innerHTML;
                var oldstr = document.body.innerHTML;
                document.body.innerHTML = headstr + newstr + footstr;
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
            $asistente = $_SESSION["Asistente"];
            $imagen = $ex1 = new QRGenerator($asistente['entrada']);
            echo '<center>';
            echo '<table class="table table-bordered" style="max-width: 400px">';
            echo '<thead>';
            echo '<tr>';
            echo '<td><center><img src="assets/img/logoImpulsar.png" style="max-width: 300px;"></td>';
            echo '</tr>';
            echo '<tr>';
            echo '<th style="width:300px;"><center>Impulsar - Cluster de Escuelas de Negocios</center></th>';
            echo '</tr>';
            echo '<tr>';
            echo '<th><center>Seminario Millenials</center></th>';
            echo '</tr>';
            echo '<tr>';
            echo '<th><center><strong>Codigo Entrada: </strong>' . $asistente['entrada'] . ' </center></th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            echo '<tr>';
            echo '<td><center><strong>Nombre: </strong>' . $asistente['nombre'] . '&nbsp;' . $asistente['apellidos'] . '</center></td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td><center><strong>Empresa: </strong>' . $asistente['empresa'] . '&emsp;&emsp;&emsp;' . '<strong>Cargo: </strong>' . $asistente['cargo'] . '</center></td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td><center><strong>Lugar: </strong>Salon Pacifico, Enjoy </center></td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td><center><strong>Fecha: </strong>Martes 29 de Agosto , 08:30 horas &nbsp; </center></td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td><center><strong>Correo: </strong>' . $asistente['correo'] . '</center></td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td><center><img src='.$ex1->generate().' style="width:200px;"></center></td>';
            echo '</tr>';
            echo '</table>';
            echo '</center>';
            unset($_SESSION["asistente"]);
            ?>
        </tr>
    </tbody>
</table>

</div>
<center><p><strong>* Debe presentar está entrada de manera digital o impresa al momento del ingreso al evento</strong></p></center>
<center><input name="b_print" type="button" class="ipt"   onClick="printdiv('div_print');" value=" Imprimir Entrada "></center>
<br>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>