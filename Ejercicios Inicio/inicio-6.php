// Mostrar los nombres y apellidos de los alumnos
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
            <dl>
                <dt>Nombres</dt>
                <?php
                $alumnos = [
                    "Diego" => " Lijarcio Merino",
                    "Ana" => " Isabel Jurado",
                    "Fran"=> " Charriel",

                ];
                 
                foreach ($alumnos as $nombre) {
                    echo "<dd>" . $nombre . "</dd>" ;
                }
                ?>
            </dl> 
        </div>  
    </body>