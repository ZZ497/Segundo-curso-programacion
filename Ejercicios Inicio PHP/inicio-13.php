// Coger un número aleatorio y sacar su número al cuadrado o al cubo y ponerlos en una tabla
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
                    <th>Número</th>
                </tr>
                <?php
                $num_aleatorio = rand (0,39);
                $numero = [$num_aleatorio];
                foreach ($numero as $numeros) {
                    echo "<tr><td>" .$numeros. "</td></tr>";
                }
                ?> 
            </table>
        </div>
        <br>
        <div>
            <table border="5">
                <tr>
                    <th>Cuadrado</th>
                </tr>
                <?php
                foreach ($numero as $numeros) {
                    echo "<tr><td>" .$numeros * $numeros. "</td></tr>";
                }
                ?> 
            </table>
        </div>
        <br>
        <div>
            <table border="5">
                <tr>
                    <th>Cubo</th>
                </tr>
                <?php
                foreach ($numero as $numeros) {
                    echo "<tr><td>" .$numeros * $numeros * $numeros. "</td></tr>";
                }
                ?> 
            </table>
        </div>   
    </body>