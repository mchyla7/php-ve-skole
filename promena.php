<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        define("vek",18); // Vytvoření konstatny věk = 18
        define("NL","<br>\n"); // Vytvoření konstanty NL = odřádkování
        
        
        $a = 10;  // Celé číslo
        $b = 11.11;  // Desetinné číslo
        $c = "ahoj";  // Řetězec (string)
        $d = $a<$b;  // Logická hodnota (true/false)

        
        echo("a je ".gettype($a).NL); // integer
        echo("b je ".gettype($b).NL); // double
        echo("c je ".gettype($c).NL); // string
        echo("d je ".gettype($d).NL); // boolean

        
        $a = (double)$a; // Přetypování na double
        echo("a je ".gettype($a).NL); // double


        echo("a =".$a.NL); // Vypíše hodnotu proměnné a se kterou můžeme dále pracovat
        echo("a = $a".NL); // Vypíše hodnotu proměnné a do textu

        ?>

    </body>
</html>
