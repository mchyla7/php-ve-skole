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
        <label>Zadejte text: </label><input name="text" type="text" /> <br />
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
                $cislisce = array(0,1,2,3,4,5,6,7,8,9);
                foreach ($cislisce as $c) $text = str_replace ($c, "", $text);
                        
                for ($i=mb_strlen($text)-1;$i>=0;$i--)echo($text[$i]);
                
            }
            }
            else
            {
                echo("Zadej text: ");
            }
        ?>
    </body>
</html>
