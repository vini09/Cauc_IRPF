<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celsios para Fahrenheit</title>
</head>
<body>
    
    <?php

        function converte_Celsios_para_Fahrenheit($celsios){
            $fahrenheit = ($celsios * 1.8) + 32;

            return number_format($fahrenheit);
        }
            
            $temperaturaCelsios = 25;
            $temperaturaFahrenheit = converte_Celsios_para_Fahrenheit($temperaturaCelsios);

            echo "A conversão de graus Celsios $temperaturaCelsios para Fahrenheit é de $temperaturaFahrenheit f° ";
    ?>

</body>
</html>