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

        <form method="post" action="">
            <input type="text" name="cislo" value="<?php if (isset($_POST['cislo'])) echo($_POST['cislo']); ?>" />
            <input type="radio" name="mocnina" value="druha" checked="checked"/> 
            <label>Druhá mocnina</label>
            <br>
            <input type="radio" name="mocnina" value="treti" <?php if (isset($_POST['mocnina']) and $_POST['mocnina']=="treti") echo ("checked=\'checked\'"); ?>> 
            <label>Třetí mocnina</label> 
            <br>
            <input type="submit" value="Vypočítej">
        <?php
        // put your code here
        if ($_POST)
        {
            $cislo = $_POST['cislo'];
            $cislo = strtr($cislo, ',', '.');

            if (isset($cislo) && is_numeric($cislo))
            {
                if ($_POST['mocnina'] == "druha")
                {
                    echo("Druhá mocnina: ".$cislo*$cislo);
                }
                else
                {
                    echo("Třetí mocnina: ". $cislo*$cislo*$cislo);
                }
            }
            else
            {
                $vyzva = "Zadejte čísla!";
            }

        }
        ?>
    </body>
</html>
