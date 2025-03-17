<!DOCTYPE html>
<!--
Program načte jméno, příjmení a věk. Pokud bude jméno a příjmení obsahovat text delší než 3 znaky a věk bude kladnné číslo menší než 120, program hodnoty uloží do souboru data.txt
Hodnoty se vloží na nový řádek za už stávající hodnoty.
Vloží se nejprve příjmení, potom jméno, dále věk a na závěr informace o ceně vstupného.

Cena vstupného je:
    do 6 let zdarma
    nad 6 let do 18 : 200 Kč
    nad 18 let do 65 : 500 Kč
    nad 65 : 200 Kč

Hodnoty na řádku budou oddělen středníkem.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="" method="post">
            <p>Jméno:</p> <input type="text" name="jmeno" value="" />
            <p>Příjmení:</p> <input type="text" name="prijmeni" value="" />
            <p>Věk: </p> <input type="number" name="vek" value="" />
            <input type="submit" value="Odeslat" />
        </form>
        <?php

            $soubor = "data.txt";
            $jmeno = $_POST["jmeno"];
            $prijmeni = $_POST["prijmeni"];
            $vek = $_POST["vek"];

            if (isset($jmeno) && isset($prijmeni) && isset($vek) && $vek > 0 && $vek < 120 && strlen($jmeno) > 3 && strlen($prijmeni) > 3)   
            {
                $data = $prijmeni . ";" . $jmeno . ";" . $vek . ";";

                if ($vek <= 6) 
                {
                    $data .= "0";
                }
                else if ($vek <= 18) 
                {
                    $data .= "200";
                }
                else if ($vek <= 65) 
                {
                    $data .= "500";
                }
                else 
                {
                    $data .= "200";
                }

                $data .= "\n";
                if (file_put_contents($soubor, $data, FILE_APPEND)) 
                {
                    echo "Data byla uložena";
                }
            }
            else 
            {
                echo "Data nebyla uložena. Byly nesprávně zadané data.";
            }
        ?>
    </body>
</html>
