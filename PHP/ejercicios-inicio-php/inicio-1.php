<?php
const MI_SITIO = "miSitio.com";
$nombre = "2º CURSO DAM";
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
             echo "Bienvenido " . $nombre .'<br/ >';
             echo "Esta es mi página web ", MI_SITIO , '<br />';
             ?>
        </div>  
    </body>