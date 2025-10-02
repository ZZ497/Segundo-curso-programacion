<?php
const MI_SITIO = "miSitio.com";
$nombre = "Pepe";
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
            /*
             echo "Bienvenido " . $nombre .'<br/ >';
             echo "Esta es mi página web ", MI_SITIO , '<br />';*/
             //Parte 3. Sacar si un nombre empieza por vocal o consonante
             switch ($nombre[0]){
                case "A":
                    case "a":
                case "E":
                    case "e":
                case "I":
                    case "i":
                case "O":
                    case "o":
                case "U":
                    case "u":            
                echo "Su nombre empieza por una vocal". '<br/>';
                break;

                default:
                    echo 'Su nombre comienza por una consonante'. '<br />';
             }
             ?>
             
        </div>  
    </body>