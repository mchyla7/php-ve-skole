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
        <p>Tvoje jméno abych získal iniciály.</p>
        <label>Zadejte Jméno: </label><input name="jmeno" type="text" /> <br />
        <label>Zadejte Příjmení: </label><input name="prijmeni" type="text" /> <br />
            <input type="submit" value="Dělej" />
        </form>
        <?php
        // put your code here
        
        define("NL","<br>\n");
        if ($_POST)
        {
            $jmeno = trim($_POST['jmeno']);
            $prijmeni = trim($_POST['prijmeni']);
            
            if(!empty($jmeno) or !empty($prijmeni)) // Ošetření při prvním volání
            {
                echo(mb_strtoupper(mb_strstr($jmeno,0,1).".".mb_subst($prijmeni,0,1)."."));
                
            }
        }
        else
        {
                echo("Zadej text: ");
        }
        ?>
    </body>
</html>
