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
        <form method="POST" action = "">
        <label>Zadejte čísla oddělená "; ": </label><input name="text" type="text" /> <br />
            <input type="submit" value="Dělej" />
        </form>
        <?php
        // put your code here
        
        define("NL","<br>\n");
        if ($_POST)
        {
            $cisla = explode(";", trim($post[text]));
            foreach ($cisla as $cislo)
            {
                $soucet += $cislo;
                $pocet++;
                echo $cislo.NL;
            }
            
            echo("Součet je $soucet".NL."Počet je $pocet");
            
        } 
        ?>
    </body>
</html>
