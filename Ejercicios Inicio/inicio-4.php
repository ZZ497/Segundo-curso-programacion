// Mostrar una tabla con los autores
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
            <table border="5">
                <tr>
                    <th>Autores</th>
                </tr>
                <?php
                    $autores = ["Víctor Hugo", "Charles Baudelaire", "Arthur Rimbaud", "Paul Verlaine"];
                    foreach ($autores as $key => $autor) {
                        echo "<tr><td>" . $autor . "</td></tr>";                    
                    }
                ?>
            </table>     
        </div>  
    </body>