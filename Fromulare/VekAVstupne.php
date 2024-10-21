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
        
        <p>Zadejte váš věk: </p>
        <form method="POST" action = "">
            <input name="cislo1" type="text" /> <br />
            <input type="submit" value="PAL!" />
        </form>

        <?php
        // put your code here
        
        // Program načte věk osoby a zobrazí výše vstupného.
        // Osoba do 3 let    	zdarma
        // Osoba nad 3 a do 10 	200
        // Osoba nad 10 do 18 	250
        // Osoba nad 18 do 60 	500
        // Osoba nad 60 do 70 	250
        // Osoba na nad 70 	zdarma
        // Věk musí být kladné číslo do 110, jinak	chyba 
        
        if ($_POST)
        {
            $c1 = $_POST['cislo1'];
            
            if (isset($c1) && is_numeric($c1))
                {
                
                $c1 = (float)$c1; // Přetypuje

                if ($c1 < 0)
                {
                    echo "Chyba";
                }
                else if ($c1 <= 3)
                {
                    echo "Vstupné je zdarma";
                }
                else if ($c1 <= 10)
                {
                    echo "Vstupné stojí 200,-";
                }
                else if ($c1 <= 18)
                {
                    echo "Vstupné stojí 250,-";
                }
                else if ($c1 <= 60)
                {
                    echo "Vstupné stojí 500,-";
                }
                else if ($c1 <= 70)
                {
                    echo "Vstupné stojí 250,-";
                }
                else if ($c1 > 110)
                {
                    echo "Chyba";
                }
                else if ($c1 > 70)
                {
                    echo "Vstupné je zdarma";
                }
                }
            else
            {
                echo("Zadej číselnou hodnotu");
            }
        }
        ?>
    </body>
</html>