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
            <input name="text" type="text" /> <br />
            <input type="submit" value="Dělej" />
        </form>
        <?php
        // put your code here
        
        define("NL","<br>\n");
        if ($_POST)
        {
            $text = $_POST['text'];
            if(!empty($text)) // Ošetření při prvním volání
            {
                echo("Odstranění mezery před a za textem: ".trim($text).NL);
                echo("Počet znaků: ".mb_strlen($text).NL);
                echo("Vše velké: ". mb_strtoupper($text).NL);
                echo("Vše malé: ". mb_strtolower($text).NL);
                // mb_substr(Zdrojový text, od kterého znaku, počet znaků)
                echo("První znak: ". mb_substr($text,0,1).NL);
                echo("Bez prvního znaku: ". mb_substr($text,1).NL);
                echo("Poslední znak: ". mb_substr($text,-1,1).NL);
            }
        }
        ?>
    </body>
</html>
