<!DOCTYPE html>
<!--
Program bude ukládat tyto informac do souboru data1.txt
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <form action="" method="post">
            <p>Název:</p> <input type="text" name="nazev" value="" />
            <p>Cena:</p> <input type="number" name="cena" value="" />
            <input type="submit" value="Odeslat" />
        </form>

        <?php
        if (isset($_POST["nazev"]) && isset($_POST["cena"]))
        {
            $nazev = $_POST["nazev"];
            $cena = $_POST["cena"];
            $data = $nazev . " " . $cena . "\n";
            $soubor = "C:\\xampp\\htdocs\\chila\\Fromulare\\Webova stránka načítání pro obchod\\data.txt";
            if (file_put_contents($soubor, $data . "\n", FILE_APPEND))
            {
                echo "Zápis do souboru proběhl úspěšně";
            }
            else
            {
                echo "Zápis do souboru se nezdařil";
            }
            $vysledek = "Data byla uložena";
        }
        else
        {
            $vysledek = "Data nebyla uložena";
        }
        ?>
        <p><?php echo $vysledek; ?></p>

        <a href="MainStranka.php">Zpět na hlavní stránku</a>
    </body>
</html>
