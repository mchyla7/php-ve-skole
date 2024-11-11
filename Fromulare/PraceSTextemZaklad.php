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
        <form method="POST" action = "">
        <p>Program načte text. Odstraní mezery před a za textem. Následně převede všechna písmena na velká. Poté upravený text zobrazí. Dále zobrazí počet znaků v textu.</p>
        <label>Zadejte Text: </label><input name="text" type="text" /> <br />
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
                $textBezMezer = trim($text);
                $pocetZnaku = mb_strlen($textBezMezer);
                $velkyText = mb_strtoupper($textBezMezer);
                echo($velkyText.NL);
                echo("Počet znaků je " .$pocetZnaku.NL);
                
                for ($i = 0; $i<mb_strlen($velkyText);$i++)
                    echo($velkyText[$i].NL);
                
            }       
            else
            {
                echo("Zadej text: ");
            }
        }
        ?>
    </body>
</html>
