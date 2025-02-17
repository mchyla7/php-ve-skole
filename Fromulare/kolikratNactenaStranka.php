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
        $soubor = "data1.txt";
        $data = 1;
        file_put_contents($soubor, $data);
        if (file_exists($soubor))
        {
            $data = file_get_contents($soubor);
            $data++;
            file_put_contents($soubor, $data);
            echo $data;
        }
        else{
            $data = 1;
        }
        echo $data;

        ?>
        <h1>Zapis</h1>
        <p>Stránka byla načtena: </p>
    </body>
</html>
