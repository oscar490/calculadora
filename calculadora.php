<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Calculadora</title>
    </head>
    <body>
        <?php

        $op1 = $op2 = $op = null;

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

            }
            return $resul;
        }

        ?>
        <?php if (isset($op1, $op2, $op)): ?>
            <?php if (is_numeric($op1) && is_numeric($op2)): ?>
                <?php if (in_array($op, ['-', '+', '*', '/'])): ?>
                    <p>El resultado es <?= calcula($op1, $op2, $op) ?></p>
                <?php else: ?>
                    <h3>Error: Operación no válida</h3>
                <?php endif ?>
            <?php else: ?>
                <h3>Error: Los parámetros deben ser numéricos.</h3>
            <?php endif ?>
        <?php else: ?>
            <h3>Error: Los parámetros son obligatorios</h3>
        <?php endif ?>
    </body>
</html>
