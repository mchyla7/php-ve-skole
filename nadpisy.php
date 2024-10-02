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
        define("NL","<br>\n");
            for($i = 1; $i <= 6; $i++)
                echo("<h$i> Nadpis $i </h$i>\n");

            for($j = 6; $j >= 1; $j--)
                echo("<h$j> Nadpis $j </h$j>\n");
        
        
        ?>
    </body>
</html>
