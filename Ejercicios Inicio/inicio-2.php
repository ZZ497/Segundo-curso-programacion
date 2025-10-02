<?php
const MI_SITIO = "miSitio.com";
$nombre = "Angustias";
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
            /* Parte 1 Ejercicio 1
             echo "Bienvenido " . $nombre .'<br/ >';
             echo "Esta es mi página web ", MI_SITIO , '<br />';
            */
            // Parte 2. Contar las letras que tiene un nombre
            $i = 0;
            $contador = 0;
            while ($nombre[$i]) {
                if ($nombre[0] != " ") $contador++;
                $i++;
            }
            echo "Su nombre tiene " .$contador. " letras" .'<br/>';
             ?>
        </div>  
    </body>