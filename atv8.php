<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <!--Claculo do IMC: altura * altura / peso-->

    <form name='formulario' method="get" action="">

        <div>
            <label>Altura</label>
            <br>
            <input name="altura" type="text">
        </div>

        <br><br>

        <div>
            <label>Peso</label>
            <br>
            <input name="peso" type="text">
        </div>
        <br><br>
            <button name='imc' type="submit">Calcular Desconto</button>
    </form>

    <br>

    <?php
            $altura = $_GET['altura'];
            $peso = $_GET['peso'];
            $altura_metros = $altura / 100;
            $imc = $peso / ($altura_metros * $altura_metros);


            echo "Seu imc é: $imc";
    ?>

</body>
</html>