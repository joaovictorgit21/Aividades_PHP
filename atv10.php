<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Função</title>
</head>
<body>
    <?php

        // Varviável não global
        $num = 5000;
        
        function teste_escopo1()
        {
            // Função não identifica variáveis foras
            $num += 5;
            echo $num . "<br>";
        }
        
        // imprimi a variavel que não estiver dentro de um bloco privado
        echo $num . "<br>";

        // Executa a função que imprimi sua variavel local
        teste_escopo1();

    ?>

</body>
</html>