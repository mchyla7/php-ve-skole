<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
        // put your code here
        
        // Tvoří délka stran trojuhelník?

        if ($_POST)
        {
            $stranaA = $_POST['stranaA'];
            $stranaA = strtr($stranaA, ',', '.');
            $stranaB = $_POST['stranaB'];
            $stranaB = strtr($stranaB, ',', '.');
            $stranaC = $_POST['stranaC'];
            $stranaC = strtr($stranaC, ',', '.');
            
            if (isset($stranaA) && is_numeric($stranaA) && isset($stranaB) && is_numeric($stranaB) && isset($stranaC) && is_numeric($stranaC))
            {
                if ($stranaA + $stranaB > $stranaC)
                {
                    $vysledek = "Trojuhelník je možné sestrojit.";
                    $obvod = $stranaA + $stranaB + $stranaC;
                }
                elseif ($stranaA + $stranaC > $stranaB) 
                {
                    $vysledek = "Trojuhelník je možné sestrojit.";
                    $obvod = $stranaA + $stranaB + $stranaC;
                }
                elseif ($stranaB + $stranaC > $stranaA) 
                {
                    $vysledek = "Trojuhelník je možné sestrojit.";
                    $obvod = $stranaA + $stranaB + $stranaC;
                }
                else
                {
                    $vysledek = "Trojuhelník není možné sestrojit.";
                }
            }
            else if (true)
            {
                $vyzva = "Zadejte čísla!";
            }
                
        }
        ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>Zadejte číslo: </p>
        <p> <?php if (isset($vyzva)) echo ($vyzva); ?><p>
        <form method="POST" action = "">
            <input name="stranaA" type="text" value="<?php if (isset($stranaA)) echo($stranaA)?>" /> <br />
            <input name="stranaB" type="text" value="<?php if (isset($stranaB)) echo($stranaB)?>" /> <br />
            <input name="stranaC" type="text" value="<?php if (isset($stranaC)) echo($stranaC)?>" /> <br />
            <input type="submit" value="Pal!" />
            <output><strong><?php if (isset($vysledek)) echo ($vysledek); ?></strong></output>
            <output><strong>Obvod je <?php if (isset($obvod)) echo ($obvod); ?></strong></output>
        </form>
        
    </body>
</html>
