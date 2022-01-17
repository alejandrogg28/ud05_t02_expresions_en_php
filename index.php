<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construcción de expresións en PHP</title>
</head>
<body>
    <h3>Construcción de expresións en PHP</h3>
    <?php
        //Operadores aritméticos
        $x=10;
        $y=3;
        $z=$x*$y;
        echo $x." x ".$y." = ".$z."<br/>";
        $z=$x%$y;
        echo $x." modulo ".$y." = ".$z."<br/>";
        /*Operadores de asignación*/
        $z-=$y;
        echo "\$z-=\$y asigna a \$z ".$z."<br/>";
        $z+=$x;
        echo "\$z+=\$y asigna a \$z ".$z."<br/>";
    //Operadores de incremento/diminución
        ++$z;
        echo "++\$z asigna a \$z ".$z."<br/>";
        $z--;
        echo "\$z-- asigna a \$z ".$z."<br/>";
    ?>
</body>
</html>