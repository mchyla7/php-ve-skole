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
        $body = 0;
        $otazka1 = $_POST['11'];
        $otazka2 = $_POST['21'];
        $otazka3 = $_POST['31'];
        $otazka4 = $_POST['41'];
        $otazka5 = $_POST['51'];

        if ($otazka1 == "Bahrain")
        {
            $body++;
        }
        if ($otazka2 == "Max Verstappen")
        {
            $body++;
        }
        if ($otazka3 == "Ferrari")
        {
            $body++;
        }   
        if ($otazka4 == "McLaren")
        {
            $body++;
        }
        if ($otazka5 == "4")
        {
            $body++;
        }
    }
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <style>
            body
            {
                font-family: Arial;
                margin: 700px;
            }
        </style>

        <form method="post" action="">
            <h1>Test - Martin Chyla</h1>
            <h2>Otázka 1</h2>
            <p>Jakým závodem začíná sezóna F1?</p>
            <input type="radio" name="11" value="Bahrain">Bahrain<br>
            <input type="radio" name="11" value="Monaco">Monaco<br>
            <input type="radio" name="11" value="Abu Dhabi">Abu Dhabi<br>
            <h2>Otázka 2</h2>
            <p>Kdo je vítězem world championship roku 2024?</p>
            <input type="radio" name="21" value="Max Verstappen">Max Verstappen<br>
            <input type="radio" name="21" value="Lando Noris">Lando Noris<br>
            <input type="radio" name="21" value="Olie Bearman">Olie Bearman<br>
            <h2>Otázka 3</h2>
            <p>V jakém týmu se nyní nachází Luwis Hamilton?</p>
            <input type="radio" name="31" value="Ferrari">Ferrari<br>
            <input type="radio" name="31" value="Mitsubishi">Mitsubishi<br>
            <input type="radio" name="31" value="Audi">Audi<br>
            <h2>Otázka 4</h2>
            <p>Který tým se proslavil slovem "papaya"?</p>
            <input type="radio" name="41" value="McLaren">McLaren<br>
            <input type="radio" name="41" value="Mercedes">Mercedes<br>
            <input type="radio" name="41" value="Red Bull Racing">Red Bull Racing<br>
            <h2>Otázka 5</h2>
            <p>Kolikrát vyhrál Max Verstappen titul mistra světa?</p>
            <input type="radio" name="51" value="0">0<br>
            <input type="radio" name="51" value="2">2<br>
            <input type="radio" name="51" value="4">4<br>
            <br>
            <input type="submit" value="Odeslat">
        </form>

        <?php
            if ($_POST)
            {
                echo("Máte ". $body . " bodů.");
                echo "<h2>Výsledky</h2>";
                echo "<p>Otázka 1: " . ($otazka1 == "Bahrain" ? "<span style='color: green; font-weight: bold;'>Správně</span>" : "<span style='color: red; font-weight: bold;'>Špatně</span>") . "</p>";
                echo "<p>Otázka 2: " . ($otazka2 == "Max Verstappen" ? "<span style='color: green; font-weight: bold;'>Správně</span>" : "<span style='color: red; font-weight: bold;'>Špatně</span>") . "</p>";
                echo "<p>Otázka 3: " . ($otazka3 == "Ferrari" ? "<span style='color: green; font-weight: bold;'>Správně</span>" : "<span style='color: red; font-weight: bold;'>Špatně</span>") . "</p>";
                echo "<p>Otázka 4: " . ($otazka4 == "McLaren" ? "<span style='color: green; font-weight: bold;'>Správně</span>" : "<span style='color: red; font-weight: bold;'>Špatně</span>") . "</p>";
                echo "<p>Otázka 5: " . ($otazka5 == "4" ? "<span style='color: green; font-weight: bold;'>Správně</span>" : "<span style='color: red; font-weight: bold;'>Špatně</span>") . "</p>";
            }
        ?>

    </body>
</html>
