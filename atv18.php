<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Calcular Desconto de Produto</h1>

    <section>
        <form action="">
            <label for="">Digite seu nome:</label>
            <input type="text" class="nameInput" id="name" name="name">

            <br><br>

            <label for="">Digite o valor do produto:</label>
            <input type="number" class="ValorProduto" id="valorProduto" name="valorProduto">

            <button name="btnCalc">Calcular Desconto</button>
            
        </form>
    </section>

    <section>
        <?php
            if(isset($_GET['btnCalc'])) {
                $name = $_GET["name"];
                $valorProduto = $_GET["valorProduto"];
                $desconto = 0.07;
                
                $precoComDesconto = $valorProduto - $desconto;
                
                echo "Olá, $name!"; 
                echo "<br>";
                echo "$desconto";
                echo "<br>";
                echo "$precoComDesconto";
                echo "<br>";
                echo "O preço do produto é R$ $valorProduto.";

            }
        ?>
    </section>
    
</body>
</html>