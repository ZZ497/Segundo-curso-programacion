/*
Este script muestra si un número aleatorio entre -10 y 10 es positivo, negativo o cero.
*/
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
                $num = rand(-10,10);
                if ($num == 0) {
                    echo "El " .$num. " es un cero";
                } elseif ($num > 0){
                    echo "El " .$num. " es un número positivo";
                } elseif ($num <= -1){
                    echo "El " .$num. " es un número negativo";
                }
             ?>
        </div>  
    </body>