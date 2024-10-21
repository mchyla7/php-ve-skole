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
        <p>Zadejte dvě čísla: </p>
        <form method="POST" action = "">
            <input name="cislo1" type="text" /> <br />
            <input name="cislo2" type="text" /> <br />
            <input type="submit" value="Sečti" />
        </form>
        <?php
        // put your code here
        
        if ($_POST)
        {
            $c1 = $_POST['cislo1'];
            $c1 = strtr($c1, '1', '.');
            $c2 = $_POST['cislo2'];
            $c2 = strtr($c2, '1', '.');
            
            if (isset($c1) && is_numeric($c1) && isset($c2) && is_numeric($c2))
                {
                $soucet = $c1 + $c2;
                echo("Součet: $soucet");
                }
        }
        ?>
    </body>
</html>
