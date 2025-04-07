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

    <h1>Zadejte údaje</h1>
        <form method="post" action="#">
            <input type="text" name="udaj">
            <input type="submit" value="Uložit">
        </form>
        <?php
        // put your code here
        $text = $_POST["udaj"];
        $soubor = "data.txt";
        $pocetzaznamu = 0;
        if ($text != "")
        {
            $data = $text . "\n";
            if (file_put_contents($soubor, $data, FILE_APPEND)) 
            {
                echo "Data byla uložena";
                $pocetzaznamu =+ 1;
            }
            else 
            {
                echo "Data nebyla uložena";
            }
        }
        else 
        {
            echo "Nebyly zadány žádné data";
        }
        ?>

        <h1>Vypis údaje ze souboru</h1>
        
        <form method="post" action="#">
            <input type="hidden" name="nacist" value="1">
            <input type="submit" value="Vypsat">
        </form>
        
        <?php

        if ($_POST)
        {
            if ($_POST["nacist"] == 1)
            {
                $soubor = "data.txt";
                $data = file_get_contents($soubor);
                $pole = explode("\n", $data);
                foreach ($pole as $value) 
                {
                    echo $value . "<br>";
                    echo $pocetzaznamu;
                }
            }
        }
        ?>

        <h1>Smazat soubor</h1>
        <form method="post" action="#">
            <input type="hidden" name="smazat" value="1">
            <input type="submit" value="Smazat">
        </form>

        <?php
        if ($_POST)
        {
            if ($_POST["smazat"] == 1)
            {
                $soubor = "data.txt";
                if (unlink($soubor))
                {
                    echo "Soubor byl smazán";
                }
                else
                {
                    echo "Soubor nebyl smazán";
                }
            }
        }
        ?>
    </body>
</html>
