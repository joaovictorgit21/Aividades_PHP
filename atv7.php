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
        <input name="total" type="number">
        <button type="submit">Calcular Desconto</button>
    </form>

    <?php
        if (isset($_GET['total'])) {
            
            $total = $_GET['total'];
            $pctm = 27.00;
            $desconto = $total - ($total / 100 * $pctm);

            echo "Desconto aplicado ($pctm%): $desconto";
        }
    ?>

</body>
</html>