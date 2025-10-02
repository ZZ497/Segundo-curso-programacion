// Mostrar dos números aleatorios en un array bidimensional y decir si son pares, impares o no coinciden
<?php
?>
<!DOCTYPE html>
<html xmlns= "https://www.w3.org/1999/xhtml/" lang = "es">
    <head>
        <meta charset="UTF-8"/>
        <title>Inicio</title>   
    </head>
    <body>
        <div>
            <?php
               $num_aleatorio = rand(0,100);
               $num_aleatorio2 = rand(0,100);
               $numero = array(
                array($num_aleatorio, $num_aleatorio2)
               );
               echo "Número 1: ".$numero[0][0]." - Número 2: ".$numero[0][1];
            ?>
            <br>
            <?php
                if($numero[0][0] % 2 == 0 && $numero[0][1] % 2 == 0) {
                    echo "Los dos son pares: ".$numero[0][0]." y ".$numero[0][1];
                } else if($numero[0][0] % 2 != 0 && $numero[0][1] % 2 != 0) {
                    echo "Los dos son impares: ".$numero[0][0]." y ".$numero[0][1];
                } else {
                    echo "No coinciden";
                }
            ?>
        </div>  
    </body>