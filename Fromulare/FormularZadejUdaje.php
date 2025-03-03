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
            <p>Jméno:</p> <input type="text" name="jmeno" value="" />
            <p>Příjmení:</p> <input type="text" name="prijmeni" value="" />
            <p>Muž: </p> <input type="radio" name="pohlavi" value="muz" />
            <p>Žena: </p> <input type="radio" name="pohlavi" value="zena" />
            <input type="submit" value="Odeslat" />
        </form>

        <?php
        if (isset($_POST["jmeno"]) && isset($_POST["prijmeni"]) && isset($_POST["pohlavi"])) {
            $jmeno = $_POST["jmeno"];
            $prijmeni = $_POST["prijmeni"];
            $pohlavi = $_POST["pohlavi"];
            $data = $jmeno . " " . $prijmeni . " " . $pohlavi . "\n";
            $soubor = fopen("data1.txt", "a");
            fwrite($soubor, $data);
            fclose($soubor);
            $vysledek = "Data byla uložena";
        }
        if (isset($vysledek)) {
            echo $vysledek;
        }
        ?>
    </body>
</html>
