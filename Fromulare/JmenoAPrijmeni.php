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
        <h1>Jméno a příjmení</h1>
        <p>Zadej křestní jméno a příjmení oddělené mezerou</p>
        <form method="POST" action = "">
        <p>Tvoje jméno abych získal iniciály.</p>
        <label>Zadejte jméno a příjmení: </label><input name="jmeno" type="text" /> <br />
            <input type="submit" value="Dělej" />
        </form>
        <?php
        // put your code here
        
        define("NL","<br>\n");
        if ($_POST)
        {
            $jmeno = trim($_POST['jmeno']);
            $jmeno.trim($jmeno);
            $mezera = mb_strpos($jmeno, " ");
            $nazev = mb_substr($jmeno,0, $mezera);
            $prijmeni = mb_substr($jmeno, $mezera);
            
            $nazev = mb_strtoupper(mb_substr($nazev, 0,1)).mb_strtolower(mb_substr($nazev, 1));
            $prijmeni = mb_strtoupper(mb_substr($prijmeni, 0,1)).mb_strtolower(mb_substr($prijmeni, 1));
            echo ($nazev.NL);
            echo ($prijmeni.NL);
        } 
        ?>
    </body>
</html>
