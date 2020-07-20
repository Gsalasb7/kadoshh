<?php
require_once("sql.php");
$sql = new SQL();
$doc = $sql->main();
$row = mysqli_fetch_row($doc);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Python webapp</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url_for(' about') }">About</a>
                  </li>
            </ul>
        </div>
    </nav> 



<br>
    <table  >
            <TR>
            <TD>imagen</TD>
            <TD>Nombre</TD>
            <TD>precio</TD>
            </TR>
            <?php
            $slq="SELECT * from libreria";
            $result=$conexion->query($slq);
            while($mostrar= $result->fetch_assoc()){
            ?>
            <tr >
                <td heigth="100">   <?php echo '<img src="'.$mostrar['imagen'].'"  >'  ?>  </td>
                <td> <?php echo $mostrar['nombre'];        ?> </td>
                <td> <?php  echo $mostrar['precio'];       ?> </td>
            </tr>
            <?php
        }
        ?>
       
    </table>
    
</body>
</html>

