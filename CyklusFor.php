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
        // put your code here
        
        //for($i=1; $i<=100; $i++)
        //    echo($i."; ");
        
        // Program vygeneruje 10 čísel (-10,10)
        // Kladne čísla buou h1
        // Záporné budou h2
        // Nula bude h5
        
        define("NL","<br>\n");
            for($b=1;$b<=10;$b++)
            {
                $c = rand(-10,10);
                if ($c>0)
                {
                    echo("<h1>$c<h1>");
                }
                else if ($c==0)
                {
                    echo("<h5>$c<h5>");
                }
                else if ($c<0)
                {
                    echo("<h2>$c<h2>");
                }

            }
        
        // Program vygeneruje 20 čísel v intervalu -10,10
        // Nejprve zobrazí kladné a potom záporná
        // Čísla budou oddělena "; "
        
        for($c=0;$c<=20;$c++)
        {
            $a = rand(-10,10);
            $kladne = "";
            $zaporne = "";
            if ($a < 0)
            {
                $kladne .= $a." ";
            }
            else if ($a > 0)
            {
                $zaporne .= $a." ";
            }
            echo "$kladne";
            echo "<br>";
            echo "$zaporne";
        }
        
        
        
        ?>
    </body>
</html>
