// Decir si un número es del 1 al 5
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
                $num = rand(1,5);
                $letra;
                if ($num == 1) {
                    echo "Uno " .$num. " ";
                } else if ($num == 2) {
                    echo "Dos " .$num. " ";
                } else if ($num == 3) {
                    echo "Tres " .$num. " ";
                } else if ($num == 4) {
                    echo "Cuatro " .$num. " ";
                } else {
                    echo "Cinco " .$num. " ";
                }
             ?>
        </div>  
    </body>