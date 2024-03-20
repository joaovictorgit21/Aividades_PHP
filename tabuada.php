<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .sectionMain
        {
            width: 100%;
            height: 100%;
            display: flex;
            
        }

        .container
        {
            width: 40rem;
            height: 50rem;
            border: 2px solid black;
            position: relative;
        }

        .containerScript{
            width: 40rem;
            height: 50rem;
            border: 2px solid black;
            position: relative;
            left: 44rem;
        }

    </style>

</head>

<body>

    <section class="sectionMain">

        <span>Sistema de Tabuada</span>
        <div class="container">
            <form class="formMain" action="" method="post">
                <input class="inputNumber" type="number" name="number">
                <br><br>
                <input class="inputSumbmit" type="submit">
                <br><br>
            </form>
        </div>

        <div class="containerScript">

            <?php

                $number = filter_input(INPUT_POST, 'number');

                if ($number) {
                    for ($i = 0; $i <= 10; $i++) {
                        echo "$number * $i = " . ($number*$i) . "<br/>";
                    }
                } else {
                    echo "Informe um número válido!";
                }
            ?>

        </div>

    </section>

</body>
</html>