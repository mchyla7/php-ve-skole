<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
    // put your code here
    session_start();
    if ($_POST)
    {
        if ($_POST['reset'] == "Ano")
        {
            $_SESSION['soucet'] = 0;
        }
        else
        {
            $cislo1 = trim($_POST['cislo1']);

            if (isset($cislo1) && is_numeric($cislo1))
            {
                $_SESSION['soucet'] += $cislo1;
            }
            else
            {
            $vyzva = "Zadejte číselnou hodnotu";
            }
        }
    }
    else
    {
        $_SESSION['soucet'] = 0;
    }

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3> Sčítání </h3>
        <p> <?php if (isset($vyzva)) echo ($vyzva); ?></p>
        <form method="POST" action="">
            <input name="cislo1" type="text"/>
            <br /> <br />
            <input type="submit" value="Přičíst"/>
        </form>
        <p>Vynulovat součet</p>
        <form method="POST" action="">
            <input type="radio" name="reset" value="Ano"/>Ano
            <input type="radio" name="reset" value="Ne" checked/>Ne
            <br>
            </br>
            <?php if (isset($_SESSION['soucet'])) echo("Výsledek je: ". $_SESSION['soucet']);?></br> </br>
    </body>
</html>
