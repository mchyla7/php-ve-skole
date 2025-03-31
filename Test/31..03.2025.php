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
        

        <h1>Načítání hodnot do souboru</h1>

        <h2>Zadejte údaje</h2>
        <form method="post" action="#">
            <input type="number" name="cislo">
            <input type="submit" value="Uložit">
        </form>
        <?php
            $hodnota = $_POST["cislo"];
            $soubor = "data.txt";
            $pocetzaznamu = 0;
            if ($hodnota != "")
            {
                $data = $hodnota . " ";
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


        <h1>Zobrazení hodnot za sebou, odděleny mezerou</h1>


        <form method="post" action="#">
            <input type="hidden" name="nacist" value="1">
            <input type="submit" value="Vypsat">
        </form>

        <?php
            if ($_POST["nacist"] == 1)
            {
                $soubor = "data.txt";
                $data = file_get_contents($soubor);
                $pole = explode(" ", $data);
                $poleRazene = sort($pole);
                if ($poleRazene)
                {
                    # echo "Data byla seřazena";
                    foreach ($pole as $value) 
                    {
                        echo $value . " ";
                    }
                }
                else 
                {
                    # echo "Data nebyla seřazena";
                }
            }
        ?>

        <h1>Průměr, počet nadprůměrných hodnot min a max</h1>

        <form method="post" action="#">
            <input type="hidden" name="hodnoty" value="1">
            <input type="submit" value="Hodnoty">
        </form>

        <?php
            $soubor = "data.txt";
            $data = file_get_contents($soubor);
            $pole = explode(" ", $data);
            $pole = array_filter($pole, 'is_numeric');
            $soucet = 0;
            $max = -99999;
            $min = 99999;
            $nadprumer = 0;
            $podprumer = 0;
            if ($_POST["hodnoty"] == 1)
            {
                foreach ($pole as $cislice) 
                {
                    $soucet = $soucet + $cislice;
                    if ($cislice > $max)
                    {
                        $max = $cislice;
                    }
                    if ($cislice < $min)
                    {
                        $min = $cislice;
                    }
                }
                $prumer = $soucet / $pocet;

                foreach ($pole as $cislice) 
                {
                    if ($cislice > $prumer)
                    {
                        $nadprumer = $nadprumer + 1;
                    }
                    if ($cislice < $prumer)
                    {
                        $podprumer = $podprumer + 1;
                    }
                }
                echo "Průměr: " . $prumer . "<br>";
                echo "Počet nadprůměrných hodnot: " . $nadprumer . "<br>";
                echo "Počet podprůměrných hodnot: " . $podprumer . "<br>";
                echo "Minimální hodnota: " . $min . "<br>";
                echo "Maximální hodnota: " . $max; 
            }
        ?>
    </body>
</html>
