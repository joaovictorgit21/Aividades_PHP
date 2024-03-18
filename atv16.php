<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Verificação de número</h1>

    <form method="get" action="">
        <input name="num" type="text">
        <button type="submit">Verificar</button>
    </form>

    <?php

        if (isset($_GET['num'])) {

            $num = $_GET['num'];

            if ($num > 0) {
                echo $num . "</br>";
                echo "O número informado é positivo ";
            } elseif ($num < 0) {
                echo $num . "</br>";
                echo "O número informado é negativo";
            } elseif($num == 0) {
                echo $num . "</br>";
                echo "O número informado é neutro";
            }
        }

    ?>   
    
</body>
</html>