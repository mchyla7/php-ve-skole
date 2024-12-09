<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
        // put your code here
        
        if ($_POST)
        {
            $odvesna1 = $_POST['odvesna1'];
            $odvesna1 = strtr($odvesna1, ',', '.');
            $odvesna2 = $_POST['odvesna2'];
            $odvesna2 = strtr($odvesna2, ',', '.');
            
            if (isset($odvesna1) && is_numeric($odvesna1) && isset($odvesna2) && is_numeric($odvesna2))
            {
                if ($odvesna1 > 0 && $odvesna2 > 0)
                {
                    $vysledek = round(sqrt(pow($odvesna1, 2) + pow($odvesna2, 2)), 2);
                }
                else
                {
                    $vyzva = "Zadejte kladná čísla!";
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
            <input name="odvesna1" type="text" value="<?php if (isset($odvesna1)) echo($odvesna1)?>" /> <br />
            <input name="odvesna2" type="text" value="<?php if (isset($odvesna2)) echo($odvesna2)?>" /> <br />
            <input type="submit" value="Pal!" />
            <output><strong><?php if (isset($vysledek)) echo ($vysledek); ?></strong></output>
        </form>
        
    </body>
</html>
