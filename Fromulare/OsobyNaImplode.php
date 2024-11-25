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
        <label>Zadejte osoby (Jméno Příjmení):</label><input name="osoby" type="text" /> <br />
        <label>Zadejte oddělovač hodnot:</label><input name="oddelovac" type="text" /> <br />
            <input type="submit" value="Dělej" />
        </form>
        <?php
        // put your code here
        
        define("NL","<br>\n");
        $osoby = $_POST['osoby'];
        $oddelovac = $_POST['oddelovac'];
        
        if(!empty($osoby) && !empty(oddelovac))
        {
            foreach ($osoby as $jmena)
            {
                $jmenoaprijmeni = explode($oddelovac, $jmena);
                $jmenoaprijmeni = mb_strtoupper(mb_substr($jmenoaprijmeni, 0,1)).mb_strtolower(mb_substr($jmenoaprijmeni, 1));
                echo ("<br>".$jmenoaprijmeni[1]);
                echo (" ".$jmenoaprijmeni[0]);
            }
        }
        else 
        {
            echo("Chyba v hodnotách");
        }
        ?>
    </body>
</html>
