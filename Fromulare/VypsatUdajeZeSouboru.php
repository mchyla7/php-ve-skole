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
        <h1>Vypsat údaje ze souboru txt</h1>
        <form action="" method="post">
            <input type="submit" name="submit" value="Vypsat">
        </form>
        <?php
        // put your code here
        if (isset($_POST['submit'])) {
            $soubor = "C:\\xampp\\htdocs\\chila\\Fromulare\\data1.txt";
            $radky = explode("\n", file_get_contents($soubor));
            
            foreach($radky as $radek)
            {
                echo $radek . "<br>";
            }
        }
        else
        {
            echo "Soubor neexistuje";
        }

        ?>
    </body>
</html>
