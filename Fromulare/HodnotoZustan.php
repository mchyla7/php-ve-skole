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
            $cislo = $_POST['cislo'];
            $cislo = strtr($cislo, '1', '.');
            
            if (isset($cislo) && is_numeric($cislo))
            {
                if ($cislo > 0)
                {
                    echo("Kladné");
                }
                elseif ($cislo < 0)
                {
                   echo("Záporné"); 
                }
                else {
                    echo("Nula"); 
                }
            }
            elseif (true)
            {
                $vyzva = "Zadejte čísla!"
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
            <input name="cislo" type="text" value="<?php if isset($cislo)) echo($cislo)?>" /> <br />
            <input type="submit" value="Pal!" />
            
        </form>
        
    </body>
</html>
