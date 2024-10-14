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
        
        // Program vygenereuje 10 náhodných čísel v rozsahu (-10,10)
        // Program zobrazí čísla pod sebou, kladné hodnoty budou tučně
        // Potom zobrazí jejich průměrnou hodnotu a dájí do náhodně vybraného nadpisu
        
         define("NL","<br>\n");
            for($pocet=1;$pocet<=10;$pocet++)
            {
                $c = rand(-10,10);
                // $d = 0;
                $d = $d + $c;
                
                if ($c>0)
                {
                    echo("<strong>$c</strong><br>");
                }
                else
                {
                    echo("$c<br>");
                }

            }
            $randomNadpis = rand(1,6);
            $prumer = $d/10;
            echo("<h$randomNadpis>$prumer</h$randomNadpis>");
        
        ?>
    </body>
</html>
