<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular imposto de renda</title>
</head>
<body>
    

    <?php

        function calcularIRPF($salario) {

            $imposto = 0;

            if ($salario <= 1903.98) {
                echo 'Isento de pagamento';
            }else if($salario >= 1903.99 && $salario <= 2826.65) {
                echo 'Desconto de 7,5% no pagamento';
            }else if($salario >= 2826.66 && $salario <= 3751.05) {
                echo 'Desconto de 15% no pagamento';
            }else if($salario >= 3751.06 && $salario <= 4664.68) {
                echo 'Desconto de 22.5%';
            }else if($salario >= 4664.68) {
                echo 'Pagamento integral, sem desconto';
            }
                return $imposto;
        }
            echo calcularIRPF(5000);
    ?>

</body>
</html>