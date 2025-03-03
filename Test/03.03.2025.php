<!DOCTYPE html>

<!--
Program načítá dvě číselné hodnoty
Po použití tlačítka se zobrazí první hodnota + druhá hodnota = výsledek
Dále se zobrazí celkový součet všech výsledků
-->

<?php
    session_start();
    $celkem = 0;
    $chyba = "";

    if($_POST) 
    {
        $cislo1 = $_POST["cislo1"];
        $cislo2 = $_POST["cislo2"];
    }
    if(isset($cislo1) && isset($cislo2)){
        
        if(is_numeric($cislo1) && is_numeric($cislo2))
        {
            $celkem = $cislo1 + $cislo2;
            $_SESSION["celkem"] += $celkem;

            if ($cislo1 < 0)
            { 
                $cislo1 = "(" . $cislo1 . ")"; 
            }
            if ($cislo2 < 0) 
            { 
                $cislo2 = "(" . $cislo2 . ")"; 
            }
            if ($celkem < 0) 
            { 
                $celkem = "(" . $celkem . ")"; 
            }

            $_SESSION["vysledek"] = $cislo1 . " + " . $cislo2 . " = " . $celkem . "<br>" . $_SESSION["vysledek"];
        }
        else
        {
            $chyba = "Zadejte čísla";
        }
    }  
?>

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
        <form action="" method="post">
            <input type="number" name="cislo1"><br>
            <input type="number" name="cislo2"><br><br>
            <input type="submit" value="Ok">
        </form>

        <?php if ($chyba): ?>
            <p> <?=$chyba?></p>
        <?php endif; ?>

        <?php if($_POST):?>
            <p> <?=$_SESSION["vysledek"]?> </p><br>
            <p> Celkem: <?=$_SESSION["celkem"]?> </p>
        <?php endif;?>
    </body>
</html>