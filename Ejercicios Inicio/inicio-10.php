// Indicar el color del regalo según los colores y el sexo
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
                $sexo = ["Masculino" , "Femenino"];
                $colores = ["Rojo" , "Blanco"];

                $sexo_aleatorio = $sexo[array_rand($sexo)];
                $color_aleatorio = $colores[array_rand($colores)];

                if ($color_aleatorio == "Rojo" && $sexo_aleatorio == "Masculino") {
                    echo "El regalo es un bolso atrevido";
                } elseif ($color_aleatorio == "Blanco" && $sexo_aleatorio == "Masculino") {
                    echo "El regalo es pantalón clásico";
                } elseif ($color_aleatorio == "Rojo" && $sexo_aleatorio == "Femenino") {
                    echo "El regalo es una falda divertida";
                } elseif ($color_aleatorio == "Blanco" && $sexo_aleatorio == "Femenino"){
                    echo "El regalo es una chaqueta aburrida";
                }
             ?>
        </div>  
    </body>