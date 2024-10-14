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
        <?php
        // put your code here
        $c1 = $_POST['cislo1'];
        $c2 = $_POST['cislo2'];
        $soucet = $c1 + $c2;
        echo("$c1 + $c2 = $soucet");
        
        ?>
        
        <br>
        
        <a href="kalkulacka.html"> Zpět do Kalkulačky<a/>
    </body>
</html>
