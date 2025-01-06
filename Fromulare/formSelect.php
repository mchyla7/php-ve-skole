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
        <form method="post" action="">
            <select name="operace">
                <option value="100">100</option>
                <option value="200">200</option>
                <option value="300">300</option>
                <option value="400">400</option>
                <option value="500">500</option>
            </select>
            <br>
            <input type="submit" value="Jo?">
        </form>
        <?php
        // put your code here
        if ($_POST)
        {
            echo("Vybrali jste: ".$_POST['operace']);
        }
        ?>
    </body>
</html>