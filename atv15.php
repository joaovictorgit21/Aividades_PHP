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
        <input name="num" type="text">
        <button type="submit">Verificar</button>
    </form>

    <?php

        if (isset($_GET['num'])) {

            $num = $_GET['num'];

            if ($num % 10 == 0) {
                echo $num . "</br>";
                echo "O número informado é redondo ";
            } 
            else {
                echo $num . "</br>";
                echo "O número informado não é redondo";
            }
        }

    ?>

</body>
</html>