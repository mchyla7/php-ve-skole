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
            <input type="radio" name="odpoved" value="ano" checked="checked"/> 
            <label>Ano</label>
            <br>
            <input type="radio" name="odpoved" value="ne" <?php if (isset($_POST['odpoved']) and $_POST['odpoved']=="ne") echo ("checked=\'checked\'"); ?>> 
            <label>Ne</label> 
            <br>
            <input type="submit" value="Jo?">
        </form>

        
        <?php
            if ($_POST)
            {
                $odpoved = $_POST['odpoved'];
                if ($odpoved == "ano")
                {
                    echo "Vybrali jste Ano.";
                }
                else
                {
                    echo "Vybrali jste Ne.";
                }
            }
        ?>
            
    </body>
</html>
