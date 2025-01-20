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
        
        <form method="post" action="">
            <input type="text" name="cislo1">
            <select name="operace">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="text" name="cislo2">
            <input type="submit" value="="><br>
            <input type="radio" name="nezaokrouhlit" value="nezaokrouhlit">Nezaokrouhlit<br>
            <input type="radio" name="jednoMisto" value="jednoMisto">Zaokrouhlit na jedno místo<br>
        
    </head>
    <body>
        <?php
        // put your code here
        if ($_POST)
        {   
            $cislo1 = $_POST['cislo1'];
            $cislo2 = $_POST['cislo2'];
            $operace = $_POST['operace'];
            $nezaokrouhlit = $_POST['nezaokrouhlit'];
            $jednoMisto = $_POST['jednoMisto'];
            
            if ($operace == "+")
            {
                $vysledek = $cislo1 + $cislo2;
            }
            if ($operace == "-")
            {
                $vysledek = $cislo1 - $cislo2;
            }
            if ($operace == "*")
            {
                $vysledek = $cislo1 * $cislo2;
            }
            if ($operace == "/")
            {
                $vysledek = $cislo1 / $cislo2;
            }
            
            if ($nezaokrouhlit == "nezaokrouhlit")
            {
                echo("Výsledek je: ". $vysledek);
            }
            if ($jednoMisto == "jednoMisto")
            {
                echo("Výsledek je: ". round($vysledek, 1));
            }
        }
        
        ?>
    </body>
</html>
