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
        <form method="POST" action = "">
        <label>Zadejte čísla:</label><input name="cisla" type="text" /> <br />
        <label>Zadejte oddělovač hodnot:</label><input name="oddelovac" type="text" /> <br />
            <input type="submit" value="Dělej" />
        </form>
        <?php
        // put your code here
        
        define("NL","<br>\n");
        $cisla = $_POST['cisla'];
        $oddelovac = $_POST['oddelovac'];
        
        if(!empty($cisla) && !empty(oddelovac))
        {
            $pole = explode($oddelovac, $cisla);
            echo ("Výpis pod sebe:".NL);
            sort($pole);
            echo(implode(NL, $pole).NL);
            echo ("Maximální:".max($pole).NL);
            echo ("Minimální:".min($pole).NL);
        }
        else 
        {
            echo("Chyba v hodnotách");
        }
        ?>
    </body>
</html>
