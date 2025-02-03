<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    session_start();
    if ($_POST)
    {
        $cislo = $_POST['cislo'];
        if (isset($cislo) && is_numeric($cislo))
        {
            if ($cislo < $_SESSION['cisloGen'])
            {
                echo "Zadej větší číslo";
            }
            else if ($cislo > $_SESSION['cisloGen'])
            {
                echo "Zadej menší číslo";
            }
            else
            {
                echo "Gratuluji, uhádl jsi číslo";
                $_SESSION['cisloGen'] = rand(0, 100);
            }
        }
        else
        {
            echo "Zadej číslo";
        }
    }

    if (!isset($_SESSION['cisloGen'])) {
        $_SESSION['cisloGen'] = rand(0, 100);
    }
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>


        <h1>Hádej číslo 0 až 100</h1>
        <form method="post">
            <input type="text" name="cislo" value="">
            <input type="submit" value="Odeslat">
        </form>
        <br>
        </br>

    </body>
</html>
