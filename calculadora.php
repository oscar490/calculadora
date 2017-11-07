<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Calculadora</title>
    </head>
    <body>
        <?php
        $ret = "";
        $op1 = $op2 = $op = null;
        extract($_GET, EXTR_IF_EXISTS);








        /**
         * Realiza una operación aritmética
         * @param  float $op1 primer operando
         * @param  float $op2 segundo operando
         * @param  string $op  tercer operando
         * @return float      El resultado de la operación.
         */
        function calcula(float $op1, float $op2, string $op)
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
                    <?php $ret = calcula($op1, $op2, $op) ?>
                <?php else: ?>
                    <h3>Error: Operación no válida</h3>
                <?php endif ?>
            <?php else: ?>
                <h3>Error: Los parámetros deben ser numéricos.</h3>
            <?php endif ?>
        <?php endif ?>

        <form action="calculadora.php"  method="get">
            <label for="op1">Primer operando</label>
            <input type="text" id="op1" name="op1" value="<?= $op1 ?>" /><br/>

            <label for="op2">Segundo operando</label>
            <input type="text" id ="op2" name="op2" value="<?= $op2 ?>"/><br />

            <label for="resultado">Resultado</label>
            <input type="text" id="resultado"  value="<?= $ret ?>"  /><br />

            <input type="submit" value="Calcular"  />

            <select name="op">
                <option value="+">Suma</option>
                <option value="-">Resta</option>
                <option value="*">Multiplicar</option>
                <option value="/">Dividir</option>
            </select>
        </form>
    </body>
</html>
