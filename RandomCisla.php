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
        
        $c = rand(-10,10);
            if($c > 0)
            {
                echo("$c je kladné číslo");
            }
            elseif($c < 0){
                echo("$c je záporné číslo");
            }
            else{
                echo("$c je nula");
            }
        
        ?>
    </body>
</html>
