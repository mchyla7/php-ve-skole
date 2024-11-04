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
                echo("Odstranění mezery před a za textem: ".trim($text).NL);
                echo("Počet znaků: ".mb_strlen($text).NL);
                echo("Vše velké: ". mb_strtoupper($text).NL);
                echo("Vše malé: ". mb_strtolower($text).NL);
                // mb_substr(Zdrojový text, od kterého znaku, počet znaků)
                echo("První znak: ". mb_substr($text,0,1).NL);
                echo("Bez prvního znaku: ". mb_substr($text,1).NL);
                echo("Poslední znak: ". mb_substr($text,-1,1).NL);
                
                // mb_strpos($text," ")     Vrátí pozici prvního výskytu
                // Pokud funkce podřetězec nenajde, vrátí false
                // Abychom odlišili false od 0, musíme porovnávat přes ===
                // $a === $b hodnoty se rovnají a jsou stejného datového typu
                
                if (mb_strpos($text, " ")=== false)
                {
                    echo("V textu se nevyskytuje mezera".NL);
                }
                else
                {
                    echo("První pozice mezery v textu je ". mb_strpos($text," ").NL);
                }
                
                // str_replace(" ","", $text) v $text nahradí mezeru ""
                echo("Odstraněnění mezer: ". str_replace(" ", "", $text).NL);
                echo("<b>Výpis znaků pod sebe</b>".NL);
                
                for ($i = 0; $i<mb_strlen($text);$i++)
                    echo($text[$i].NL);
                
            }       
            else
            {
                echo("Zadej text: ");
            }
        }
        ?>
    </body>
</html>
