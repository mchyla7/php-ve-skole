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
        <p>Zaokrouhlení: </p>
        <form method="POST" action = "">
            <label>Číslo: </label><input name="cislo" type="text" /> <br />
            <input type="submit" value="Sudé/Liché" />
        </form>
        <?php
        // put your code here
        
        if ($_POST)
        {
            $cislo = $_POST['cislo'];
            $cislo = strtr($cislo, ',', '.');

            
            if (isset($cislo) && is_numeric($cislo))
            {
                if ($cislo%2 == 0)
                {
                    echo("Sudé");
                }
                else 
                {
                    echo("Liché");
                }
            }
            elseif (true) 
            {
                echo("Zadej celé číslo");
            }
        }
        ?>
    </body>
</html>
