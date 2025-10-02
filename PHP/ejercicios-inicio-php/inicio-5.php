// Mostrar todos los nombres de los alumnos
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
            <ol>
                <?php
                $alumnos = ["Diego", "Ana Isabel", "Fran", "Miguel", "Saúl", "Carlos", "Rafa", "Mario"];
                foreach ($alumnos as $nombre) {
                    echo "<li>" . $nombre . "</li>" ;
                }
                ?>
            </ol> 
        </div>  
    </body>