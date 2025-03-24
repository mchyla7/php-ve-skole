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

    <h1>První formulář</h1>
        <form method="post" action="#">
            <input type="hidden" name="nacist" value="0">
            <input type="submit" value="První formulář">
        </form>
    <h1>Druhý formulář</h1>
        <form method="post" action="#">
            <input type="hidden" name="nacist" value="1">
            <input type="submit" value="Druhý formulář">
        </form>


        <?php
        // put your code here
        if ($_POST)
        {
            if ($_POST["nacist"] == 0)
            {
                echo "První formulář";
            }
            else
            {
                echo "Druhý formulář";
            }
        }
        ?>
    </body>
</html>
