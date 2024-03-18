<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou Impar Code PHP</title>
</head>
<body>
    <h1>Verificação de número - Par ou Impar</h1>

    <form method="get" action="">
        <input name="num" type="number">
        <button type="submit">Verificar</button>
    </form>

    <?php

        if (isset($_GET['num'])) {

            $num = $_GET['num'];

            if ($num % 2 == 0) {
                echo $num . "</br>";
                echo "O número informado é PAR";
            } else {
                echo $num . "</br>";
                echo "O número informado é IMPAR";
            }
        }

    ?>    

</body>
</html>