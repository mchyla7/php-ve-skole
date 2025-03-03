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
        <label>Zadejte text (oddělovač použij ;):</label><input name="text" type="text" /> <br />
            <input type="submit" value="Dělej" />
        </form>

        <?php
        // put your code here
        
        // Vytvořte formulářovou aplikaci. Použijte funkce konstrukce, které jsme probírali ve výuce
        // Ta načte text, který obsahuje řadu textových řetězců oddělenýc znakem ";"
        // Program pod sebe vypíše jednotlivé řetězce
        // Poté řetězec změní tak že:
        //      Odstraní případné mezery před a za textem
        //      Mezery uvnitř textu nahradí podtržítkem
        //      Písmena převede na velká písmena
        
        define("NL","<br>\n");
        $text = $_POST['text'];

        
        if(!empty(text))
        {
            $pole = explode(";", $text);
            echo ("Výpis pod sebe:".NL);
            echo(implode(NL, $pole).NL);
            echo("-------------------");
            
            
                for ($a=0; $a < count($text); $a++)
                {
                    $text[$a] = trim($text[$a]);
                    $text[$a] = str_replace(" ","_",$text[$a]);
                    $text[$a] = mb_strtoupper($text[$a]);   
                }
            
            sort($text);
        
            foreach($text as $vystup) 
            {
                echo($vystup . ";");
            }
        }
        else 
        {
            echo("Chyba v textu");
        }
        
        ?>
    </body>
</html>
