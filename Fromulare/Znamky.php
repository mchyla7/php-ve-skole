<?php
    session_start();
    if ($_POST)
    {
        $predmet = trim($_POST['predmet']);
        $znamka = $_POST['znamka'];
        $scitaniZnamek = 0;
        $pocetZnamek = 1;
        if (isset($predmet) && isset($znamka) && is_numeric($znamka))
        {
            $_SESSION['tisk'].= $predmet . " " . $znamka . "; ";
            $scitaniZnamek += $znamka;
        }
        else
        {
            $vyzva = "Zadejte známku";
        }
    }
    else
    {
        $_SESSION['tisk'] = "";
    }
?>




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
        <h1>Známky</h1>
        <form method="post">
            <p>Předmět</p><input type="text" name="predmet" value=""><br>
            <p>Známka</p><input name="znamka" type="number" min="1" max="5"></br>
            <input type="submit" value="Ok">
        </form>
        <?php
        // put your code here

        echo $_SESSION['tisk'];
        echo $vyzva;
        echo ("Průměr je: " . $scitaniZnamek / $pocetZnamek);
        ?>
    </body>
</html>
