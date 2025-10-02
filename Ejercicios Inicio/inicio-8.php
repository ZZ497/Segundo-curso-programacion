// Decir cuántas cifras tiene un número
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
                $num = rand(1,200);
                $contador = 0;
                if ($num >= 100) {
                    echo "El " . $num. " tiene 3 dígitos";
                    
                } else if ($num >= 10 && $num < 100) {
                    echo "El " . $num. " tiene 2 dígitos";
                } else if ($num < 10) {
                    echo "El " . $num. " tiene 1 dígitos";
                }
             ?>
        </div>  
    </body>