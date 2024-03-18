<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="get" action="">
        <div>
            <label>Digite um núnmero:</label>
            <br><br>
            <input name="number" type="number">
        </div>
        <br>
        <div>
            <label>Digite outro número:</label>
            <br><br>
            <input name="number2" type="number">
        </div>
        <br>

        <button name="resultado">Calcular Resultado</button>
    </form>
    
    <?php

        if (isset($_GET['resultado'])) {
            $number = $_GET['number'];
            $number2 = $_GET['number2'];

            $quadrado = $number * $number;
            $quadrado2 = $number2 * $number2;

            $resultado = $quadrado + $quadrado2;

            echo $resultado;
        }
    ?>

</body>
</html>