<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        // Váriavel $t que declara o horário
        // H representa a hora em formato de 24 Horas
        $t = date("H");

        if($t < "20") {
            //echo $t;
            echo "</br> Tenha um ótimo dia!";
            
            if ($t > "20") {
                //echo $t;
                echo "</br> Tenha uma ótima noite";        
            }
        }
    ?>

</body>
</html>