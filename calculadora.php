<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Calculadora</title>
    </head>
    <body>
        <?php

        $op1 = $_GET["op1"];
        $op2 = $_GET["op2"];
        $op = $_GET["op"];

        function calcula($op1, $op2, $op)
        {
            switch ($op) {
                case '+':
                    $resul = $op1 + $op2;
                    break;

                case '-':
                    $resul = $op1 - $op2;
                    break;

                case '*':
                    $resul = $op1 * $op2;
                    break;

                case '/':
                    $resul = $op1 / $op2;
                    break;

                default:
                    $resul = "Error: Operación no válida.";
                    break;
            }
            return $resul;
        }

        ?>
        <p>El resultado es <?= calcula($op1, $op2, $op) ?></p>
    </body>
</html>
