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
            $_SESSION['vypis'] = "";
            $_SESSION['vypisZnamenek'] = "";
        }
        else
        {
            $cislo1 = trim($_POST['cislo1']);
            $_SESSION['vypis'] .= $cislo1 . ", ";

            if (isset($cislo1) && is_numeric($cislo1))
            {
                if ($_POST['operace'] == "-")
                {
                    $_SESSION['soucet'] =  $_SESSION['soucet'] - $cislo1;
                    $_SESSION['vypisZnamenek'] .= "-" . ", ";
                }
                else if ($_POST['operace'] == "*")
                {
                    $_SESSION['soucet'] = $_SESSION['soucet'] * $cislo1;;
                    $_SESSION['vypisZnamenek'] .= "*" . ", ";
                }
                else if ($_POST['operace'] == "/")
                {
                    $_SESSION['soucet'] = $_SESSION['soucet'] / $cislo1;;
                    $_SESSION['vypisZnamenek'] .= "/" . ", ";
                }
                else
                {
                $_SESSION['soucet'] += $cislo1;
                $_SESSION['vypisZnamenek'] .= "+" . ", ";
                }
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
            <select name="operace">
                <option value="+" selected>+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <p>Vynulovat součet</p>
            <input type="radio" name="reset" value="Ano"/>Ano
            <input type="radio" name="reset" value="Ne" checked/>Ne
        </form>
            <br>
            </br>
            <?php if (isset($_SESSION['soucet'])) echo("Výsledek je: ". $_SESSION['soucet']);?></br> </br>
            <?php if (isset($_SESSION['vypis'])) echo("Čísla: ". $_SESSION['vypis']);?></br>
            <?php if (isset($_SESSION['vypisZnamenek'])) echo("Znaménka: ". $_SESSION['vypisZnamenek']);?></br>
    </body>
</html>
