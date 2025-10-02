/*
Lista desplegable con los años del 2020 al 2040
*/
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
            <select name="anio">
                <option value="">-- Selecciona un año --</option>
               <?php
                    for ($i = 2020; $i <= 2040; $i++) {
                        echo "<option value='$i'>$i</option>";
                    }
                ?> 
            </select>
        </div>  
    </body>