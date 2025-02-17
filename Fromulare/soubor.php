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
        <?php
        $soubor = "data1.txt";
        $zprava = "Toto je zapis do souboru";

        // file_put_contents($soubor, $zprava);
        // Funkce vytvoří soubor a zapíše do něj data
        // Pokud soubor existuje, tak ho přepíše
        // Funkce vrací hodnotu true, pokud se zápis podaří

        if (file_put_contents($soubor, $zprava))
        {
            echo "Zápis do souboru proběhl úspěšně";
        }
        else
        {
            echo "Zápis do souboru se nezdařil";
        }

        // Atribut FILE_APPEND způsobí, že se data přidají na konec souboru

        file_put_contents($soubor, $zprava, FILE_APPEND);
        
        // file_exists($soubor);
        // Funkce vrací hodnotu true, pokud soubor existuje

        if (file_exists($soubor))
        {
            // file_get_contents($soubor);
            // Funkce vrací obsah souboru
            // Vrátí je jako textový řetězec
            // Příklad jednoduchého výpisu obsahu souboru
            $data = file_get_contents($soubor);
            echo $data;

            // Příklad načtení a jejich uložení do pole
            // Jeden řádek v soubru je jeden prvek v poli

            $data = file_get_contents($soubor);

            // explode("\r\n", $data);
            // Funkce rozdělí textový řetězec na části a vrátí pole hodnot
            // V tomto případě rozdělí řetězec podle znaků konce řádku
            $radky = explode("\r\n", $data);

            foreach ($radky as $radek)
            {
                echo $radek . "<br>";
            }
        }
        else
        {
            echo "Soubor neexistuje";
        }
        ?>
    </body>
</html>
