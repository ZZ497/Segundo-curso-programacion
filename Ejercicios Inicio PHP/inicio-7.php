// Decir si un número es superior o menor que 50
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
                $num = rand(1,100);
                if ($num >= 50) {
                    echo "El número " .$num. " es superior que 50";
                } else if ($num < 50) {
                    echo "El número " .$num. " es menor que 50";
                }
             ?>
        </div>  
    </body>