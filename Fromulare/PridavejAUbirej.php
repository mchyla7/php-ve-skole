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
    <form method="post" action="">
        </br>
        <input type="hidden" name="operace" value="1">
        <input type="submit"  value="Přičtení 1">
        <input type="hidden" name="operace" value="2">
        <input type="submit"  value="Odečtení 1">
        <input type="hidden" name="operace" value="3">
        <input type="submit"  value="Vynulování">
    </form>
    <body>
        
        <?php

        $soubor = "data1.txt";

        if (!empty($_POST['operace']) && $_POST['operace'] == 1)
        {
            if (file_exists($soubor))
            {
                $cislo = file_get_contents($soubor);
                $cislo++;
                file_put_contents($soubor, $cislo);
                echo $cislo;
            }
            else
            {
                $cislo = 1;
                file_put_contents($soubor, $cislo);
                echo $cislo;
            }
        }
        else if (!empty($_POST['operace']) && $_POST['operace'] == 2)
        {
            if (file_exists($soubor))
            {
                $cislo = file_get_contents($soubor);
                $cislo--;
                file_put_contents($soubor, $cislo);
                echo $cislo;
            }
            else
            {
                $cislo = 1;
                file_put_contents($soubor, $cislo);
                echo $cislo;
            }
        }
        if (!empty($_POST['operace']) && $_POST['operace'] == 3)
        {
            if (file_exists($soubor))
            {
                $cislo = file_get_contents($soubor);
                $cislo = 0;
                file_put_contents($soubor, $cislo);
                echo $cislo;
            }
            else
            {
                $cislo = 1;
                file_put_contents($soubor, $cislo);
                echo $cislo;
            }

        }
        ?>
    </body>
</html>
