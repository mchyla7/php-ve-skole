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
        $max = -9999999;
        $cislo1 = trim($_POST['cislo1']);
        $pocet = $_POST['pocet'];
        $vypis = $_POST['vypis'];
        $max = $_POST['max'];



        if (isset($cislo1) && is_numeric($cislo1))
        {
            $soucet =(float) ($_POST['soucet']);
            $soucet += $cislo1;
            $pocet++;
            $vypis .= $cislo1 . ", ";
            if ($cislo1 > $max)
            {
                $max = $cislo1;
            }
        }
        else
        {
            $vyzva = "Zadejte číselnou hodnotu";
        }
    }

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3> Sčítání </h3>
        <p> <?php if (isset($vyzva)) echo ($vyzva); ?></p>
        <form method="POST" action="">
            <input name="cislo1" type="text"/>
            <br /> <br />
            <input type="submit" value="Přičíst"/>
            <input type="hidden" name="soucet" value="<?php if (isset($soucet)) echo ($soucet); ?>">
            <input type="hidden" name="pocet" value="<?php if (isset($pocet)) echo ($pocet); ?>">
            <input type="hidden" name="vypis" value="<?php if (isset($vypis)) echo ($vypis); ?>">
            <input type="hidden" name="max" value="<?php if (isset($max)) echo ($max); ?>">
        </form>
            </br>
            <?php if (isset($soucet)) echo("Výsledek je: ". $soucet);?></br> </br>
            <?php if (isset($pocet)) echo("Počet čísel je: ". $pocet);?></br>
            <?php if (isset($vypis)) echo("Čísla: ". $vypis);?></br>
            <?php if (isset($max)) echo("Největší číslo je: ". $max);?>
        

        
    </body>
</html>
